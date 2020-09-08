<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:26
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle3/Resources/views/backend/swag_bundle/store/bundle.js" */ ?>
<?php /*%%SmartyHeaderCode:18674051745f579096b163a4-28159662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '130e5f72dba116c727a83b29dfb7eae9c7fdfa5a' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle3/Resources/views/backend/swag_bundle/store/bundle.js',
      1 => 1599570629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18674051745f579096b163a4-28159662',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579096b179a8_69013769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579096b179a8_69013769')) {function content_5f579096b179a8_69013769($_smarty_tpl) {?>Ext.define('Shopware.apps.SwagBundle.store.Bundle', {
    extend: 'Shopware.store.Listing',

    configure: function () {
        return {
            controller: 'SwagBundle'
        };
    },
    model: 'Shopware.apps.SwagBundle.model.Bundle'
    //todo The store needs to "know" its model, additionally the PHP controller must be defined in the `configure` function
    // https://developers.shopware.com/developers-guide/backend-components/basics/#the-data-store-swag_product/store/product.js
});
<?php }} ?>