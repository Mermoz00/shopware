<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:16
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/view/list/window.js" */ ?>
<?php /*%%SmartyHeaderCode:14625306935f58835c4fe2f5-72233466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abf0a64ab3a0da3536f9d44b8c242a31dce8532f' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagAdvDevBundle4/Resources/views/backend/swag_bundle/view/list/window.js',
      1 => 1599575793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14625306935f58835c4fe2f5-72233466',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835c5046c7_64515418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835c5046c7_64515418')) {function content_5f58835c5046c7_64515418($_smarty_tpl) {?>//

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
});
<?php }} ?>