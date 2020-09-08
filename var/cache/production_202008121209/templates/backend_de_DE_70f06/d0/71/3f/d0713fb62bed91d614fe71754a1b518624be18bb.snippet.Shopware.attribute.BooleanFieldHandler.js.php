<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.BooleanFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:9466192355f5790913cf1d8-85434557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0713fb62bed91d614fe71754a1b518624be18bb' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.BooleanFieldHandler.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9466192355f5790913cf1d8-85434557',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5790913cfff9_42141074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5790913cfff9_42141074')) {function content_5f5790913cfff9_42141074($_smarty_tpl) {?>/**
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

Ext.define('Shopware.attribute.BooleanFieldHandler', {
    extend: 'Shopware.attribute.FieldHandlerInterface',

    supports: function(attribute) {
        return (attribute.get('columnType') === 'boolean');
    },

    create: function(field, attribute) {
        field.xtype = 'checkbox';
        field.uncheckedValue = 0;
        field.inputValue = 1;

        if (attribute.get('defaultValue') !== null) {
            field.checked = parseInt(attribute.get('defaultValue')) === 1;
            field.defaultValue = field.checked;
        }

        return field;
    }
});
<?php }} ?>