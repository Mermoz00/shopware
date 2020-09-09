<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:23
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/model/dispatch.js" */ ?>
<?php /*%%SmartyHeaderCode:4122798115f5790937364d6-90337612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87be73bf84543d267578c835d4a3af1b749336c9' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/model/dispatch.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4122798115f5790937364d6-90337612',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579093737f98_61313437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579093737f98_61313437')) {function content_5f579093737f98_61313437($_smarty_tpl) {?>/**
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
 * The dispatch model of the order model is an simple extension of the global standard dispatch model.
 * The difference to standard model is the definition of the proxy. The standard model
 * needs a proxy to load the model data for combo boxes or something else. The order
 * dispatch model is only used for the order-dispatch association.
 */
//
Ext.define('Shopware.apps.Order.model.Dispatch', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.apps.Base.model.Dispatch',

    /**
     * One or more BelongsTo associations for this model.
     * @string
     */
    belongsTo: 'Shopware.apps.Order.model.Order'
});
//
<?php }} ?>