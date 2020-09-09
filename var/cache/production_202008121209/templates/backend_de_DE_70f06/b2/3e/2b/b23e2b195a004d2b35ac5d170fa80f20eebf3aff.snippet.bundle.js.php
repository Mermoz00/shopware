<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:16
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/model/bundle.js" */ ?>
<?php /*%%SmartyHeaderCode:13646459635f58835c4f8d01-42151856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b23e2b195a004d2b35ac5d170fa80f20eebf3aff' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/model/bundle.js',
      1 => 1599576968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13646459635f58835c4f8d01-42151856',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835c4f9ec8_35111685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835c4f9ec8_35111685')) {function content_5f58835c4f9ec8_35111685($_smarty_tpl) {?>Ext.define('Shopware.apps.SwagBundle.model.Bundle', {
    extend: 'Shopware.data.Model',

    configure: function () {
        return {
            controller: 'SwagBundle',
            detail: 'Shopware.apps.SwagBundle.view.detail.Bundle'
        };
    },

    fields: [
        { name: 'id', type: 'int', useNull: true },
        { name: 'name', type: 'string' },
        { name: 'active', type: 'boolean' }
    ],
    associations: [
        {
            relation: 'ManyToMany',
            type: 'hasMany',
            model: 'Shopware.apps.SwagBundle.model.Product',
            name: 'getProducts',
            associationkey: 'products'
        }
    ]

});
<?php }} ?>