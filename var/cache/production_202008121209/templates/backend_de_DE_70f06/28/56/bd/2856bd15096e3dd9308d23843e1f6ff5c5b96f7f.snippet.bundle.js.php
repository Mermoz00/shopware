<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:26
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle3/Resources/views/backend/swag_bundle/model/bundle.js" */ ?>
<?php /*%%SmartyHeaderCode:5188761365f579096af7365-26756853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2856bd15096e3dd9308d23843e1f6ff5c5b96f7f' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle3/Resources/views/backend/swag_bundle/model/bundle.js',
      1 => 1599573439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5188761365f579096af7365-26756853',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579096afa337_04046141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579096afa337_04046141')) {function content_5f579096afa337_04046141($_smarty_tpl) {?>Ext.define('Shopware.apps.SwagBundle.model.Bundle', {
    extend: 'Shopware.data.Model',
    configure: function () {
        return {
            controller: 'SwagBundle'
        };
    },
    fields: [
        { name: 'id', type: 'int', useNull: true },
        { name: 'name', type: 'string' },
        { name: 'active', type: 'boolean' },
    ]
    //todo Implement
    //  - the model fields
    //  - the `configure` function in order to configure the connection to the PHP backend controller
    // https://developers.shopware.com/developers-guide/backend-components/basics/#the-data-model-swag_product_basic/model/product.js
});
<?php }} ?>