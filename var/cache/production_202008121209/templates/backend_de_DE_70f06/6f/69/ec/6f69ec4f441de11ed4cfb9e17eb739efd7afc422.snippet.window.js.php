<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:15
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/benchmark/view/overview/window.js" */ ?>
<?php /*%%SmartyHeaderCode:12294081505f58835b1dcc47-05046794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f69ec4f441de11ed4cfb9e17eb739efd7afc422' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/benchmark/view/overview/window.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12294081505f58835b1dcc47-05046794',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835b1eb7b6_38911593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835b1eb7b6_38911593')) {function content_5f58835b1eb7b6_38911593($_smarty_tpl) {?>
//
//
Ext.define('Shopware.apps.Benchmark.view.overview.Window', {
    extend: 'Enlight.app.Window',
    layout: 'fit',
    width: 1050,
    height: 670,

    alias: 'widget.benchmark-overview-window',

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'overview/title','default'=>'Benchmark Overview','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'overview/title','default'=>'Benchmark Overview','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopware BI Übersicht<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'overview/title','default'=>'Benchmark Overview','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    initComponent: function () {
        var me = this;

        me.items = me.getItems();

        if (me.isTeaser) {
            me.checkbox = Ext.create('Ext.form.field.Checkbox', {
                padding: '0 0 0 5px',
                itemId: 'disableBenchmarkTeaser',
                width: 150,
                boxLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'do_not_show_again','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window'/'do_not_show_again','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nicht mehr anzeigen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window'/'do_not_show_again','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            });

            me.dockedItems = [{
                xtype: 'toolbar',
                dock: 'bottom',
                items:[me.checkbox, '->', me.cancelButton]
            }];
        }

        me.callParent(arguments);
    },

    /**
     * @returns { Ext.container.Container[] }
     */
    getItems: function () {
        var url = '<?php echo '/backend/BenchmarkOverview';?>';

        if (this.shopId) {
            url = '<?php echo '/backend/BenchmarkOverview/index/shopId/replaceShopId';?>';
            url = url.replace('replaceShopId', this.shopId);
        }

        return [
            Ext.create('Ext.container.Container', {
                html: '<iframe src="' + url + '" width="100%" height="100%"></iframe>'
            })
        ];
    }
});
//
<?php }} ?>