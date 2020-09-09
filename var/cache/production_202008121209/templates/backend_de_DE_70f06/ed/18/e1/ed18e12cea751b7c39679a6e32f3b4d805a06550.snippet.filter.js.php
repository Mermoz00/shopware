<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:14
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/view/list/filter.js" */ ?>
<?php /*%%SmartyHeaderCode:4729075565f58835a7a4ef2-27507296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed18e12cea751b7c39679a6e32f3b4d805a06550' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/view/list/filter.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4729075565f58835a7a4ef2-27507296',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835a7f7042_55081203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835a7f7042_55081203')) {function content_5f58835a7f7042_55081203($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order list filter panel
 *
 * Displayed on the left side of the order list module.
 */
//
Ext.define('Shopware.apps.Order.view.list.Filter', {

    /**
     * Define that the additional information is an Ext.panel.Panel extension
     * @string
     */
    extend:'Ext.panel.Panel',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.order-list-filter',

    /**
     * An optional extra CSS class that will be added to this component's Element.
     */
    cls: Ext.baseCSSPrefix + 'filter-options',

    /**
     * True to use overflow:'auto' on the components layout element and show scroll bars automatically when necessary, false to clip any overflowing content.
     */
    autoScroll: true,

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'title','default'=>'Filter options','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'title','default'=>'Filter options','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter Optionen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'title','default'=>'Filter options','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        from: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'from','default'=>'From','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'from','default'=>'From','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Von<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'from','default'=>'From','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        to: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'to','default'=>'To','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'to','default'=>'To','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bis<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'to','default'=>'To','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        orderState: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'orderState','default'=>'Order status','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'orderState','default'=>'Order status','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestellstatus<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'orderState','default'=>'Order status','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        paymentState: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'paymentState','default'=>'Payment status','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'paymentState','default'=>'Payment status','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zahlungsstatus<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'paymentState','default'=>'Payment status','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        paymentName: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'paymentName','default'=>'Payment method','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'paymentName','default'=>'Payment method','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zahlungsart<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'paymentName','default'=>'Payment method','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        dispatchName: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'dispatchName','default'=>'Shipping type','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'dispatchName','default'=>'Shipping type','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Versandart<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'dispatchName','default'=>'Shipping type','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        customerGroup: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'customerGroup','default'=>'Customer group','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'customerGroup','default'=>'Customer group','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kundengruppe<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'customerGroup','default'=>'Customer group','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        shop: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'shop','default'=>'Shop','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'shop','default'=>'Shop','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shop<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'shop','default'=>'Shop','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        perform: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'perform','default'=>'Perform filters','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'perform','default'=>'Perform filters','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ausführen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'perform','default'=>'Perform filters','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        reset: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'reset','default'=>'Reset filters','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'reset','default'=>'Reset filters','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zurücksetzen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'reset','default'=>'Reset filters','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        empty: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'empty','default'=>'Display all','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'empty','default'=>'Display all','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Alle anzeigen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'empty','default'=>'Display all','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        article: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'article','default'=>'Article','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'article','default'=>'Article','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'article','default'=>'Article','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        partner: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'partner','default'=>'Partner','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'partner','default'=>'Partner','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Partner<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'partner','default'=>'Partner','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        shipping: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'shipping','default'=>'Shipping country','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'shipping','default'=>'Shipping country','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Lieferland<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'shipping','default'=>'Shipping country','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        billing: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'billing','default'=>'Billing country','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'billing','default'=>'Billing country','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rechnungsland<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'billing','default'=>'Billing country','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        supplier: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter'/'supplier','default'=>'Supplier','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'supplier','default'=>'Supplier','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hersteller<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'filter'/'supplier','default'=>'Supplier','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        document: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'title','default'=>'Documents','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'document'/'title','default'=>'Documents','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dokumente<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'document'/'title','default'=>'Documents','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            date: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'date','default'=>'Date','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'document'/'date','default'=>'Date','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Datum<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'document'/'date','default'=>'Date','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'name','default'=>'Name','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'document'/'name','default'=>'Name','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'document'/'name','default'=>'Name','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    /**
     * Component event which is fired when the component is initials.
     * @return void
     */
    initComponent:function () {
        var me = this;
        me.registerEvents();
        me.items = [ me.createFieldContainer() ];
        me.title = me.snippets.title;
        me.callParent(arguments);
    },

    /**
     * Adds the specified events to the list of events which this Observable may fire.
     */
    registerEvents: function() {
        this.addEvents(
            /**
             * Event will be fired when the user clicks the "accept filter" button
             * which is placed in the filter options panel on the left hand of the order list.
             *
             * @event
             * @param [object] - Form values
             */
            'acceptFilters',

            /**
             * Event will be fired when the user clicks the "reset filter" button
             * which is placed in the filter options panel on the left hand of the order list.
             *
             * @event
             * @param [object] - Form
             */
            'resetFilters'
        );
    },

    /**
     * Creates the outer container for the filter options panel.
     * @return [Ext.container.Container]
     */
    createFieldContainer: function() {
        var me = this;

        return Ext.create('Ext.container.Container', {
            border: false,
            padding: 10,
            items: [
                me.createFilterForm(),
                me.createFilterButtons(),
                me.createDocumentsGrid()
            ]
        });
    },

    /**
     * Creates the form filter fields which displayed on the left hand of
     * the order list. The filters will be perform by the "Perform filters" button
     * which displayed under the form.
     * @return [Ext.form.Panel]
     */
    createFilterForm: function() {
        var me = this;


        me.filterForm = Ext.create('Ext.form.Panel', {
            border: false,
            cls: Ext.baseCSSPrefix + 'filter-form',
            defaults:{
                anchor:'98%',
                labelWidth:155,
                minWidth:250,
                xtype:'pagingcombo',
                style: 'box-shadow: none;',
                labelStyle: 'font-weight:700;'
            },
            items: [
                me.createFromField(),
                me.createToField(),
                me.createOrderStatusField(),
                me.createPaymentStatusField(),
                me.createPaymentField(),
                me.createDispatchField(),
                me.createCustomerGroupField(),
                me.createArticleSearch(),
                me.createShopField(),
                me.createPartnerField(),
                me.createDeliveryCountrySelection(),
                me.createBillingCountrySelection(),
                me.createSupplierSelectionField()
            ]
        });
        return me.filterForm;
    },

    createFromField: function() {
        var me = this;
        return Ext.create('Ext.form.field.Date', {
            name: 'from',
            fieldLabel: me.snippets.from,
            submitFormat: 'd.m.Y'
        });
    },

    createToField: function() {
        var me = this;
        return Ext.create('Ext.form.field.Date', {
            name: 'to',
            fieldLabel: me.snippets.to,
            submitFormat: 'd.m.Y'
        });
    },

    createOrderStatusField: function() {
        var me = this;

        return Ext.create('Ext.form.field.ComboBox', {
            name: 'orders.status',
            queryMode: 'local',
            store: me.orderStatusStore,
            valueField: 'id',
            displayField: 'description',
            emptyText: me.snippets.empty,
            fieldLabel: me.snippets.orderState
        });
    },

    createPaymentStatusField: function() {
        var me = this;

        return Ext.create('Ext.form.field.ComboBox', {
            name: 'orders.cleared',
            queryMode: 'local',
            store: me.paymentStatusStore,
            valueField: 'id',
            displayField: 'description',
            emptyText: me.snippets.empty,
            fieldLabel: me.snippets.paymentState
        });
    },

    createPaymentField: function() {
        var me = this,
            displayTpl = Ext.create('Ext.XTemplate',
                '<tpl for=".">',
                '<div class="x-boundlist-item">' +
                //active renderer
                '<tpl if="active"">' +
                '<i class="sprite-tick-small" style="width:12px;height:12px;display:inline-block;margin:0 6px 5px 0;vertical-align:middle;"></i>' +
                '<tpl else>' +
                '<i class="sprite-cross-small" style="width:12px;height:12px;display:inline-block;margin:0 6px 5px 0;vertical-align:middle;"></i>' +
                '</tpl>' +

                ' {description}' +
                '</div>',
                '</tpl>'
            );

        return Ext.create('Ext.form.field.ComboBox', {
            name: 'orders.paymentId',
            pageSize: 7,
            queryMode: 'remote',
            store: Ext.create('Shopware.store.Payment', {
                pageSize: 7,
                filters: [{
                    property: 'active',
                    value: [true, false]
                }],
                sorters: [{
                    property: 'active',
                    direction: 'DESC'
                }, {
                    property: 'position',
                    direction: 'ASC'
                }]
            }),
            valueField: 'id',
            displayField: 'description',
            tpl: displayTpl,
            emptyText: me.snippets.empty,
            fieldLabel: me.snippets.paymentName
        });
    },

    createDispatchField: function() {
        var me = this;

        return Ext.create('Ext.form.field.ComboBox', {
            name: 'orders.dispatchId',
            pageSize: 7,
            queryMode: 'remote',
            store: Ext.create('Shopware.store.Dispatch', { pageSize: 7 }),
            valueField: 'id',
            displayField: 'name',
            emptyText: me.snippets.empty,
            fieldLabel: me.snippets.dispatchName
        });
    },


    createCustomerGroupField: function() {
        var me = this;

        return Ext.create('Ext.form.field.ComboBox', {
            name: 'customer.groupKey',
            store: Ext.create('Shopware.store.CustomerGroup', { pageSize: 7 }),
            valueField: 'key',
            pageSize: 7,
            queryMode: 'remote',
            displayField: 'name',
            emptyText: me.snippets.empty,
            fieldLabel: me.snippets.customerGroup
        });
    },

    createArticleSearch: function() {
        var me = this;

        return Ext.create('Shopware.form.field.ArticleSearch', {
            name: 'details.articleNumber',
            fieldLabel: me.snippets.article,
            store: Ext.create('Shopware.apps.Base.store.Variant'),
            anchor: '99%'
        });
    },

    createShopField: function() {
        var me = this;

        return Ext.create('Ext.form.field.ComboBox', {
            name: 'orders.shopId',
            store: Ext.create('Shopware.store.Shop', { pageSize: 7 }),
            valueField: 'id',
            pageSize: 7,
            queryMode: 'remote',
            displayField: 'name',
            emptyText: me.snippets.empty,
            fieldLabel: me.snippets.shop
        });
    },

    createPartnerField: function() {
        var me = this;

        var store = Ext.create('Ext.data.Store', {
            fields: [
                {
                    name: 'name',
                    type: 'string'
                },
                {
                    name: 'value',
                    type: 'string'
                }
            ],
            remoteSort: true,
            remoteFilter: true,
            pageSize: 10,
            proxy: {
                type: 'ajax',
                url: '<?php echo '/backend/Order/getPartners';?>',
                reader: {
                    type: 'json',
                    root: 'data'
                }
            }
        });

        return Ext.create('Ext.form.field.ComboBox', {
            name: 'orders.partnerId',
            store: store,
            displayField: 'name',
            valueField: 'value',
            queryMode: 'remote',
            pageSize: 10,
            emptyText: me.snippets.empty,
            fieldLabel: me.snippets.partner
        });
    },

    createDeliveryCountrySelection: function() {
        return Ext.create('Ext.form.field.ComboBox', {
            name: 'shipping.countryId',
            store: this.getCountryStore(),
            valueField: 'id',
            queryMode: 'remote',
            displayField: 'name',
            fieldLabel: this.snippets.shipping
        });
    },

    createBillingCountrySelection: function() {
        return Ext.create('Ext.form.field.ComboBox', {
            name: 'billing.countryId',
            store: this.getCountryStore(),
            valueField: 'id',
            queryMode: 'remote',
            displayField: 'name',
            fieldLabel: this.snippets.billing
        });
    },

    createSupplierSelectionField: function() {
        return Ext.create('Ext.form.field.ComboBox', {
            name: 'article.supplierId',
            fieldLabel: this.snippets.supplier,
            store: this.getSupplierStore(),
            displayField: 'name',
            valueField: 'id',
            allowBlank: true,
        });
    },

    getCountryStore: function() {
        var selectionFactory = Ext.create('Shopware.attribute.SelectionFactory', {});
        var store = selectionFactory.createEntitySearchStore("Shopware\\Models\\Country\\Country");
        store.pageSize = 999;

        store.sort([{
            property: 'active',
            direction: 'DESC'
        }, {
            property: 'name',
            direction: 'ASC'
        }]);
        store.remoteSort = true;

        return store;
    },

    getSupplierStore: function () {
        var store = Ext.data.StoreManager.get('supplierStore');
        return store ? store : Ext.create('Shopware.apps.Supplier.store.Supplier');
    },

    /**
     * Creates the "reset filters" and "perform filters" button
     * which displayed in the filter options panel on the left hand
     * of the order list.
     * @return [Ext.container.Container]
     */
    createFilterButtons: function() {
        var me = this;

        return Ext.create('Ext.container.Container', {
            style: 'margin-top: 10px;',
            items: [
                {
                    xtype: 'button',
                    cls: 'small secondary',
                    text: me.snippets.reset,
                    handler: function() {
                        me.fireEvent('resetFilters', me.filterForm);
                    }
                },
                {
                    xtype: 'button',
                    text: me.snippets.perform,
                    style: 'float: right;',
                    cls: 'primary small',
                    handler: function() {
                        me.fireEvent('acceptFilters', me.filterForm.getValues());
                    }
                }
            ]
        });
    },

    /**
     * Creates a grid panel which displays the last created order documents.
     *
     * @return [Ext.grid.Panel]
     */
    createDocumentsGrid: function() {
        var me = this;

        me.documentGrid =  Ext.create('Shopware.apps.Order.view.list.Document', {
            height: 200,
            title: me.snippets.document.title,
            getColumns: function() {
                var grid = this;
                return [
                    {
                        header: grid.snippets.columns.date,
                        dataIndex: 'date',
                        flex: 1,
                        renderer: grid.dateColumn
                    }, {
                        header: grid.snippets.columns.name,
                        dataIndex: 'name',
                        flex: 2,
                        renderer: grid.nameColumn
                    }
                ];
            },
            store: me.documentStore
        });

        return Ext.create('Ext.container.Container', {
            style: 'margin-top: 15px',
            items: [ me.documentGrid ]
        });
    }

});
//
<?php }} ?>