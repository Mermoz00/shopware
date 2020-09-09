<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:16
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/store/bundle.js" */ ?>
<?php /*%%SmartyHeaderCode:9379395245f58835c50f252-91206859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c94d6a5af68fad7f2f1d43321f090fba43f5e998' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/store/bundle.js',
      1 => 1599575793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9379395245f58835c50f252-91206859',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835c50fd88_10414559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835c50fd88_10414559')) {function content_5f58835c50fd88_10414559($_smarty_tpl) {?>Ext.define('Shopware.apps.SwagBundle.store.Bundle', {
    extend: 'Shopware.store.Listing',

    configure: function () {
        return {
            controller: 'SwagBundle'
        };
    },

    model: 'Shopware.apps.SwagBundle.model.Bundle'
});
<?php }} ?>