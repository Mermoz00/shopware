<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:14
         compiled from "/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/customer/payment_methods/view/detail/payment_methods.js" */ ?>
<?php /*%%SmartyHeaderCode:1950836075f58835a319de2-48545038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b9a084ee1c3ee5e35dff7bc1aa39b413ef276e5' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/customer/payment_methods/view/detail/payment_methods.js',
      1 => 1598958813,
      2 => 'file',
    ),
    '9ee50cfce40f1a836883da1e9147d9b7c6d89d9d' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/customer/payment_methods/controller/detail.js',
      1 => 1598958813,
      2 => 'file',
    ),
    'da8b1ce604aeba550ca8d9fb52aad6e3c34fdebc' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagExtendBackend/Resources/views/backend/customer/swag_extend_backend/view/detail/window.js',
      1 => 1599565969,
      2 => 'file',
    ),
    'f98b5122d82dbe3ba88e9c788a083bcf519fff3d' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagExtendBackend/Resources/views/backend/customer/swag_extend_backend/model/product.js',
      1 => 1599565969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1950836075f58835a319de2-48545038',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835a3275d8_73533471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835a3275d8_73533471')) {function content_5f58835a3275d8_73533471($_smarty_tpl) {?>// 
Ext.define('Shopware.apps.Customer.swagExtendBackend.model.Product', {
    extend: 'Shopware.data.Model',

    fields: [
        { name: 'id', type: 'int' },
        { name: 'mainDetailId', type: 'int' },
        { name: 'name', type: 'string' }
    ]
});
// 
<?php }} ?>