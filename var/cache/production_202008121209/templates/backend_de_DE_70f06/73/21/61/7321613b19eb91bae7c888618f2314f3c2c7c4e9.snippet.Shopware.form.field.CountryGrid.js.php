<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.CountryGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:5921495935f57909143b3d1-05844356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7321613b19eb91bae7c888618f2314f3c2c7c4e9' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.CountryGrid.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5921495935f57909143b3d1-05844356',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f57909143ca05_77437144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f57909143ca05_77437144')) {function content_5f57909143ca05_77437144($_smarty_tpl) {?>/**
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

//

// 
Ext.define('Shopware.form.field.CountryGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-country-grid',
    mixins: ['Shopware.model.Helper'],

    createSearchField: function() {
        return Ext.create('Shopware.form.field.CountrySingleSelection', this.getComboConfig());
    }
});
// 
<?php }} ?>