<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:24
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/benchmark/model/shop_config.js" */ ?>
<?php /*%%SmartyHeaderCode:15079246525f57909486f7e2-61060466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6739dedf159f3f03451aebd82f9a77de7a435d54' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/benchmark/model/shop_config.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15079246525f57909486f7e2-61060466',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5790948725e8_30837952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5790948725e8_30837952')) {function content_5f5790948725e8_30837952($_smarty_tpl) {?>//
//
Ext.define('Shopware.apps.Benchmark.model.ShopConfig', {
    extend: 'Ext.data.Model',

    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'shopId', type: 'int' },
        { name: 'shopName', type: 'string' },
        { name: 'active', type: 'boolean' },
        { name: 'lastSent', type: 'date', dateFormat: 'd.m.Y H:i:s' },
        { name: 'lastReceived', type: 'date', dateFormat: 'd.m.Y H:i:s' },
        { name: 'lastOrderId', type: 'int' },
        { name: 'lastCustomerId', type: 'int' },
        { name: 'lastProductId', type: 'int' },
        { name: 'batchSize', type: 'int' },
        { name: 'industry', type: 'int' },
        { name: 'type', type: 'string' },
        { name: 'responseToken', type: 'string', useNull: true }
    ],
});
//
<?php }} ?>