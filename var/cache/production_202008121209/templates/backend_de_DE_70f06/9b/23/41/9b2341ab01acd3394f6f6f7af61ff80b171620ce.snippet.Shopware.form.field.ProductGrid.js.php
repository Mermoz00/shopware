<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.ProductGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:8413283105f5883584ae0e9-56726904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b2341ab01acd3394f6f6f7af61ff80b171620ce' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.ProductGrid.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8413283105f5883584ae0e9-56726904',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5883584b1904_44964680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5883584b1904_44964680')) {function content_5f5883584b1904_44964680($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.ProductGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-product-grid',

    createColumns: function() {
        var me = this;

        return [
            me.createSortingColumn(),
            { dataIndex: 'articleActive', width: 30, renderer: me.booleanColumnRenderer },
            { dataIndex: 'number' },
            { dataIndex: 'name', flex: 1 },
            { dataIndex: 'additionalText', flex: 1 },
            me.createActionColumn()
        ];
    },

    booleanColumnRenderer: function(value, meta, record) {
        var active = (record.get('articleActive') && record.get('variantActive'));
        var checked = 'sprite-ui-check-box-uncheck';
        if (active === true || active === 1) {
            checked = 'sprite-ui-check-box';
        }
        return '<span style="display:block; margin: 0 auto; height:16px; width:16px;" class="' + checked + '"></span>';
    },

    getItemData: function(item) {
        return item.get('number');
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.ProductSingleSelection', this.getComboConfig());
    },

    createActionColumnItems: function() {
        var me = this,
            items = me.callParent(arguments);

        items.push(me.createModuleIcon());
        return items;
    },

    createModuleIcon: function() {
        return {
            action: 'open-article',
            iconCls: 'sprite-inbox',
            handler: function (view, rowIndex, colIndex, item, opts, record) {
                Shopware.app.Application.addSubApplication({
                    name: 'Shopware.apps.Article',
                    action: 'detail',
                    params: {
                        articleId: record.get('articleId')
                    }
                });
            }
        };
    }
});
<?php }} ?>