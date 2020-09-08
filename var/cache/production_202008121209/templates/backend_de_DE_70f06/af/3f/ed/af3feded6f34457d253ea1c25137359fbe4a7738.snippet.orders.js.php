<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/view/widgets/orders.js" */ ?>
<?php /*%%SmartyHeaderCode:585209305f579091daa915-87159636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af3feded6f34457d253ea1c25137359fbe4a7738' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/view/widgets/orders.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '585209305f579091daa915-87159636',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579091db8874_38940955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579091db8874_38940955')) {function content_5f579091db8874_38940955($_smarty_tpl) {?>/**
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

/**
 * Shopware UI - Sales Widget
 *
 * This file holds off the sales widget.
 */
//
Ext.define('Shopware.apps.Index.view.widgets.Orders', {
    extend: 'Shopware.apps.Index.view.widgets.Base',
    alias: 'widget.swag-last-orders-widget',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'orders'/'title','default'=>'Last orders','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'orders'/'title','default'=>'Last orders','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Letzte Bestellungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'orders'/'title','default'=>'Last orders','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    layout: 'fit',

    /**
     * Snippets for this widget.
     * @object
     */
    snippets: {
        headers: {
            date: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'orders'/'headers'/'date','default'=>'Date','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'orders'/'headers'/'date','default'=>'Date','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Datum<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'orders'/'headers'/'date','default'=>'Date','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            number: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'orders'/'headers'/'number','default'=>'Nr.','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'orders'/'headers'/'number','default'=>'Nr.','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nr.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'orders'/'headers'/'number','default'=>'Nr.','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            customer: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'orders'/'headers'/'customer','default'=>'Customer','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'orders'/'headers'/'customer','default'=>'Customer','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunde<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'orders'/'headers'/'customer','default'=>'Customer','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            amount: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'orders'/'headers'/'amount','default'=>'Amount','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'orders'/'headers'/'amount','default'=>'Amount','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'orders'/'headers'/'amount','default'=>'Amount','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    ordersStore: null,

    constructor: function() {
        var me = this;

        me.ordersStore = Ext.create('Ext.data.Store', {
            model: 'Shopware.apps.Index.model.Orders',
            remoteFilter: true,
            clearOnLoad: false,
            autoLoad: true,

            proxy: {
                type: 'ajax',
                url: '<?php echo '/backend/widgets/getLastOrders';?>',
                reader: {
                    type: 'json',
                    root: 'data'
                }
            }
        });

        me.callParent(arguments);
    },

    /**
     * Initializes the widget.
     *
     * @public
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.items = [{
            border: 0,
            store: me.ordersStore,
            xtype: 'grid',
            viewConfig: {
                hideLoadingMsg: true
            },
            columns: me.createColumns()
        }];

        me.tools = [{
            type: 'refresh',
            scope: me,
            handler: me.refreshView
        }];

        me.createTaskRunner();
        me.callParent(arguments);
    },

    /**
     * Registers a new task runner to refresh
     * the store after a given time interval.
     *
     * @public
     * @param [object] store - Ext.data.Store
     * @return void
     */
    createTaskRunner: function() {
        var me = this;

        me.storeRefreshTask = Ext.TaskManager.start({
            scope: me,
            run: me.refreshView,
            interval: 300000
        });
    },

    /**
     * Helper method which will be called by the
     * task runner and when the user clicks the
     * refresh icon in the panel header.
     *
     * @public
     * @return void
     */
    refreshView: function() {
        var me = this;
        me.ordersStore.load();
    },

    /**
     * Helper method which creates the columns
     * for the grid.
     *
     * @public
     * @return [array] generated columns
     */
    createColumns: function() {
        var me = this;

        return [{
            header: me.snippets.headers.date,
            dataIndex: 'date',
            renderer: me.dateColumn,
            flex: 1
        }, {
            header: me.snippets.headers.number,
            dataIndex: 'orderNumber',
            flex: 1
        }, {
            header: me.snippets.headers.customer,
            dataIndex: 'customer',
            flex: 1
        }, {
            header: me.snippets.headers.amount,
            dataIndex: 'amount',
            flex: 1,
            renderer: function(value) {
                return Ext.util.Format.currency(value);
            }
        }, {
            xtype: 'actioncolumn',
            width: 70,
            items: [{
                iconCls: 'sprite-user--pencil',
                handler: function(view, rowIndex, colIndex, item, event, record) {

                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.Customer',
                        action: 'detail',
                        params: {
                            customerId: ~~(1 * record.get('customerId'))
                        }
                    });
                }
            }, {
                iconCls: 'sprite-sticky-note--pencil',
                handler: function(view, rowIndex, colIndex, item, event, record) {

                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.Order',
                        action: 'detail',
                        params: {
                            orderId: ~~(1 * record.get('id'))
                        }
                    });
                }
            }]
        }];
    },

    /**
     * Formats the date column
     *
     * @param [string] - The order time value
     * @return [string] - The passed value, formatted with Ext.util.Format.date()
     */
    dateColumn:function (value, metaData, record) {
        if ( value === Ext.undefined ) {
            return value;
        }

        return Ext.util.Format.date(value) + ' ' + Ext.util.Format.date(value, timeFormat);
    }
});
//
<?php }} ?>