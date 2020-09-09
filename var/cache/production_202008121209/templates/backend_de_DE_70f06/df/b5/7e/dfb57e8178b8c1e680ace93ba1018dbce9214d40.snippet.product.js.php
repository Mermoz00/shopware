<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:16
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/model/product.js" */ ?>
<?php /*%%SmartyHeaderCode:12667070275f58835c4fba87-22772410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfb57e8178b8c1e680ace93ba1018dbce9214d40' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/model/product.js',
      1 => 1599577986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12667070275f58835c4fba87-22772410',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835c4fc6f3_63241752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835c4fc6f3_63241752')) {function content_5f58835c4fc6f3_63241752($_smarty_tpl) {?>Ext.define('Shopware.apps.SwagBundle.model.Product', {
    extend: 'Shopware.apps.Base.model.Article',
    configure: function () {
        return {
            releted: 'Shopware.apps.SwagBundle.view.detail.Product'
        };
    },
});
<?php }} ?>