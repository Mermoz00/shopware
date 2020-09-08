<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:26
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle3/Resources/views/backend/swag_bundle/view/list/window.js" */ ?>
<?php /*%%SmartyHeaderCode:10740475095f579096b03047-80671654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e61fc26be0f19fd1e39d56416b4347e19ad7b6f5' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle3/Resources/views/backend/swag_bundle/view/list/window.js',
      1 => 1599572059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10740475095f579096b03047-80671654',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579096b0e1a0_09544817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579096b0e1a0_09544817')) {function content_5f579096b0e1a0_09544817($_smarty_tpl) {?>//

Ext.define('Shopware.apps.SwagBundle.view.list.Window', {
    extend: 'Shopware.window.Listing',
    alias: 'widget.bundle-list-window',
    height: 450,
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window_title','namespace'=>'bundle/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window_title','namespace'=>'bundle/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bundle Übersicht<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window_title','namespace'=>'bundle/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    configure: function () {
        return {
            listingGrid: 'Shopware.apps.SwagBundle.view.list.Bundle',
            listingStore: 'Shopware.apps.SwagBundle.store.Bundle'
        };
    }
    //todo Implement the missing parts of this component
    // https://developers.shopware.com/developers-guide/backend-components/listing/#shopware.window.listing-basics
});
<?php }} ?>