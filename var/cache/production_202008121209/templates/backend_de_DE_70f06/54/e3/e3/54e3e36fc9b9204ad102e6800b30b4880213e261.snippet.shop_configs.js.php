<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:24
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/benchmark/store/shop_configs.js" */ ?>
<?php /*%%SmartyHeaderCode:6918823285f5790948d5f04-37438353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54e3e36fc9b9204ad102e6800b30b4880213e261' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/benchmark/store/shop_configs.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6918823285f5790948d5f04-37438353',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5790948d8255_22678971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5790948d8255_22678971')) {function content_5f5790948d8255_22678971($_smarty_tpl) {?>//
//
Ext.define('Shopware.apps.Benchmark.store.ShopConfigs', {
    extend: 'Ext.data.Store',
    autoLoad: false,
    model: 'Shopware.apps.Benchmark.model.ShopConfig',

    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Benchmark/getShopConfigs';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    },
});
//
<?php }} ?>