<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/payment_status.js" */ ?>
<?php /*%%SmartyHeaderCode:17015896555f5883580e71c0-40721731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '422486e90378d07ae99a1e3bc59150250964e626' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/payment_status.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17015896555f5883580e71c0-40721731',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5883580e9c59_73827234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5883580e9c59_73827234')) {function content_5f5883580e9c59_73827234($_smarty_tpl) {?>/**
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
 * The payment model represents a data row of the s_core_states or the
 * Shopware\Models\State\State doctrine model.
 */
//
//
Ext.define('Shopware.apps.Base.model.PaymentStatus', {
    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.PaymentStatus',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name:'id', type: 'int' },
        { name:'name', type: 'string' },
        {
            name:'description',
            type: 'string',
            convert: function(value, record) {
                if (value) {
                    return value;
                } else {
                    return record.get('name');
                }
            }
        }
    ]
});
//
<?php }} ?>