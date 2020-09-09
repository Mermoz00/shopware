<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:14
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/store/order.js" */ ?>
<?php /*%%SmartyHeaderCode:15663209515f58835a949584-67146587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20800b4e121fe33f382b31e1cf4b85e71dc120af' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/store/order.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15663209515f58835a949584-67146587',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835a94b378_25367846',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835a94b378_25367846')) {function content_5f58835a94b378_25367846($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Order list backend module
 *
 * The list store is used from the order list grid.
 */
//
Ext.define('Shopware.apps.Order.store.Order', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',

    /**
     * Auto load the store after the component is initialized
     * @boolean
     */
    autoLoad:false,

    /**
     * Enable remote sort.
     * @boolean
     */
    remoteSort:true,

    /**
     * Enable remote filtering
     * @boolean
     */
    remoteFilter:true,

    /**
     * Amount of data loaded at once
     * @integer
     */
    pageSize:20,

    /**
     * to upload all selected items in one request
     * @boolean
     */
    batch:true,

    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Order.model.Order',

    /**
     * Default sorters
     * @array
     */
    sorters: [
        {
            property: 'orderTime',
            direction: 'DESC'
        }
    ]
});
//
<?php }} ?>