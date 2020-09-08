<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:23
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article_list/model/operation.js" */ ?>
<?php /*%%SmartyHeaderCode:19918061865f5790936fb849-41885331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e408b7e606f6c0491f66bc02d1fce2d31810059e' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article_list/model/operation.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19918061865f5790936fb849-41885331',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5790936fe8b6_65092427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5790936fe8b6_65092427')) {function content_5f5790936fe8b6_65092427($_smarty_tpl) {?>/**
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

/**
 * Shopware Model - Operation model
 *
 * Represents a single operation to be applied to a given filter
 */
//
Ext.define('Shopware.apps.ArticleList.model.Operation', {
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
        { name: 'id', type: 'int', useNull: true },
        { name: 'column', type: 'string' },
        { name: 'operator', type: 'string' },
        { name: 'value', type: 'string' }
    ]
});
//
<?php }} ?>