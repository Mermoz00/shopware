<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:14
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/product_stream/view/list/list.js" */ ?>
<?php /*%%SmartyHeaderCode:17649451435f58835a3fa2b0-43525954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81fac52a533be67f1df7a6fe13a04ccb23cb51b8' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/product_stream/view/list/list.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17649451435f58835a3fa2b0-43525954',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835a4063a9_28942013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835a4063a9_28942013')) {function content_5f58835a4063a9_28942013($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    ProductStream
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.list.List', {
    extend: 'Shopware.grid.Panel',
    alias: 'widget.product-stream-listing-grid',
    region: 'center',

    addButtonText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add_condition_stream','default'=>'Add condition stream','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'add_condition_stream','default'=>'Add condition stream','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gefilterten Stream erstellen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'add_condition_stream','default'=>'Add condition stream','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    configure: function () {
        return {
            deleteButton: false,
            detailWindow: 'Shopware.apps.ProductStream.view.condition_list.Window',
            columns: {
                name: { header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' },
                description: { header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'description','default'=>'Description','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'description','default'=>'Description','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Beschreibung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'description','default'=>'Description','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' }
            }
        };
    },

    createFeatures: function() {
        var me = this,
            features = me.callParent(arguments);

        features.push(me.createGroupingFeature());
        return features;
    },

    createGroupingFeature: function() {
        var me = this;

        return Ext.create('Ext.grid.feature.Grouping', {
            groupHeaderTpl: [
                '{name:this.formatName}',
                {
                    formatName: function(type) {
                        if (type == 2) {
                            return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'selection_streams','default'=>'Selection streams','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'selection_streams','default'=>'Selection streams','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Auswahl Streams<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'selection_streams','default'=>'Selection streams','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                        } else {
                            return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'condition_streams','default'=>'Condition streams','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'condition_streams','default'=>'Condition streams','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gefilterte Streams<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'condition_streams','default'=>'Condition streams','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                        }
                    }
                }
            ]
        });
    },

    createToolbarItems: function () {
        var me = this, items;
        items = me.callParent(arguments);

        items = Ext.Array.insert(items, 1, [{
            xtype: 'button',
            iconCls: 'sprite-plus-circle-frame',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add_selection_stream','default'=>'Add selection stream','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'add_selection_stream','default'=>'Add selection stream','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Auswahl Stream erstellen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'add_selection_stream','default'=>'Add selection stream','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function () {
                var record = Ext.create('Shopware.apps.ProductStream.model.Stream');
                record.set('type', 2);
                me.fireEvent('open-selected-list-window', record);
            }
        }]);

        return items;
    },

    createEditColumn: function () {
        var me = this,
            column = me.callParent(arguments);

        column.handler = function (view, rowIndex, colIndex, item, opts, record) {
            if (record.get('type') == 2) {
                record.reload({
                    callback: function (result) {
                        me.fireEvent('open-selected-list-window', result);
                    }
                });
            } else {
                me.fireEvent(me.eventAlias + '-edit-item', me, record, rowIndex, colIndex, item, opts);
            }
        };

        return column;
    },

    createActionColumnItems: function() {
        var me = this,
            items = me.callParent(arguments);

        items.push({
            iconCls: 'sprite-duplicate-article',
            handler: function (view, rowIndex, colIndex, item, opts, record) {
                me.fireEvent(me.eventAlias + '-duplicate-item', me, record, rowIndex, colIndex, item, opts);
            }
        });

        return items;
    }
});
//
<?php }} ?>