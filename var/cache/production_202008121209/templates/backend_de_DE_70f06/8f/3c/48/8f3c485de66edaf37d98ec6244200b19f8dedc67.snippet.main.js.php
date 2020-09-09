<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:26
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle3/Resources/views/backend/swag_bundle/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:14625197545f579096b1b918-05721674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f3c485de66edaf37d98ec6244200b19f8dedc67' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle3/Resources/views/backend/swag_bundle/controller/main.js',
      1 => 1599567339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14625197545f579096b1b918-05721674',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579096b1d653_52841236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579096b1d653_52841236')) {function content_5f579096b1d653_52841236($_smarty_tpl) {?>Ext.define('Shopware.apps.SwagBundle.controller.Main', {
    extend: 'Enlight.app.Controller',

    init: function () {
        var me = this;
        me.mainWindow = me.getView('list.Window').create({ }).show();
    }
});
<?php }} ?>