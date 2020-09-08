<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.HtmlFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:13628982735f5790913e8233-96880516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '979b640f11c3c9e75a86d67cf8a1547f10182a4d' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.HtmlFieldHandler.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13628982735f5790913e8233-96880516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5790913eb3c5_76379794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5790913eb3c5_76379794')) {function content_5f5790913eb3c5_76379794($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

Ext.define('Shopware.attribute.HtmlFieldHandler', {
    extend: 'Shopware.attribute.FieldHandlerInterface',

    supports: function(attribute) {
        return (attribute.get('columnType') === 'html');
    },

    create: function(field, attribute) {
        field.xtype = 'tinymce';
        /** <?php if ($_smarty_tpl->tpl_vars['user']->value->extended_editor==1){?> */
        field.height = 300;
        /** <?php }else{ ?> */
        field.height = 200;
        /** <?php }?> */
        return field;
    }
});
<?php }} ?>