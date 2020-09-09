<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:23
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/model/billing.js" */ ?>
<?php /*%%SmartyHeaderCode:5945277915f57909368a170-71175696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd81fefc685d1990823e29c814f555a6e594e2caf' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/model/billing.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5945277915f57909368a170-71175696',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f57909368ca96_57591928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f57909368ca96_57591928')) {function content_5f57909368ca96_57591928($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 *
 * The billing model represents a single row of the s_order_billingaddress and belongs to
 * the order model which is defined in backend/order/model/order.js.
 * The order billing model is an simple extension of the global standard billingAddress model
 * which contains all required fields for an billing address.
 */
//
Ext.define('Shopware.apps.Order.model.Billing', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.apps.Base.model.BillingAddress',
    /**
     * One or more BelongsTo associations for this model.
     * @string
     */
    belongsTo: 'Shopware.apps.Order.model.Order',
    /**
     * Extends the models fields with the order id field.
     * @array
     */
    fields: [
        //
        { name: 'orderId', type: 'int' },
        { name: 'stateId', type:'int', useNull: true }
    ]
});
//
<?php }} ?>