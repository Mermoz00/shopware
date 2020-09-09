<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:16
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:4145179745f58835c5115e2-52075191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2adb84719a9586067fa75d942360985c63b9502' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/controller/main.js',
      1 => 1599575793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4145179745f58835c5115e2-52075191',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835c5121b8_71952530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835c5121b8_71952530')) {function content_5f58835c5121b8_71952530($_smarty_tpl) {?>Ext.define('Shopware.apps.SwagBundle.controller.Main', {
    extend: 'Enlight.app.Controller',

    init: function () {
        var me = this;
        me.mainWindow = me.getView('list.Window').create({ }).show();
    }
});
<?php }} ?>