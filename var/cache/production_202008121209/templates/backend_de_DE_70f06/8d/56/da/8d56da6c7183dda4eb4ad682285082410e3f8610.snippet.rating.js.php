<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/model/rating.js" */ ?>
<?php /*%%SmartyHeaderCode:1365485855f579091ce4b48-73892021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d56da6c7183dda4eb4ad682285082410e3f8610' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/model/rating.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1365485855f579091ce4b48-73892021',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579091ce8406_34708235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579091ce8406_34708235')) {function content_5f579091ce8406_34708235($_smarty_tpl) {?>/**
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
 */

//
Ext.define('Shopware.apps.Index.model.Rating', {
    extend: 'Ext.data.Model',
    fields: [
        //
        { name: 'id' },
        { name: 'articleID' },
        { name: 'name' },
        { name: 'headline' },
        { name: 'comment' },
        { name: 'points' },
        { name: 'datum', type: 'date', dateFormat:'Y-m-d H:i:s' },
        { name: 'email' },
        { name: 'productTitle' }
    ]
});
//
<?php }} ?>