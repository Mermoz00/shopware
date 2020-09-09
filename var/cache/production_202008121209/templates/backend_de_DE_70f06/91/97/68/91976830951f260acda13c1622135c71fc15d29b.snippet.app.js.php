<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:26
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle3/Resources/views/backend/swag_bundle/app.js" */ ?>
<?php /*%%SmartyHeaderCode:12467987795f5790969f12a1-75963233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91976830951f260acda13c1622135c71fc15d29b' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle3/Resources/views/backend/swag_bundle/app.js',
      1 => 1599567339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12467987795f5790969f12a1-75963233',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5790969f4344_19361367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5790969f4344_19361367')) {function content_5f5790969f4344_19361367($_smarty_tpl) {?>Ext.define('Shopware.apps.SwagBundle', {
    extend: 'Enlight.app.SubApplication',

    name: 'Shopware.apps.SwagBundle',

    loadPath: '<?php echo '/backend/SwagBundle/load';?>',
    bulkLoad: true,

    controllers: [ 'Main' ],

    views: [
        'list.Window',
        'list.Bundle'
    ],

    models: [ 'Bundle' ],
    stores: [ 'Bundle' ],

    launch: function () {
        return this.getController('Main').mainWindow;
    }
});
<?php }} ?>