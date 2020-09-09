<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:23
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/model/mail.js" */ ?>
<?php /*%%SmartyHeaderCode:9890869185f579093705972-33859515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60cfa89fd2614cd7535d88e1e198ef03b2bb8727' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/model/mail.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9890869185f579093705972-33859515',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f57909370fe24_74048774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f57909370fe24_74048774')) {function content_5f57909370fe24_74048774($_smarty_tpl) {?>/**
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
 * The list model is a helper model to display the head data in a compact grid.
 */
//
Ext.define('Shopware.apps.Order.model.Mail', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        //
        { name: 'orderId', type: 'int' },
        { name: 'templateName', type: 'string', useNull: true },
        { name: 'content', type: 'string' },
        { name: 'contentHtml', type: 'string' },
        { name: 'subject', type: 'string' },
        { name: 'to', type: 'string' },
        { name: 'fromMail', type: 'string' },
        { name: 'fromName', type: 'string' },
        { name: 'sent', type: 'boolean' },
        { name: 'isHtml', type: 'boolean' }
    ],

    associations: [
        {
            type: 'hasMany',
            model: 'Shopware.apps.Order.model.Receipt',
            name: 'getReceipt',
            associationKey: 'attachment'
        }
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy: {
        /**
         * Set proxy type to ajax
         * @string
         */
        type: 'ajax',

        /**
         * Specific urls to call on CRUD action methods "create", "read", "update" and "destroy".
         * @object
         */
        api: {
            create: '<?php echo '/backend/Order/sendMail';?>',
            update: '<?php echo '/backend/Order/sendMail';?>'
        }
    }

});
//
<?php }} ?>