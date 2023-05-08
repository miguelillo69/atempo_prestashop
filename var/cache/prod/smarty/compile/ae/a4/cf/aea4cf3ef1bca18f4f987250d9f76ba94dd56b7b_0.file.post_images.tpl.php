<?php
/* Smarty version 3.1.47, created on 2023-05-08 13:28:04
  from 'C:\xampp\htdocs\atempo_prestashop\modules\ph_simpleblog\views\templates\admin\simple_blog_posts\helpers\form\post_images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458dcc4d21e66_06451676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aea4cf3ef1bca18f4f987250d9f76ba94dd56b7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\modules\\ph_simpleblog\\views\\templates\\admin\\simple_blog_posts\\helpers\\form\\post_images.tpl',
      1 => 1683534386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458dcc4d21e66_06451676 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['image_uploader']->value;?>


<table class="table tableDnD" id="imageTable">
    <thead>
    <tr class="nodrag nodrop">
        <th class="fixed-width-lg"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</span></th>
        <th class="fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</span></th>
        <th></th>
    </tr>
    </thead>
    <tbody id="imageList"></tbody>
</table>

<table id="lineType" style="display:none;">
    <tr id="image_id">
        <td>
            <a href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
ph_simpleblog/galleries/image_filename.jpg" class="fancybox">
                <img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
ph_simpleblog/galleries/image_filename-thumb.jpg" alt="" title="" class="img-thumbnail" />
            </a>
        </td>
        <td id="td_image_id" class="pointer dragHandle center positionImage">
            image_position
        </td>
        <td>
            <a href="#" class="delete_post_image pull-right btn btn-default">
                <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this image','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

            </a>
        </td>
    </tr>
</table>

<?php echo '<script'; ?>
 type="text/javascript">
    var upbutton = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload an image','mod'=>'ph_simpleblog','js'=>1),$_smarty_tpl ) );?>
';
    var come_from = '<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
';
    var success_add =  '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The image has been successfully added.','mod'=>'ph_simpleblog','js'=>1),$_smarty_tpl ) );?>
';
    var id_tmp = 0;

    var ThickboxI18nImage = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image','mod'=>'ph_simpleblog','js'=>1),$_smarty_tpl ) );?>
";
    var ThickboxI18nOf = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'of','mod'=>'ph_simpleblog','js'=>1),$_smarty_tpl ) );?>
";
    var ThickboxI18nClose = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ph_simpleblog','js'=>1),$_smarty_tpl ) );?>
";
    var ThickboxI18nOrEscKey = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(or "Esc")','mod'=>'ph_simpleblog','js'=>1),$_smarty_tpl ) );?>
";
    var ThickboxI18nNext = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next >','mod'=>'ph_simpleblog','js'=>1),$_smarty_tpl ) );?>
";
    var ThickboxI18nPrev = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'< Previous','mod'=>'ph_simpleblog','js'=>1),$_smarty_tpl ) );?>
";
    var tb_pathToImage = "../img/loadingAnimation.gif";

    

    function imageLine(id, filename, position)
    {
        line = $("#lineType").html();
        line = line.replace(/image_id/g, id);
        line = line.replace(/image_filename/g, filename);
        line = line.replace(/image_position/g, position);
        line = line.replace(/<tbody>/gi, "");
        line = line.replace(/<\/tbody>/gi, "");

        $("#imageList").append(line);
    }

    $(document).ready(function()
    {
        
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                imageLine(<?php echo $_smarty_tpl->tpl_vars['image']->value->id;?>
, '<?php echo $_smarty_tpl->tpl_vars['image']->value->image;?>
', <?php echo $_smarty_tpl->tpl_vars['image']->value->position;?>
);
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        

        var originalOrder = false;

        $("#imageTable").tableDnD(
        {	onDragStart: function(table, row) {
            originalOrder = $.tableDnD.serialize();
        },
            onDrop: function(table, row) {
                if (originalOrder != $.tableDnD.serialize()) {
                    current = $(row).attr("id");
                    stop = false;
                    image_up = "{";
                    $("#imageList").find("tr").each(function(i) {
                        $("#td_" +  $(this).attr("id")).html(i + 1);
                        if (!stop || (i + 1) == 2)
                            image_up += '"' + $(this).attr("id") + '" : ' + (i + 1) + ',';
                    });
                    image_up = image_up.slice(0, -1);
                    image_up += "}";
                    updateImagePosition(image_up);
                }
            }
        });

        function afterDeletePostImage(data)
        {
            data = $.parseJSON(data);
            if (data)
            {
                id = data.id;
                if (data.status == 'ok'){
                    $("#" + id).remove();
                }
                refreshImagePositions($("#imageTable"));
                showSuccessMessage(data.confirmations);
            }
        }

        function refreshImagePositions(imageTable)
        {
            var reg = /_[0-9]$/g;
            var up_reg  = new RegExp("imgPosition=[0-9]+&");

            imageTable.find("tbody tr").each(function(i,el) {
                $(el).find("td.positionImage").html(i + 1);
            });
            imageTable.find("tr td.dragHandle a:hidden").show();
            imageTable.find("tr td.dragHandle:first a:first").hide();
            imageTable.find("tr td.dragHandle:last a:last").hide();
        }


        $('.delete_post_image').die().live('click', function(e)
        {
            e.preventDefault();
            id = $(this).parent().parent().attr('id');
            if (confirm("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure?','mod'=>'ph_simpleblog','js'=>1),$_smarty_tpl ) );?>
"))
                doAdminAjax({
                    "action":"deletePostImage",
                    "id_simpleblog_post_image" : id,
                    "token" : "<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
",
                    "tab" : "AdminSimpleBlogPosts",
                    "ajax" : 1 }, afterDeletePostImage
                );
        });

        function updateImagePosition(json)
        {
            doAdminAjax({
                "action":"updateImagePosition",
                "json":json,
                "token" : "<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
",
                "tab" : "AdminSimpleBlogPosts",
                "ajax" : 1
            });
        }

        function delQueue(id)
        {
            $("#img" + id).fadeOut("slow");
            $("#img" + id).remove();
        }

        $('.fancybox').fancybox();
    });
    
<?php echo '</script'; ?>
><?php }
}
