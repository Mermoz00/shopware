<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:14
         compiled from "/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/view/detail/payment_methods.js" */ ?>
<?php /*%%SmartyHeaderCode:11024715785f58835abcd5d0-98236654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0c611f4e75610ab1b64a30e73e1118da3ce19e7' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/view/detail/payment_methods.js',
      1 => 1598958813,
      2 => 'file',
    ),
    '649e1ef2d4912a6e81eabb80a3bd289741014df0' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/controller/detail.js',
      1 => 1598958813,
      2 => 'file',
    ),
    '01387de29056fa5622f220166c63830cf320fbb0' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/model/batch.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11024715785f58835abcd5d0-98236654',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835abe0615_39289648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835abe0615_39289648')) {function content_5f58835abe0615_39289648($_smarty_tpl) {?>/**
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

//
Ext.define('Shopware.apps.Order.model.Batch', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.apps.Order.model.Order',

    /**
     * Add properties for the batch processing status
     * @array
     */
    fields: [
        //
        { name : 'success', type: 'bool', default: null },
        { name : 'errorMessage', type: 'string', useNull: true, default: null }
    ],
});
//
<?php }} ?>