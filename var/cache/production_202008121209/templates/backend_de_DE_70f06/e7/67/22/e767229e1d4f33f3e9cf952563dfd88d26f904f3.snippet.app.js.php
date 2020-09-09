<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:16
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/app.js" */ ?>
<?php /*%%SmartyHeaderCode:19041063835f58835c454cd9-13263996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e767229e1d4f33f3e9cf952563dfd88d26f904f3' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/app.js',
      1 => 1599575793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19041063835f58835c454cd9-13263996',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835c456944_93899399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835c456944_93899399')) {function content_5f58835c456944_93899399($_smarty_tpl) {?>Ext.define('Shopware.apps.SwagBundle', {
    extend: 'Enlight.app.SubApplication',

    name: 'Shopware.apps.SwagBundle',

    loadPath: '<?php echo '/backend/SwagBundle/load';?>',
    bulkLoad: true,

    controllers: [ 'Main' ],

    views: [
        'list.Window',
        'list.Bundle',

        'detail.Bundle',
        'detail.Product',
        'detail.Window'
    ],

    models: [ 'Bundle', 'Product' ],
    stores: [ 'Bundle' ],

    launch: function () {
        return this.getController('Main').mainWindow;
    }
});
<?php }} ?>