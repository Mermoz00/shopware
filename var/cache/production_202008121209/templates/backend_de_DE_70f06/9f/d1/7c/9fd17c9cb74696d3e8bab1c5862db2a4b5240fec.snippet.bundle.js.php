<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:16
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/view/list/bundle.js" */ ?>
<?php /*%%SmartyHeaderCode:4572906315f58835c5066c2-20568402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fd17c9cb74696d3e8bab1c5862db2a4b5240fec' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/view/list/bundle.js',
      1 => 1599579389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4572906315f58835c5066c2-20568402',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835c5070a4_62084994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835c5070a4_62084994')) {function content_5f58835c5070a4_62084994($_smarty_tpl) {?>//

Ext.define('Shopware.apps.SwagBundle.view.list.Bundle', {
    extend: 'Shopware.grid.Panel',
    alias: 'widget.bundle-listing-grid',
    region: 'center',

    configure: function () {
        return {
            detailWindow: 'Shopware.apps.SwagBundle.view.detail.Window'
        };
    }
});
<?php }} ?>