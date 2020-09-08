<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.CustomFacetGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:6092727625f57909151ee14-17427492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc52fe247b1d9a3b97d7419f17d28eac6510c009' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.CustomFacetGrid.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6092727625f57909151ee14-17427492',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579091520cd9_63671297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579091520cd9_63671297')) {function content_5f579091520cd9_63671297($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.CustomFacetGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-custom-facet-grid',
    mixins: ['Shopware.model.Helper'],

    createColumns: function() {
        var me = this;

        return [
            me.createSortingColumn(),
            me.applyBooleanColumnConfig({
                dataIndex: 'active',
                width: 90
            }),
            {
                dataIndex: 'name',
                flex: 1
            },
            me.createActionColumn()
        ];
    }
});
<?php }} ?>