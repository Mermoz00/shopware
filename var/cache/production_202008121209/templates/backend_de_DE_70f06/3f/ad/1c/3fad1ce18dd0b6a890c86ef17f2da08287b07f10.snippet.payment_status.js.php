<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/store/payment_status.js" */ ?>
<?php /*%%SmartyHeaderCode:17012708755f5790910abc15-60301574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fad1ce18dd0b6a890c86ef17f2da08287b07f10' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/store/payment_status.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17012708755f5790910abc15-60301574',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5790910add02_30416609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5790910add02_30416609')) {function content_5f5790910add02_30416609($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Base.store.PaymentStatus', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.PaymentStatus',
    storeId: 'base.PaymentStatus',
    model : 'Shopware.apps.Base.model.PaymentStatus',
    pageSize: 1000,
    autoLoad: false,
    remoteFilter: true,
    proxy:{
        type:'ajax',
        url:'<?php echo '/backend/base/getPaymentStatus';?>',
        reader:{
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
}).create();
<?php }} ?>