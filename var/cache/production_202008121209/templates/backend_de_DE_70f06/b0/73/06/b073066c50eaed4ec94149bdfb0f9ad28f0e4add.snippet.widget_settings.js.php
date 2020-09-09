<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/model/widget_settings.js" */ ?>
<?php /*%%SmartyHeaderCode:10437525005f579091c979d4-34450015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b073066c50eaed4ec94149bdfb0f9ad28f0e4add' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/model/widget_settings.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10437525005f579091c979d4-34450015',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579091c995e2_10496780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579091c995e2_10496780')) {function content_5f579091c995e2_10496780($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Index.model.WidgetSettings', {

    extend: 'Ext.data.Model',

    fields: [
        'authId',
        'height',
        'columnsShown',
        'dock',
        'pinned',
        'minimized',
        { name: 'data', type: 'auto' }
    ]
});

//
<?php }} ?>