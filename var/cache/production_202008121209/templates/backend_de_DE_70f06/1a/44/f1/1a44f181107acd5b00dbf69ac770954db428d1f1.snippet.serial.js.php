<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:14
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article/model/serial.js" */ ?>
<?php /*%%SmartyHeaderCode:7746980575f58835a464315-25449381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a44f181107acd5b00dbf69ac770954db428d1f1' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article/model/serial.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7746980575f58835a464315-25449381',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835a467480_73107743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835a467480_73107743')) {function content_5f58835a467480_73107743($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Batch
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.Serial', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used  for this model
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'serialnumber' },
        { name: 'customerId'},
        { name: 'customerEmail' },
        { name: 'accountMode', type: 'int' },
        { name: 'date' }
    ]
});
//
<?php }} ?>