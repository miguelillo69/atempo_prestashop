/**
 * 2007-2019 PrestaShop.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

import getQueryParameters from './urlparser';
import NumberFormatter from '../cldr/number-formatter';
import noUiSlider from 'nouislider'



/**
 * Refresh facets sliders
 */
const refreshSliders = () => {
  $('.faceted-slider').each(function initializeSliders() {
    const $el = $(this);
    const values = $el.data('slider-values');
    const specifications = $el.data('slider-specifications');

    let formatter;

    if (specifications !== null && specifications !== undefined) {
      formatter = NumberFormatter.build(specifications);
    }


    const displayLabelBlock = (displayBlock, min, max) => {
      if (formatter === undefined) {
        displayBlock.text(
            displayBlock.text().replace(
                /([^\d]*)(?:[\d .,]+)([^\d]+)(?:[\d .,]+)(.*)/,
                `$1${min}$2${max}$3`,
            ),
        );
      } else {
        displayBlock.text(
            `${formatter.format(min)} - ${formatter.format(max)}`,
        );
      }
    };



    var sliderjq = document.getElementById('slider-range_' + $el.data('slider-id'));


    if (typeof sliderjq.noUiSlider !== 'undefined') {
      console.log('%c Ps_facetedsearch is duplicated. Please disable one from left column(by unhook) or from above product list (in themeditor > content > product list) ', 'background: #222; color: #bada55');
    } else{
      noUiSlider.create(sliderjq, {
        start: [values === null ? $el.data('slider-min') : values[0], values === null ? $el.data('slider-max') : values[1]],
        connect: true,
        range: {
          'min': $el.data('slider-min'),
          'max': $el.data('slider-max')
        }
      });
    }

    sliderjq.noUiSlider.on('update', function (values, handle) {

      displayLabelBlock(
          $(`#facet_label_${$el.data('slider-id')}`),
          values[0],
          values[1],
      );

    });

    sliderjq.noUiSlider.on('set', function (values, handle) {
      const nextEncodedFacetsURL = $el.data('slider-encoded-url');
      const urlsSplitted = nextEncodedFacetsURL.split('?');
      let queryParams = [];

      // Retrieve parameters if exists
      if (urlsSplitted.length > 1) {
        queryParams = getQueryParameters(urlsSplitted[1]);
      }

      let found = false;
      queryParams.forEach((query) => {
        if (query.name === 'q') {
          found = true;
        }
      });

      if (!found) {
        queryParams.push({name: 'q', value: ''});
      }

      // Update query parameter
      queryParams.forEach((query) => {
        if (query.name === 'q') {
          // eslint-disable-next-line
          query.value += [
            query.value.length > 0 ? '/' : '',
            $el.data('slider-label'),
            '-',
            $el.data('slider-unit'),
            '-',
            values[0],
            '-',
            values[1],
          ].join('');
        }
      });

      const requestUrl = [
        urlsSplitted[0],
        '?',
        $.param(queryParams),
      ].join('');

      prestashop.emit(
          'updateFacets',
          requestUrl,
      );
    });
  });
};

export default refreshSliders;
