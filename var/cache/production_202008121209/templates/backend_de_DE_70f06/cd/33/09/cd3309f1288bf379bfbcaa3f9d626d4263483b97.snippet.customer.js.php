<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/customer.js" */ ?>
<?php /*%%SmartyHeaderCode:13894560105f5883580f50b3-14838249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd3309f1288bf379bfbcaa3f9d626d4263483b97' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/customer.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13894560105f5883580f50b3-14838249',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5883580f8065_35654460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5883580f8065_35654460')) {function content_5f5883580f8065_35654460($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The customer model contains all fields for a single shopware customer.
 */
//
Ext.define('Shopware.apps.Base.model.Customer', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Customer',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name:'id', type:'int' },
        { name:'groupKey', type:'string' },
        { name:'email', type:'string' },
        { name:'active', type:'boolean' },
        { name:'accountMode', type:'int' },
        { name:'confirmationKey', type:'string' },
        { name:'paymentId', type:'int', useNull: true },
        { name:'firstLogin', type:'date' },
        { name:'lastLogin', type:'date' },
        { name:'newsletter', type:'int' },
        { name:'validation', type:'int' },
        { name:'languageId', type:'int' },
        { name:'shopId', type:'int', useNull: true },
        { name:'priceGroupId', type:'int' },
        { name:'internalComment', type:'string' },
        { name:'failedLogins', type:'int' },
        { name:'referer', type:'string' },
        { name:'firstname', type:'string' },
        { name:'lastname', type:'string' },
        { name:'birthday', type:'date', useNull: true },
        { name:'customernumber', type:'int' },
        { name:'default_billing_address_id', type:'int', useNull: true },
        { name:'default_shipping_address_id', type:'int', useNull: true }
    ]

});
//
<?php }} ?>