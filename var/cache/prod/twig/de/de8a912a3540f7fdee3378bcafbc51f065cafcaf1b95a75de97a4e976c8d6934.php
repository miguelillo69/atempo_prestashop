<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__aa420da1da5a47055be698641a004a1a86712d990bc3f514e937ed6cb8b97ae0 */
class __TwigTemplate_c39ade81b5f1547e864c9155d5ac1eca0209fdb15bbd4a6c0ca0a1d61aa9c266 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/atempo_prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/atempo_prestashop/img/app_icon.png\" />

<title>Gestor de módulos • Atempo</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '1.7.8.8';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '774b1a9a0a158afb936cb9fa7dbf9c80';
    var token_admin_orders = tokenAdminOrders = 'aa8c1025fbbbfe6d723c6c46f48f1e8e';
    var token_admin_customers = '6ac1a7616733b1558e338a1490559cd0';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'bd045a40deeb9df88a9e84a9d421c73d';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = 'b88970557ee2b48597f690e4427b88f5';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/atempo_prestashop/admin_gui01/index.php/improve/modules/catalog/recommended?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0';
    var admin_notification";
        // line 42
        echo "_get_link = '/atempo_prestashop/admin_gui01/index.php/common/notifications?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0';
    var admin_notification_push_link = adminNotificationPushLink = '/atempo_prestashop/admin_gui01/index.php/common/notifications/ack?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/atempo_prestashop/admin_gui01/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/atempo_prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/atempo_prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/atempo_prestashop/admin_gui01/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/atempo_prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/atempo_prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/atempo_prestashop/modules/ph_simpleblog/css/simpleblog-admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/atempo_prestashop/modules/iqitelementor/views/css/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/atempo_prestashop\\/admin_gui01\\/\";
var baseDir = \"\\/atempo_prestashop\\/\";
var changeFormLanguageUrl = \"\\/atempo_prestashop\\/admin_gui01\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\"";
        // line 64
        echo ":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var iqitModulesAdditionalTabs = {\"ajaxUrl\":\"http:\\/\\/localhost\\/atempo_prestashop\\/admin_gui01\\/index.php?controller=AdminModules&token=f17e35ff3b98085d5940c638f3464f2e&ajax=1&configure=iqitadditionaltabs\"};
var iqitModulesSizeCharts = {\"ajaxUrl\":\"http:\\/\\/localhost\\/atempo_prestashop\\/admin_gui01\\/index.php?controller=AdminModules&token=f17e35ff3b98085d5940c638f3464f2e&ajax=1&configure=iqitsizecharts\"};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/atempo_prestashop/admin_gui01/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/atempo_prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/atempo_prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/atempo_prestashop/js/admin.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/atempo_prestashop/admin_gui01/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/atempo_prestashop/js/tools.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/atempo_prestashop/js/vendor/d";
        // line 80
        echo "3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/atempo_prestashop/admin_gui01/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/atempo_prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/atempo_prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/atempo_prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/atempo_prestashop/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/atempo_prestashop/admin_gui01/index.php/common/notifications?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/atempo_prestashop\\/admin_gui01\\/index.php?controller=AdminGamification&token=6fc036cc0ddbea23ead514903e31451c\";
            var current_id_tab = 45;
        </script>

";
        // line 105
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminmodulesmanage\"
  data-base-url=\"/atempo_prestashop/admin_gui01/index.php\"  data-token=\"SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminDashboard&amp;token=f34ed29c07d69ef3729f627c6716ea7e\"></a>
      <span id=\"shop_version\">1.7.8.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=931c72921dc6a22cc02ce02f78b9b169\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link active\"
         href=\"http://localhost/atempo_prestashop/admin_gui01/index.php/improve/modules/manage?token=320f446601ae9746457d53ba364bf3cf\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/atempo_prestashop/admin_gui01/index.php/sell/catalog/categories/new?token=320f446601ae9746457d53ba364bf3cf\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/atempo_prestashop/admin_gui01/index.php/sell/catalog/products/new?token=320f44660";
        // line 139
        echo "1ae9746457d53ba364bf3cf\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=04700f08d24812a332cbbcc5de079d83\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminOrders&amp;token=aa8c1025fbbbfe6d723c6c46f48f1e8e\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"190\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminQuickAccesses&token=4061d494a8bddb7b2eb1c7b1637ebf45\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"M&oacute;dulos - Lista\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Eliminar del Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminQuickAccesses&token=4061d494a8bddb7b2eb1c7b1637ebf45\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/atempo_prestashop/admin_gui01/index.php?controller=AdminSearch&amp;token=36d1f01b9e2f3fc74ab5c04b1600dee9\"
      role=\"search\">
  <input t";
        // line 179
        echo "ype=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID";
        // line 194
        echo " carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/atempo_prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                            ";
        // line 242
        echo "        <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=feaf23b95194f040bbd95289381c1e33\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay men";
        // line 286
        echo "sajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/atempo_prestashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Bienvenido de nuevo, Miguel</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/employees/1/edit?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <";
        // line 336
        echo "p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formación</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Marketplace de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centro de ayuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminLogin&amp;logout=1&amp;token=d099e129488ff83cfe6b5e689e73bec4\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/employees/toggle-navigation?_tok";
        // line 354
        echo "en=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminDashboard&amp;token=f34ed29c07d69ef3729f627c6716ea7e\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/orders/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                              ";
        // line 397
        echo "                              
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/orders/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/orders/invoices/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/orders/credit-slips/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/orders/delivery-slips/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Albaranes de entrega
                                </a>
                     ";
        // line 425
        echo "         </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminCarts&amp;token=feaf23b95194f040bbd95289381c1e33\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/catalog/products?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/s";
        // line 456
        echo "ell/catalog/products?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/catalog/categories?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/catalog/monitoring/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminAttributesGroups&amp;token=32fdfd69167c6cb638e3c8007fc7ac97\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                  ";
        // line 486
        echo "                          
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/catalog/brands/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/attachments/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminCartRules&amp;token=04700f08d24812a332cbbcc5de079d83\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/stocks/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Stock
                                </a>
    ";
        // line 514
        echo "                          </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/customers/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/customers/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/atempo_prestashop/admi";
        // line 545
        echo "n_gui01/index.php/sell/addresses/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminCustomerThreads&amp;token=bd045a40deeb9df88a9e84a9d421c73d\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminCustomerThreads&amp;token=bd045a40deeb9df88a9e84a9d421c73d\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                         ";
        // line 574
        echo "         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/sell/customer-service/order-messages/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminReturn&amp;token=b40452f1c1187c492a2f49bc3c5dd597\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminStats&amp;token=931c72921dc6a22cc02ce02f78b9b169\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                     ";
        // line 604
        echo "       </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/modules/manage?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/modules/manage?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Gestor de módulo
                                </a>
                              </li>

                 ";
        // line 640
        echo "                                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/modules/catalog?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Catálogo de Módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/design/themes/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                            ";
        // line 669
        echo "    <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/design/themes/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminThemesCatalog\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/design/themes-catalog/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Catálogo de Temas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/design/mail_theme/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/design/cms-pages/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                        ";
        // line 698
        echo "      
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/design/modules/positions/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminImages&amp;token=8fd37a1a03f1214c1bbb61979297c3e7\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminParentIqitElementor\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminIqitElementor&amp;token=63ffbaea9d67405121aaaea43ead8591\" class=\"link\"> IqitElementor - Page builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-IqitFrontThemeEditor\">
                                <a href=\"http://localhost/atempo_p";
        // line 725
        echo "restashop/admin_gui01/index.php?controller=IqitFrontThemeEditor&amp;token=210377ba4932cb8d4b6a2e887bd881f9\" class=\"link\"> IqitThemeEditor - Live
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminIqitThemeEditor\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminIqitThemeEditor&amp;token=7fa0cf2b78159d040ada5dce47462938\" class=\"link\"> IqitThemeEditor - Backoffice
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminCarriers&amp;token=5a15bfb71739ab9cb56f10c67b4e1c9e\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
   ";
        // line 755
        echo "                           
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminCarriers&amp;token=5a15bfb71739ab9cb56f10c67b4e1c9e\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/shipping/preferences/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/payment/payment_methods?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                     ";
        // line 785
        echo "                       </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/payment/payment_methods?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/payment/preferences?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/international/localization/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class";
        // line 815
        echo "=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/international/localization/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/international/zones/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/international/taxes/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Impuestos
                                </a>
                              </li>

       ";
        // line 844
        echo "                                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/international/translations/settings?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"152\" id=\"subtab-AdminBlogForPrestaShop\">
                    <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminSimpleBlogPosts&amp;token=548dd98652e966fcf3c81ffb58e86ba9\" class=\"link\">
                      <i class=\"material-icons mi-note\">note</i>
                      <span>
                      Blog for PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-152\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminSimpleBlogPosts\">
                                <a href=\"htt";
        // line 873
        echo "p://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminSimpleBlogPosts&amp;token=548dd98652e966fcf3c81ffb58e86ba9\" class=\"link\"> Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-AdminSimpleBlogCategories\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminSimpleBlogCategories&amp;token=184beb34f35b263a63d72ac2999fc06c\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminSimpleBlogComments\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminSimpleBlogComments&amp;token=5b92c83134e7926780f2b4ecd8960dc3\" class=\"link\"> Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminSimpleBlogTags\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminSimpleBlogTags&amp;token=d912d1ded03d16b707e856d6443bd56b\" class=\"link\"> Tags
                                </a>
                              </li>

                                                                      ";
        // line 901
        echo "            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminSimpleBlogAuthors\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminSimpleBlogAuthors&amp;token=e00a021c6291be3a43bc46f88af0da44\" class=\"link\"> Autores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminSimpleBlogSettings\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminSimpleBlogSettings&amp;token=43fc478e0980805d1efee6cbf502b8f9\" class=\"link\"> Settings
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/shop/preferences/preferences?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      ";
        // line 936
        echo "<span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/shop/preferences/preferences?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/shop/order-preferences/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Configuración de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/shop/product-pre";
        // line 964
        echo "ferences/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/shop/customer-preferences/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Ajustes sobre clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/shop/contacts/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/shop/seo-urls/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                       ";
        // line 994
        echo "                                     
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminSearchConf&amp;token=aa435486383ca62dc44505a94d485353\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminGamification&amp;token=6fc036cc0ddbea23ead514903e31451c\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/system-information/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            ";
        // line 1022
        echo "</i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/system-information/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/performance/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/administration/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
           ";
        // line 1052
        echo "                   <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/emails/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Dirección de correo electrónico
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/import/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/employees/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/sql-requests/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Base de datos
                                </a>
        ";
        // line 1079
        echo "                      </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/logs/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/webservice-keys/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/atempo_prestashop/admin_gui01/index.php/configure/advanced/feature-flags/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" class=\"link\"> Características experimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
          ";
        // line 1109
        echo "            
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"136\" id=\"tab-AdminRevslider\">
                <span class=\"title\">Revolution Slider</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"137\" id=\"subtab-AdminRevsliderSliders\">
                    <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminRevsliderSliders&amp;token=66bb048e92d594a651ca127b1781184f\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Sliders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"138\" id=\"subtab-AdminRevolutionsliderGlobalSettings\">
                    <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminRevolutionsliderGlobalSettings&amp;token=8ce5bb7448ce45c7a8d8707ec9b87839\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Global Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
            ";
        // line 1144
        echo "                                                </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"139\" id=\"subtab-AdminRevolutionsliderAddons\">
                    <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminRevolutionsliderAddons&amp;token=ce09beff3d7e99f49d3dd17b8296c382\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Addons
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"140\" id=\"subtab-AdminRevolutionsliderNavigation\">
                    <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminRevolutionsliderNavigation&amp;token=8a4e2ff818df0f952c4e3aca926e9013\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Navigation
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                        ";
        // line 1175
        echo "    </a>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      ¡Lanza tu tienda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resumen</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Detener módulo Primeros pasos</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestor de módulo</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/modules/manage?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" aria-current=\"page\">Módulos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestor de módulos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Subir un módulo\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Subir un módulo
                </a>
                                                                        <a
        ";
        // line 1235
        echo "          class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Conectarse a Addons Marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Conectarse a Addons Marketplace
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/atempo_prestashop/admin_gui01/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.8%2526country%253Des/Ayuda?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/modules/manage?_token";
        // line 1262
        echo "=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"45\">
                      Módulos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/modules/alerts?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Alertas
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/atempo_prestashop/admin_gui01/index.php/improve/modules/updates?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"47\">
                      Actualizaciones
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ";
        // line 1285
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Subir un módulo\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Subir un módulo
              <i class=\"material-icons\">cloud_upload</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Conectarse a Addons Marketplace\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Conectarse a Addons Marketplace
              <i class=\"material-icons\">vpn_key</i>            </";
        // line 1306
        echo "a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/atempo_prestashop/admin_gui01/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.8%2526country%253Des/Ayuda?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuar</button>
  <a class=\"onboarding-button-shut-down\">Saltar este";
        // line 1356
        echo " tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\r\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\r\\n  <p class=\\\"welcome\\\">\\u00a1Bienvenido a su tienda!<\\/p>\\r\\n  <div class=\\\"content\\\">\\r\\n    <p>\\u00a1Hola! Me llamo Presto y estoy aqu\\u00ed para ense\\u00f1arle todo esto.<\\/p>\\r\\n    <p>Descubrir\\u00e1 algunos pasos esenciales antes de poder lanzar su tienda:\\r\\n    Cree su primer producto, personalice su tienda, configure env\\u00edos y pagos...<\\/p>\\r\\n  <\\/div>\\r\\n  <div class=\\\"started\\\">\\r\\n    <p>\\u00a1Empecemos!<\\/p>\\r\\n  <\\/div>\\r\\n  <div class=\\\"buttons\\\">\\r\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">M\\u00e1s tarde<\\/button>\\r\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Empezar<\\/button>\\r\\n  <\\/div>\\r\\n<\\/div>\\r\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/atempo_prestashop\\/admin_gui01\\/index.php?controller=AdminDashboard&token=f34ed29c07d69ef3729f627c6716ea7e\"}]},{\"name\":\"product\",\"title\":\"Vamos a crear su primer producto\",\"subtitle\":{\"1\":\"\\u00bfQu\\u00e9 quiere contar sobre el producto? Piense en lo que sus clientes quieren saber.\",\"2\":\"A\\u00f1ada informaci\\u00f3n clara y atractiva. No se preocupe, podr\\u00e1 editarlo m\\u00e1s tarde :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dele a su producto un nombre atractivo.\",\"options\":[\"savepoint\"],\"page\":[\"\\/atempo_prestashop\\/admin_gui01\\/index.php\\/sell\\/catalog\\/products\\/new?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Complete los detalles esenciales en esta pesta\\u00f1a. Las otras pesta\\u00f1as son para informaci\\u00f3n m\\u00e1s avanzada.\",\"page\":\"index.php\\/sell\\/catalo";
        // line 1364
        echo "g\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00a1A\\u00f1ada una o m\\u00e1s im\\u00e1genes para que su producto atraiga la atenci\\u00f3n!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00bfA qu\\u00e9 precio quiere venderlo?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"\\u00a1Genial! Acaba de crear su primer producto. Tiene buena pinta, \\u00bfverdad?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Dele a su tienda su propia identidad\",\"subtitle\":{\"1\":\"\\u00bfQu\\u00e9 aspecto quiere para su tienda? \\u00bfQu\\u00e9 la hace especial?\",\"2\":\"Personalice su tema o escoja el mejor dise\\u00f1o de nuestro cat\\u00e1logo de temas.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u00a1Una buena manera de empezar es a\\u00f1adir su propio logotipo aqu\\u00ed!\",\"options\":[\"savepoint\"],\"page\":\"\\/atempo_prestashop\\/admin_gui01\\/index.php\\/improve\\/design\\/themes\\/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Si quiere algo realmente especial, \\u00a1eche un vistazo al cat\\u00e1logo de temas!\",\"page\":\"\\/atempo_prestashop\\/admin_gui01\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Prepara tu tienda para recibir pagos\",\"subtitle\":{\"1\":\"\\u00bfC\\u00f3mo quiere que le paguen sus clientes?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Estos m\\u00e9todos de pago ya est\\u00e1n dispo";
        echo "nibles para tus clientes.\",\"options\":[\"savepoint\"],\"page\":\"\\/atempo_prestashop\\/admin_gui01\\/index.php\\/improve\\/payment\\/payment_methods?_token=SbF0wGhJ2NYe2BMOKWNX1YKapp9DEdUz50T6CFkOAI0\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Elija sus soluciones de env\\u00edo\",\"subtitle\":{\"1\":\"\\u00bfC\\u00f3mo quiere enviar sus productos?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Aqu\\u00ed est\\u00e1n los m\\u00e9todos de env\\u00edo disponibles en su tienda ahora mismo.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/atempo_prestashop\\/admin_gui01\\/index.php?controller=AdminCarriers&token=5a15bfb71739ab9cb56f10c67b4e1c9e\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\r\\n    <div class=\\\"col-12\\\">\\r\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\r\\n        <h2 class=\\\"text-center text-md-center\\\">\\u00a1Es su turno!<\\/h2>\\r\\n    <\\/div>\\r\\n    <div class=\\\"col-12\\\">\\r\\n        <p class=\\\"text-center text-md-center\\\">\\r\\n          Ha visto lo esencial, pero hay mucho m\\u00e1s por explorar.<br \\/>\\r\\n          Algunos recursos pueden ayudarle a profundizar aun m\\u00e1s:\\r\\n        <\\/p>\\r\\n        <div class=\\\"container-fluid\\\">\\r\\n          <div class=\\\"row\\\">\\r\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\r\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\r\\n                <div class=\\\"starter-guide\\\"><\\/div>\\r\\n                <span class=\\\"link\\\">Gu\\u00eda de principiante<\\/span>\\r\\n              <\\/a>\\r\\n            <\\/div>\\r\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/fo";
        echo "rums\\/\\\" target=\\\"_blank\\\">\\r\\n                <div class=\\\"forum\\\"><\\/div>\\r\\n                <span class=\\\"link\\\">Foro<\\/span>\\r\\n              <\\/a>\\r\\n            <\\/div>\\r\\n          <\\/div>\\r\\n          <div class=\\\"row\\\">\\r\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\r\\n                <div class=\\\"training\\\"><\\/div>\\r\\n                <span class=\\\"link\\\">Formaci\\u00f3n<\\/span>\\r\\n              <\\/a>\\r\\n            <\\/div>\\r\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\r\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\r\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\r\\n                <span class=\\\"link\\\">Tutorial en v\\u00eddeo<\\/span>\\r\\n              <\\/a>\\r\\n            <\\/div>\\r\\n          <\\/div>\\r\\n        <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\\"modal-footer\\\">\\r\\n        <div class=\\\"col-12\\\">\\r\\n            <div class=\\\"text-center text-md-center\\\">\\r\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Estoy listo<\\/button>\\r\\n            <\\/div>\\r\\n        <\\/div>\\r\\n    <\\/div>\\r\\n<\\/div>\\r\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/atempo_prestashop\\/admin_gui01\\/index.php?controller=AdminDashboard&token=f34ed29c07d69ef3729f627c6716ea7e\"}]}]}, 1, \"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminWelcome&token=e972b1f0acc8b0a8763e6616451c0f24\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>¡Eh! ¿Se ha perdido?</p>    <p>Para continuar, haga clic aquí:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuar</button>    </div>    <p>Si quiere detener el tutorial, haga";
        // line 1366
        echo " clic aquí:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Salir del tutorial de bienvenida</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Paso <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Siguiente</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1404
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost/atempo_prestashop/admin_gui01/index.php?controller=AdminDashboard&amp;token=f34ed29c07d69ef3729f627c6716ea7e\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=miguelillo69%40gmail.com&amp;firstname=Miguel&amp;lastname=Castro+Juli%C3%A1&amp;website=http%3A%2F%2Flocalhost%2Fatempo_prestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/atempo_prestashop/admin_gui01/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercad";
        // line 1450
        echo "o de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tiene una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">Olvidé mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=miguelillo69%40gmail.com&amp;firstname=Miguel&amp;lastname=Castro+Juli%C3%A1&amp;website=http%3A%2F%2Flocalhost%2Fatempo_prestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-ext";
        // line 1486
        echo "ernal-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1512
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 105
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1404
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1512
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__aa420da1da5a47055be698641a004a1a86712d990bc3f514e937ed6cb8b97ae0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1692 => 1512,  1675 => 1404,  1666 => 105,  1657 => 1512,  1629 => 1486,  1591 => 1450,  1539 => 1404,  1499 => 1366,  1493 => 1364,  1483 => 1356,  1431 => 1306,  1408 => 1285,  1383 => 1262,  1354 => 1235,  1292 => 1175,  1259 => 1144,  1222 => 1109,  1190 => 1079,  1161 => 1052,  1129 => 1022,  1099 => 994,  1067 => 964,  1037 => 936,  1000 => 901,  970 => 873,  939 => 844,  908 => 815,  876 => 785,  844 => 755,  812 => 725,  783 => 698,  752 => 669,  721 => 640,  683 => 604,  651 => 574,  620 => 545,  587 => 514,  557 => 486,  525 => 456,  492 => 425,  462 => 397,  417 => 354,  397 => 336,  345 => 286,  299 => 242,  249 => 194,  232 => 179,  190 => 139,  151 => 105,  124 => 80,  106 => 64,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__aa420da1da5a47055be698641a004a1a86712d990bc3f514e937ed6cb8b97ae0", "");
    }
}
