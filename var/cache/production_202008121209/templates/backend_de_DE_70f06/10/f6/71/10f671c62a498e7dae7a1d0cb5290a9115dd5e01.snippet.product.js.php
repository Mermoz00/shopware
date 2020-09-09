<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:16
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/view/detail/product.js" */ ?>
<?php /*%%SmartyHeaderCode:17077190645f58835c50aae9-97638627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10f671c62a498e7dae7a1d0cb5290a9115dd5e01' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/view/detail/product.js',
      1 => 1599636181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17077190645f58835c50aae9-97638627',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835c50b7a4_83613612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835c50b7a4_83613612')) {function content_5f58835c50b7a4_83613612($_smarty_tpl) {?>//

Ext.define('Shopware.apps.SwagBundle.view.detail.Product', {
    extend: 'Shopware.grid.Association',
    alias: 'widget.bundle-view-detail-product',
    title: 'Zugeordnete Produkte',
    height: 200,
    configure: function () {
        return {
            controller: 'SwagBundle',
            columns: {
                name: {},
            }
        };
    },
});
<?php }} ?>