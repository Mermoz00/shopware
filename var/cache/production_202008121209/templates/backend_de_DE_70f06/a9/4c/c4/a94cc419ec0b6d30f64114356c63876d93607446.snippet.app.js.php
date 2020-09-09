<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:23
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagExtendBackend/Resources/views/backend/customer/swag_extend_backend/app.js" */ ?>
<?php /*%%SmartyHeaderCode:2445862735f57909334d052-19503642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a94cc419ec0b6d30f64114356c63876d93607446' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagExtendBackend/Resources/views/backend/customer/swag_extend_backend/app.js',
      1 => 1599565969,
      2 => 'file',
    ),
    '68f299ede11bb56d673388e403e0b4e47386b442' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/customer/app.js',
      1 => 1598958813,
      2 => 'file',
    ),
    '2a2015cddc40b62108ad6f4a9fa36fecf129aa9c' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagExtendBackend/Resources/views/backend/customer/swag_extend_backend/store/product.js',
      1 => 1599565969,
      2 => 'snippet',
    ),
    'f98b5122d82dbe3ba88e9c788a083bcf519fff3d' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagExtendBackend/Resources/views/backend/customer/swag_extend_backend/model/product.js',
      1 => 1599565969,
      2 => 'snippet',
    ),
    '08b9b9e36f84c2a953a32f87f5c86a7f0e9a9f0d' => 
    array (
      0 => '/var/www/html/shopware_test/custom/plugins/SwagExtendBackend/Resources/views/backend/customer/swag_extend_backend/view/detail/product.js',
      1 => 1599565969,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '2445862735f57909334d052-19503642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579093367e78_06951390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579093367e78_06951390')) {function content_5f579093367e78_06951390($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage App
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware Application - Customer list backend module
 *
 * Contains the configuration for the customer list backend module.
 * This component defines which controllers belong to the application or whether the bulk loading is activated.
 */
//
//
//
Ext.define('Shopware.apps.Customer', {

    /**
     * The name of the module. Used for internal purpose
     * @string
     */
    name: 'Shopware.apps.Customer',

    /**
     * Extends from our special controller, which handles the sub-application behavior and the event bus
     * @string
     */
    extend: 'Enlight.app.SubApplication',

    /**
     * Enable bulk loading
     * @boolean
     */
    bulkLoad: true,

    /**
     * Sets the loading path for the sub-application.
     *
     * @string
     */
    loadPath: '<?php echo '/backend/customer/load';?>',

    /**
     * Requires controllers for sub-application
     * @array
     */
    controllers: [ 'Detail', 'Order', 'Main', 'Stream' ],

    /**
     * The detail controller knows all form field sets and the detail window component
     * @array
     */
    views: [

        'main.QuickView',
        'main.StreamView',
        'main.CustomerList',
        'main.CustomerListFilter',
        'main.Window',
        'main.Wizard',

        'detail.Window',
        'detail.Base',
        'detail.Debit',
        'detail.Comment',
        'detail.Additional',
        'order.List',
        'order.Chart',
        'address.List',
        'address.detail.Window',
        'address.detail.Address',

        'chart.AmountChartFactory',
        'chart.Chart',
        'chart.MetaChart',

        'customer_stream.Detail',
        'customer_stream.Listing',
        'customer_stream.Preview',
        'customer_stream.ConditionPanel',
        'customer_stream.Assignment',
        'customer_stream.ConditionField',
        'customer_stream.conditions.AccountModeCondition',
        'customer_stream.conditions.AgeCondition',
        'customer_stream.conditions.HasAddressWithCountryCondition',
        'customer_stream.conditions.HasCanceledOrdersCondition',
        'customer_stream.conditions.HasNewsletterRegistrationCondition',
        'customer_stream.conditions.IsCustomerSinceCondition',
        'customer_stream.conditions.IsInCustomerGroupCondition',
        'customer_stream.conditions.HasOrderCountCondition',
        'customer_stream.conditions.OrderedAtWeekdayCondition',
        'customer_stream.conditions.OrderedInLastDaysCondition',
        'customer_stream.conditions.OrderedInShopCondition',
        'customer_stream.conditions.RegisteredInShopCondition',
        'customer_stream.conditions.OrderedOnDeviceCondition',
        'customer_stream.conditions.OrderedProductCondition',
        'customer_stream.conditions.OrderedProductOfCategoryCondition',
        'customer_stream.conditions.OrderedProductOfManufacturerCondition',
        'customer_stream.conditions.OrderedWithDeliveryCondition',
        'customer_stream.conditions.OrderedWithPaymentCondition',
        'customer_stream.conditions.HasTotalOrderAmountCondition',
        'customer_stream.conditions.CustomerAttributeCondition',
        'customer_stream.conditions.SalutationCondition',
        'customer_stream.conditions.SearchTermCondition',
        'customer_stream.conditions.field.AttributeValue',
        'customer_stream.conditions.field.AttributeWindow',
        'customer_stream.conditions.field.OperatorField'
    ],

    /**
     * All required stores are defined here. The detail store contains all data around the customer.
     * The other shops are global stores which used for combo boxes.
     * @array
     */
    stores: [ 'Detail', 'Orders', 'Chart', 'Batch', 'Address', 'QuickView', 'Preview', 'CustomerStream' ],

    /**
     * All store's required models. The detail store handles the base, billing, shipping and debit model.
     * @array
     */
    models: [ 'Customer', 'Debit', 'PaymentData', 'Order', 'Chart', 'Batch', 'Address', 'QuickView', 'CustomerStream' ],

    /**
     * Returns the main application window for this is expected
     * by the Enlight.app.SubApplication class.
     * The class sets a new event listener on the "destroy" event of
     * the main application window to perform the destroying of the
     * whole sub application when the user closes the main application window.
     *
     * This method will be called when all dependencies are solved and
     * all member controllers, models, views and stores are initialized.
     *
     * @private
     * @return [object] mainWindow - the main application window based on Enlight.app.Window
     */
    launch: function() {
        var me = this,
            mainController = me.getController('Main');

        me.currencySign = '<?php echo $_smarty_tpl->tpl_vars['currency']->value['sign'];?>
';
        me.currencyAtEnd = '<?php echo $_smarty_tpl->tpl_vars['currency']->value['currencyAtEnd'];?>
';

        return mainController.mainWindow;
    }
});
//

//<?php /*  Call merged included template "backend/customer/swag_extend_backend/store/product.js" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("backend/customer/swag_extend_backend/store/product.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2445862735f57909334d052-19503642');
content_5f579093359bc9_29402961($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "backend/customer/swag_extend_backend/store/product.js" */?>

//<?php /*  Call merged included template "backend/customer/swag_extend_backend/model/product.js" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("backend/customer/swag_extend_backend/model/product.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2445862735f57909334d052-19503642');
content_5f57909335e6c8_16619722($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "backend/customer/swag_extend_backend/model/product.js" */?>

//<?php /*  Call merged included template "backend/customer/swag_extend_backend/view/detail/product.js" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("backend/customer/swag_extend_backend/view/detail/product.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2445862735f57909334d052-19503642');
content_5f5790933627d2_60854286($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "backend/customer/swag_extend_backend/view/detail/product.js" */?>

//
//<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:23
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagExtendBackend/Resources/views/backend/customer/swag_extend_backend/store/product.js" */ ?>
<?php if ($_valid && !is_callable('content_5f579093359bc9_29402961')) {function content_5f579093359bc9_29402961($_smarty_tpl) {?>// 
Ext.define('Shopware.apps.Customer.swagExtendBackend.store.Product', {
    extend: 'Shopware.store.Listing',
    model: 'Shopware.apps.Customer.swagExtendBackend.model.Product',

    configure: function() {
        return {
            controller: 'SwagExtendBackend'
        };
    }
});
// 
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:23
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagExtendBackend/Resources/views/backend/customer/swag_extend_backend/model/product.js" */ ?>
<?php if ($_valid && !is_callable('content_5f57909335e6c8_16619722')) {function content_5f57909335e6c8_16619722($_smarty_tpl) {?>// 
Ext.define('Shopware.apps.Customer.swagExtendBackend.model.Product', {
    extend: 'Shopware.data.Model',

    fields: [
        { name: 'id', type: 'int' },
        { name: 'mainDetailId', type: 'int' },
        { name: 'name', type: 'string' }
    ]
});
// 
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:23
         compiled from "/var/www/html/shopware_test/custom/plugins/SwagExtendBackend/Resources/views/backend/customer/swag_extend_backend/view/detail/product.js" */ ?>
<?php if ($_valid && !is_callable('content_5f5790933627d2_60854286')) {function content_5f5790933627d2_60854286($_smarty_tpl) {?>// 
Ext.define('Shopware.apps.Customer.swagExtendBackend.view.detail.Product', {
    extend: 'Shopware.grid.Panel',
    alias: 'widget.customer-products-grid',
    flex: 2,

    configure: function() {
        return {
            toolbar: false,
            editColumn: false,
            deleteColumn: false,
            columns: {
                name: {}
            }
        }
    },

    createActionColumnItems: function() {
        var me = this,
            items = me.callParent(arguments);

        items.push(me.createOpenProductItem());

        return items;
    },

    createOpenProductItem: function() {
        return {
            action: 'openProduct',
            iconCls: 'sprite-inbox',
            handler: function(view, rowIndex, colIndex, item, opts, record) {
                Shopware.app.Application.addSubApplication({
                    name: 'Shopware.apps.Article',
                    action: 'detail',
                    params: {
                        articleId: record.get('id')
                    }
                });
            }
        }
    }
});
// 
<?php }} ?>