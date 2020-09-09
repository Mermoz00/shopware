<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:23
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article_list/view/batch_process/grid.js" */ ?>
<?php /*%%SmartyHeaderCode:2921653835f579093a0b047-06012499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4645fb7ba3dd861e0db427b3c993a7d6f6f6a336' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article_list/view/batch_process/grid.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2921653835f579093a0b047-06012499',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579093a17838_37152526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579093a17838_37152526')) {function content_5f579093a17838_37152526($_smarty_tpl) {?>/**
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
 */

//
//
Ext.define('Shopware.apps.ArticleList.view.BatchProcess.Grid', {
    extend: 'Ext.grid.Panel',


    alias: 'widget.multi-edit-batch-process-grid',

    initComponent: function() {
        var me = this;

        me.operatorStore =  Ext.create('Shopware.apps.ArticleList.store.Operator').load({ params: { resource: 'product' }});

        me.tbar = me.getToolbar();
        me.columns = me.getColumns();

        me.setupRowEditor();

        me.addEvents('editRow', 'deleteRow', 'setEditor', 'addRow');

        me.callParent(arguments);
    },


    /**
     * Creates the grid toolbar
     *
     * @return { Ext.toolbar.Toolbar } grid toolbar
     */
    getToolbar: function() {
        var me = this, buttons = [];

        buttons.push(
            Ext.create('Ext.button.Button', {
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add','default'=>'Add','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'add','default'=>'Add','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hinzufügen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'add','default'=>'Add','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                action: 'addRow',
                name: 'addRow',
                iconCls:'sprite-plus-circle-frame',
                handler: function() {
                    me.fireEvent('addRow');
                }
            })
        );

        return Ext.create('Ext.toolbar.Toolbar', {
            ui: 'shopware-ui',
            items: buttons
        });
    },

    /**
     * Create and configure the RowEditing feature.
     */
    setupRowEditor: function() {
        var me =this;

        me.rowEditing = Ext.create('Ext.grid.plugin.RowEditing', {
            clicksToEdit: 1
        });
        me.plugins = me.rowEditing;

        // Do not edit the row if the actioncolumn was clicked
        me.rowEditing.on('beforeedit', function(editor, context, eOpts) {
            if (context.colIdx > 2) {
                context.cancel = true;
                return;
            }
        });

        // Fire event *after* the user edited the row
        me.rowEditing.on('edit', function(editor, context, eOpts) {
            me.fireEvent('editRow', context.rowIdx);
        });

        // Set the operations before edit
        me.rowEditing.on('beforeedit', function(editor, context, eOpts) {
            var me = this,
                column = context.record.get('column'),
                record = me.editableColumnsStore.findRecord('name', column);

            if (!record) {
                record = me.editableColumnsStore.getAt(0);
            }

            me.setOperatorsForCurrentRecord(record, me.operatorStore);

            me.fireEvent('setEditor', me.columns[2], record);
        }, me);
    },

    getColumns: function()  {
        var me = this;

        return [{
            flex: 1,
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'multiEdit/column','default'=>'Column','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'multiEdit/column','default'=>'Column','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zu bearbeitendes Feld<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'multiEdit/column','default'=>'Column','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            editor: {
                xtype: 'combo',
                store: me.editableColumnsStore,
                displayField: 'name',
                forceSelection: true,
                allowEmpty: false,
                editable: false,
                listeners: {
                    'select': { fn:function(combo, records, e) {
                        me.setOperatorsForCurrentRecord(records[0], me.operatorStore);
                        me.fireEvent('setEditor', me.columns[2], records[0]);
                    }, scope: this },
                    beforequery: function(e) {
                        e.combo.store.getProxy().extraParams = { resource: 'product'};
                    }
                }
            },
            dataIndex: 'column',
            menuDisabled: true,
            sortable: false
        },{
            flex: 1,
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'multiEdit/operation','default'=>'Operation','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'multiEdit/operation','default'=>'Operation','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Operator<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'multiEdit/operation','default'=>'Operation','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            editor: {
                xtype: 'combo',
                store: me.operatorStore,
                queryMode: 'local',
                displayField: 'name',
                forceSelection: true,
                allowEmpty: false,
                editable: false,
                listeners: {
                }
            },
            dataIndex: 'operator',
            menuDisabled: true,
            sortable: false
        },{
            flex: 1,
            editor: {
                xtype: 'textfield'
            },
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'multiEdit/value','default'=>'Value','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'multiEdit/value','default'=>'Value','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'multiEdit/value','default'=>'Value','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'value',
            menuDisabled: true,
            sortable: false
        }, {
            /**
             * Special column type which provides
             * clickable icons in each row
             */
            xtype: 'actioncolumn',
            width: 25,
            items: [
                {
                    iconCls: 'sprite-minus-circle-frame',
                    action: 'deleteFilter',
                    tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'deleteFilter','default'=>'Delete filter','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'deleteFilter','default'=>'Delete filter','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter löschen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'deleteFilter','default'=>'Delete filter','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    handler: function (view, rowIndex, colIndex, item, e) {
                        me.fireEvent('deleteRow', rowIndex);
                    }
                }
            ]
        }];
    },

    /**
     * Show operators depending on the current column
     *
     * @param record
     * @param operatorStore
     */
    setOperatorsForCurrentRecord: function(record, operatorStore) {
        var operators;

        operatorStore.removeAll();

        operators = record.getOperators();
        Ext.each(operators.data.items, function(record) {
            operatorStore.add({ id: record.get('id'), name: record.get('name') });
        });
    }
});
//
<?php }} ?>