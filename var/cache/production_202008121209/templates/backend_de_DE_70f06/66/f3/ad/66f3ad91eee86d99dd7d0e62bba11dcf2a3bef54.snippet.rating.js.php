<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/view/widgets/rating.js" */ ?>
<?php /*%%SmartyHeaderCode:3819951925f579091dec256-87882242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66f3ad91eee86d99dd7d0e62bba11dcf2a3bef54' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/view/widgets/rating.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3819951925f579091dec256-87882242',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579091df9958_07856946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579091df9958_07856946')) {function content_5f579091df9958_07856946($_smarty_tpl) {?>/**
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
 * Shopware UI - Rating Widget
 *
 * This file holds off the rating widget.
 */
//
Ext.define('Shopware.apps.Index.view.widgets.Rating', {
    extend: 'Shopware.apps.Index.view.widgets.Base',
    alias: 'widget.swag-rating-widget',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rating'/'title','default'=>'Unverified product ratings','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rating'/'title','default'=>'Unverified product ratings','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nicht freigegebene Produktbewertungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rating'/'title','default'=>'Unverified product ratings','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    layout: 'fit',

    /**
     * Snippets for this widget.
     * @object
     */
    snippets: {
        headers: {
            product: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rating'/'headers'/'product','default'=>'Product','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rating'/'headers'/'product','default'=>'Product','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Produkt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rating'/'headers'/'product','default'=>'Product','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            date: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rating'/'headers'/'date','default'=>'Date','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rating'/'headers'/'date','default'=>'Date','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Datum<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rating'/'headers'/'date','default'=>'Date','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            author: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rating'/'headers'/'author','default'=>'Author','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rating'/'headers'/'author','default'=>'Author','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Author<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rating'/'headers'/'author','default'=>'Author','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rating'/'headers'/'title','default'=>'Title','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rating'/'headers'/'title','default'=>'Title','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Titel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rating'/'headers'/'title','default'=>'Title','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        tooltips: {
            rating: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'tooltips'/'rating','default'=>'Open Rating','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'merchant'/'tooltips'/'rating','default'=>'Open Rating','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Öffnen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'merchant'/'tooltips'/'rating','default'=>'Open Rating','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        }
    },

    ratingStore: null,

    constructor: function() {
        var me = this;

        me.ratingStore = Ext.create('Ext.data.Store', {
            model: 'Shopware.apps.Index.model.Rating',
            remoteFilter: true,
            autoLoad: true,

            proxy: {
                type: 'ajax',
                url: '<?php echo '/backend/widgets/getUnverifiedRatings';?>',
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

        me.tools = [{
            type: 'refresh',
            scope: me,
            handler: me.refreshView
        }];

        me.items = [{
            xtype: 'grid',
            viewConfig: {
                hideLoadingMsg: true
            },
            border: 0,
            store: me.ratingStore,
            columns: me.createColumns()
        }];

        me.createTaskRunner();
        me.callParent(arguments);


        Shopware.app.Application.on('vote-save-successfully', function () {
            me.refreshView();
        })
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

        if(!me.ratingStore) {
            return false;
        }
        me.ratingStore.load();
    },

    /**
     * Helper method which creates the columns for the
     * grid panel in this widget.
     *
     * @return [array] generated columns
     */
    createColumns: function() {
        var me = this;

        return [{
            dataIndex: 'datum',
            header: me.snippets.headers.date,
            renderer: me.dateColumn,
            flex: 1.5
        }, {
            dataIndex: 'productTitle',
            header: me.snippets.headers.product,
            flex: 2.5
        }, {
            dataIndex: 'headline',
            header: me.snippets.headers.title,
            flex: 1.5
        }, {
            xtype: 'actioncolumn',
            width: 80,
            items: [{
                iconCls:'sprite-pencil',
                tooltip: me.snippets.tooltips.rating,
                handler: function(view, rowIndex, colIndex, item, event, record) {
                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.Vote',
                        params: {
                            voteId: ~~(1 * record.get('id'))
                        }
                    });
                }
            }]
        }]
    },

    /**
     * Formats the date column
     *
     * @param [string] - The order time value
     * @return [string] - The passed value, formatted with Ext.util.Format.date()
     */
    dateColumn:function (value) {
        if ( value === Ext.undefined ) {
            return value;
        }

        return Ext.util.Format.date(value) + ' ' + Ext.util.Format.date(value, timeFormat);
    }
});
//
<?php }} ?>