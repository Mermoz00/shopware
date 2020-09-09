<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:16
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/view/detail/bundle.js" */ ?>
<?php /*%%SmartyHeaderCode:20145232455f58835c508975-43757810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bab84eeab71504b0eb41796679e7c1d42dbac424' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/view/detail/bundle.js',
      1 => 1599580322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20145232455f58835c508975-43757810',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835c509288_71064015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835c509288_71064015')) {function content_5f58835c509288_71064015($_smarty_tpl) {?>//

Ext.define('Shopware.apps.SwagBundle.view.detail.Bundle', {
    extend: 'Shopware.model.Container',

    configure: function () {
        return {
            controller: 'SwagBundle',
            association: ['products']
        };
    }
});
<?php }} ?>