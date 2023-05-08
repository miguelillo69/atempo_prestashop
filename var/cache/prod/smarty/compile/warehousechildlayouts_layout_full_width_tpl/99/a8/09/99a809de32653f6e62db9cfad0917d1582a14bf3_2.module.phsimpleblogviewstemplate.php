<?php
/* Smarty version 3.1.47, created on 2023-05-08 13:28:22
  from 'module:phsimpleblogviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458dcd6a5ca19_61424676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99a809de32653f6e62db9cfad0917d1582a14bf3' => 
    array (
      0 => 'module:phsimpleblogviewstemplate',
      1 => 1683534391,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ph_simpleblog/views/templates/front/1.7/_partials/post-single-related-products.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/_partials/post-author.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/comments/layout.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/comments/facebook.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/comments/disqus.tpl' => 1,
  ),
),false)) {
function content_6458dcd6a5ca19_61424676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10347307806458dcd69dc741_25196899', 'head_og_tags');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11803539486458dcd69f59b6_98330438', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20604795036458dcd69fa254_99004678', 'hook_after_body_opening_tag');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4355890196458dcd6a06023_58103835', 'head_seo_title');
?>


<?php if (!empty($_smarty_tpl->tpl_vars['post']->value->meta_description)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9041345456458dcd6a0a0b5_33096545', 'head_seo_description');
?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['post']->value->meta_keywords)) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5914928916458dcd6a0b881_98623999', 'head_seo_keywords');
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20594632896458dcd6a0d241_31600632', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'head_og_tags'} */
class Block_10347307806458dcd69dc741_25196899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_og_tags' => 
  array (
    0 => 'Block_10347307806458dcd69dc741_25196899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['post']->value->meta_title)) && $_smarty_tpl->tpl_vars['post']->value->meta_title != '') {?>
		<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->meta_title, ENT_QUOTES, 'UTF-8');?>
">
	<?php } else { ?>
		<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
	<?php }?>
	<meta property="og:url" content="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
	<meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/>
	<meta property="og:type" content="article"/>

	<?php if ((isset($_smarty_tpl->tpl_vars['post']->value->banner_thumb)) && $_smarty_tpl->tpl_vars['post']->value->banner_thumb) {?>
		<meta property="og:image" content="https://<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->banner_thumb,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_og_logo'])) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_og_logo'] != '') {?>
			<meta property="og:image" content="https://<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_og_logo'], ENT_QUOTES, 'UTF-8');?>
" />
		<?php } else { ?>
			<meta property="og:image" content="https://<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" />
		<?php }?>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['post']->value->meta_description)) && $_smarty_tpl->tpl_vars['post']->value->meta_description != '') {?>
		<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->meta_description, ENT_QUOTES, 'UTF-8');?>
">
	<?php } else { ?>
		<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
	<?php }?>

	<meta property="fb:admins" content="<?php echo htmlspecialchars(intval(Configuration::get('PH_BLOG_FACEBOOK_MODERATOR')), ENT_QUOTES, 'UTF-8');?>
"/>
	<meta property="fb:app_id" content="<?php echo htmlspecialchars(intval(Configuration::get('PH_BLOG_FACEBOOK_APP_ID')), ENT_QUOTES, 'UTF-8');?>
"/>
<?php
}
}
/* {/block 'head_og_tags'} */
/* {block 'page_title'} */
class Block_11803539486458dcd69f59b6_98330438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_11803539486458dcd69f59b6_98330438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_20604795036458dcd69fa254_99004678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_20604795036458dcd69fa254_99004678',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\atempo_prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (Configuration::get('PH_BLOG_FB_INIT')) {?><div id="fb-root"></div><?php echo '<script'; ?>
>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = 'https://connect.facebook.net/<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['language']->value['locale'],'-','_'), ENT_QUOTES, 'UTF-8');?>
/sdk.js#xfbml=1&version=v3.2&appId=&autoLogAppEvents=1';fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
><?php }
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'head_seo_title'} */
class Block_4355890196458dcd6a06023_58103835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_title' => 
  array (
    0 => 'Block_4355890196458dcd6a06023_58103835',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['post']->value->meta_title)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->meta_title, ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_9041345456458dcd6a0a0b5_33096545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_description' => 
  array (
    0 => 'Block_9041345456458dcd6a0a0b5_33096545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->meta_description, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_5914928916458dcd6a0b881_98623999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_keywords' => 
  array (
    0 => 'Block_5914928916458dcd6a0b881_98623999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->meta_keywords, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'hook_blog_elementor'} */
class Block_18324361936458dcd6a2ebe5_65114661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'elementorContent');?>

            <?php
}
}
/* {/block 'hook_blog_elementor'} */
/* {block 'page_content'} */
class Block_20594632896458dcd6a0d241_31600632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_20594632896458dcd6a0d241_31600632',
  ),
  'hook_blog_elementor' => 
  array (
    0 => 'Block_18324361936458dcd6a2ebe5_65114661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\atempo_prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php $_smarty_tpl->_assignInScope('post_type', $_smarty_tpl->tpl_vars['post']->value->post_type);?>
<div class="simpleblog__postInfo text-muted">
    <ul>
    	<?php if (Configuration::get('PH_BLOG_DISPLAY_DATE')) {?>
        <li>
            <i class="fa fa-calendar"></i>
        	<span>
        		<time>
        			<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date_add,Configuration::get('PH_BLOG_DATEFORMAT')), ENT_QUOTES, 'UTF-8');?>

        		</time>
        	</span>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value->author && Configuration::get('PH_BLOG_DISPLAY_AUTHOR')) {?>
        <li>
            <i class="fa fa-user"></i>
        	<span>
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['post']->value->author->active)===null||$tmp==='' ? false : $tmp)) {?>
                <a href="#blog-author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author, ENT_QUOTES, 'UTF-8');?>
</a>
                <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author, ENT_QUOTES, 'UTF-8');?>

                <?php }?>
	        </span>
        </li>
        <?php }?>
        <?php if (Configuration::get('PH_BLOG_DISPLAY_CATEGORY')) {?>
        <li>
            <i class="fa fa-tags"></i>
        	<span>
	        	<a
	        		href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ph_simpleblog','category',array('sb_category'=>$_smarty_tpl->tpl_vars['post']->value->category_rewrite)), ENT_QUOTES, 'UTF-8');?>
"
	        		title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->category, ENT_QUOTES, 'UTF-8');?>
"
	        	>
	        		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->category, ENT_QUOTES, 'UTF-8');?>

	        	</a>
	        </span>

        </li>
        <?php }?>
        <?php if (Configuration::get('PH_BLOG_DISPLAY_LIKES')) {?>
        <li>
        	<a href="#" data-guest="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guest']->value, ENT_QUOTES, 'UTF-8');?>
" data-post="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->id_simpleblog_post, ENT_QUOTES, 'UTF-8');?>
" class="simpleblog-like-button">
                <i class="fa fa-heart"></i>
	        	<span class="likes-count">
	        		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->likes, ENT_QUOTES, 'UTF-8');?>

	        	</span>
	        	<span>
		        	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'likes','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

		        </span>
	        </a>
        </li>
        <?php }?>
        <?php if (Configuration::get('PH_BLOG_DISPLAY_VIEWS')) {?>
        <li>
            <i class="fa fa-eye"></i>
        	<span>
	        	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->views, ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'views','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

	        </span>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['allow_comments']->value == true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'native') {?>
        <li>
            <i class="fa fa-comments"></i>
        	<span>
        		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->url, ENT_QUOTES, 'UTF-8');?>
#phsimpleblog_comments"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->comments, ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comments','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</a>
        	</span>
        </li>
        <?php }?>
    </ul>
</div>
<div class="simpleblog__post blog-mb cardblog">
	<?php if ($_smarty_tpl->tpl_vars['post']->value->featured_image && Configuration::get('PH_BLOG_DISPLAY_FEATURED')) {?>
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->featured_image, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid mb-4" />
	<?php }?>
    <div class="simpleblog__post__content card-block pb-1">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'elementorContent', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlogElementor'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if (!empty($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'elementorContent'))) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18324361936458dcd6a2ebe5_65114661', 'hook_blog_elementor', $this->tplIndex);
?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['post_type']->value == 'gallery' && count($_smarty_tpl->tpl_vars['post']->value->gallery)) {?>
        <div class="post-gallery">
            <?php if ($_smarty_tpl->tpl_vars['post']->value->gallery_style == 'masonry') {?>
            <div class="post-gallery__gallery-js">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->gallery, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                    <a rel="post-gallery-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->id_simpleblog_post, ENT_QUOTES, 'UTF-8');?>
" class="blog-fancybox gallery-js__elem" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_dir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image'], ENT_QUOTES, 'UTF-8');?>
.jpg" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View full','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_dir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image'], ENT_QUOTES, 'UTF-8');?>
-thumb.jpg" class="img-fluid" /></a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div><!-- .post-gallery -->
            <?php } else { ?>
            <div class="post-gallery__row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->gallery, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['post']->value->gallery_style == '3columns') {?>
                <?php $_smarty_tpl->_assignInScope('galleryCols', 'col-lg-4 col-md-4');?>
                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->gallery_style == '4columns') {?>
                <?php $_smarty_tpl->_assignInScope('galleryCols', 'col-lg-3 col-md-4');?>
                <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('galleryCols', 'col-lg-6 col-md-6');?>
                <?php }?>
                <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['galleryCols']->value, ENT_QUOTES, 'UTF-8');?>
 col-xs-6 post-gallery__elem">
                    <a rel="post-gallery-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->id_simpleblog_post, ENT_QUOTES, 'UTF-8');?>
" class="blog-fancybox" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_dir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image'], ENT_QUOTES, 'UTF-8');?>
.jpg" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View full','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_dir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image'], ENT_QUOTES, 'UTF-8');?>
-square.jpg" class="img-fluid" /></a>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div><!-- .post-gallery -->
            <?php }?>
        </div>
		<?php } elseif ($_smarty_tpl->tpl_vars['post_type']->value == 'video') {?>
		<div class="post-video" itemprop="video">
			<?php echo $_smarty_tpl->tpl_vars['post']->value->video_code;?>

		</div><!-- .post-video -->
		<?php }?>
    </div>
    <div class="simpleblog__post__after-content" id="displayPrestaHomeBlogAfterPostContent">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPrestaHomeBlogAfterPostContent'),$_smarty_tpl ) );?>

	</div><!-- #displayPrestaHomeBlogAfterPostContent -->

</div>


<?php if (Configuration::get('PH_BLOG_DISPLAY_SHARER')) {?>
<div class="simpleblog__share blog-mb">
    <h2 class="section-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share this post','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</span></h2>
    <ul class="my-2">
        <li>
        	<a
        		data-type="twitter"
        		href="#"
        		class="btn btn-blog-social btn-blog-social--twitter"
        	>
        		Twitter
        	</a>
       	</li>
        <li>
        	<a
        		data-type="facebook"
        		href="#"
        		class="btn btn-blog-social btn-blog-social--facebook"
        	>
        		Facebook
        	</a>
        </li>
        <li>
        	<a
        		data-type="pinterest"
        		href="#"
        		class="btn btn-blog-social btn-blog-social--pinterest"
        	>
        		Pinterest
        	</a>
        </li>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlogForPrestaShopSocialSharing'),$_smarty_tpl ) );?>

    </ul>
</div>
<?php }?>


<?php if (Configuration::get('PH_BLOG_DISPLAY_RELATED') && $_smarty_tpl->tpl_vars['related_products']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/_partials/post-single-related-products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['post']->value->author->active)===null||$tmp==='' ? false : $tmp) && Configuration::get('PH_BLOG_DISPLAY_AUTHOR')) {?>
		<?php $_smarty_tpl->_subTemplateRender('module:ph_simpleblog/views/templates/front/1.7/_partials/post-author.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('author'=>$_smarty_tpl->tpl_vars['post']->value->author), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['allow_comments']->value == true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'native') {?>
	<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/comments/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['allow_comments']->value == true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'facebook') {?>
	<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/comments/facebook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['allow_comments']->value == true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'disqus') {?>
	<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/comments/disqus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php echo '<script'; ?>
 type="application/ld+json">
<?php echo $_smarty_tpl->tpl_vars['jsonld']->value;?>

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'page_content'} */
}
