<?php
/**
 * 2017 IQIT-COMMERCE.COM
 *
 * NOTICE OF LICENSE
 *
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement
 *
 *  @author    IQIT-COMMERCE.COM <support@iqit-commerce.com>
 *  @copyright 2017 IQIT-COMMERCE.COM
 *  @license   Commercial license (You can not resell or redistribute this software.)
 *
 */

class IqitReviewsActionsModuleFrontController extends ModuleFrontController
{
    public function init()
    {
        parent::init();

        require_once $this->module->getLocalPath() . 'src/IqitProductReview.php';
    }

    public function postProcess()
    {
        if (Tools::getValue('process') == 'addProductReview') {
            $this->ajaxProcessAddProductReview();
        }
    }

    /**
     * Add a product review.
     */
    protected function ajaxProcessAddProductReview()
    {
        header('Content-Type: application/json');

        $message = '';
        $errors = array();
        $idGuest = 0;
        $idCustomer = (int)$this->context->customer->id;
        $idProduct = (int)Tools::getValue('iqitreviews_id_product');
        $product = new Product($idProduct);

        if (!$idCustomer) {
            $idGuest = $this->context->customer->id_guest;
        }

        if (!Validate::isInt($idProduct)) {
            $errors[] = $this->trans('Wrong product id', [], 'Modules.Iqitreviews.Actions');
        }
        if (!Tools::getValue('iqitreviews_title') || !Validate::isGenericName(Tools::getValue('iqitreviews_title'))) {
            $errors[] = $this->trans('Title is incorrect', [], 'Modules.Iqitreviews.Actions');

        }
        if (!Tools::getValue('iqitreviews_comment') || !Validate::isMessage(Tools::getValue('iqitreviews_comment'))) {
            $errors[] = $this->trans('Comment is incorrect', [], 'Modules.Iqitreviews.Actions');
        }
        if (!$idCustomer && (!Tools::isSubmit('iqitreviews_customer_name') || !Tools::getValue('iqitreviews_customer_name') || !Validate::isGenericName(Tools::getValue('iqitreviews_customer_name')))) {
            $errors[] = $this->trans('Customer name is incorrect', [], 'Modules.Iqitreviews.Actions');
        }
        if (!$this->context->customer->id && !Configuration::get($this->module->cfgName . 'guest')) {
            $errors[] = $this->trans('You must be logged to rate product', [], 'Modules.Iqitreviews.Actions');
        }
        if (!Validate::isInt(Tools::getValue('iqitreviews_rating'))) {
            $errors[] = $this->trans('Wrong rating', [], 'Modules.Iqitreviews.Actions');
        }

        if (!$product->id) {
            $errors[] = $this->trans('Product not found', [], 'Modules.Iqitreviews.Actions');
        }

        if (!count($errors)) {
            $customerReview = IqitProductReview::getByCustomer($idProduct, $idCustomer, true, $idGuest);

            if (!$customerReview || ($customerReview && (strtotime($customerReview['date_add']) + 60) < time())) {
                $review = new IqitProductReview();
                $review->id_product = $idProduct;
                $review->id_customer = $idCustomer;
                $review->id_guest = $idGuest;
                $review->title = strip_tags(Tools::getValue('iqitreviews_title'));
                $review->rating = (int)Tools::getValue('iqitreviews_rating');
                $review->comment = strip_tags(Tools::getValue('iqitreviews_comment'));
                $review->customer_name = strip_tags(Tools::getValue('iqitreviews_customer_name'));

                if (!$review->customer_name) {
                    $review->customer_name = pSQL($this->context->customer->firstname);
                }

                if (Configuration::get($this->module->cfgName . 'autopublish')) {
                    $review->status = 1;
                } else {
                    $review->status = 0;
                }

                $review->save();

                $result = true;
                $message = $this->trans('Review added', [], 'Modules.Iqitreviews.Actions');
            } else {
                $result = false;
                $errors[] = $this->trans('Please wait 60 seconds before posting another comment', [], 'Modules.Iqitreviews.Actions');
            }
        } else {
            $result = false;
            $message = $this->trans('There was error(s) during adding a review', [], 'Modules.Iqitreviews.Actions');
        }

        $this->module->clearCache($idProduct);

        $this->ajaxDie(json_encode(array(
            'success' => $result,
            'data' => [
                'errors' => $errors,
                'message' => $message
            ]
        )));
    }
}
