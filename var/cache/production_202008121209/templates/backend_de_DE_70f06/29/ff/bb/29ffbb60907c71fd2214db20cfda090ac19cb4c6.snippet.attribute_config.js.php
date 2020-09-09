<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/store/attribute_config.js" */ ?>
<?php /*%%SmartyHeaderCode:45348525f5883581ebed5-11965587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29ffbb60907c71fd2214db20cfda090ac19cb4c6' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/store/attribute_config.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45348525f5883581ebed5-11965587',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5883581ecb08_21570672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5883581ecb08_21570672')) {function content_5f5883581ecb08_21570672($_smarty_tpl) {?>
Ext.define('Shopware.store.AttributeConfig', {
    extend: 'Shopware.store.Listing',
    model: 'Shopware.model.AttributeConfig',
    remoteSort: false,

    configure: function() {
        return {
            controller: 'AttributeData'
        }
    }
});
<?php }} ?>