<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:23
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/product_stream/store/stream.js" */ ?>
<?php /*%%SmartyHeaderCode:6338621615f579093b3ea30-49420645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dfd68761eee916851b9365ded01612c21404d85' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/product_stream/store/stream.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6338621615f579093b3ea30-49420645',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579093b40f85_63379631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579093b40f85_63379631')) {function content_5f579093b40f85_63379631($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.ProductStream.store.Stream', {
    extend:'Shopware.store.Listing',
    groupField: 'type',

    configure: function() {
        return {
            controller: 'ProductStream'
        };
    },
    model: 'Shopware.apps.ProductStream.model.Stream'
});
//
<?php }} ?>