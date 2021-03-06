<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.OrderDetailSingleSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:16242579125f5883585975a2-38924972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd09357c180412dcd6788c724468f64e798fd5fb5' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.OrderDetailSingleSelection.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16242579125f5883585975a2-38924972',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f588358599b66_04352511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f588358599b66_04352511')) {function content_5f588358599b66_04352511($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.OrderDetailSingleSelection', {
    extend: 'Shopware.form.field.SingleSelection',
    alias: 'widget.shopware-form-field-oder-detail-single-selection',

    getComboConfig: function() {
        var me = this;
        var config = me.callParent(arguments);

        config.tpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '<div class="x-boundlist-item"><b>{quantity}x {articleNumber}</b> ({[this.formatPrice(values.price)]}) - {articleName}</div>',
            '</tpl>',
            {
                formatPrice: function(value) {
                    if ( value === Ext.undefined ) {
                        return value;
                    }
                    return Ext.util.Format.currency(value);
                }
            }
        );
        config.displayTpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                    '{quantity}x {articleNumber}</b> ({[this.formatPrice(values.price)]}) - {articleName}',
            '</tpl>',
            {
                formatPrice: function(value) {
                    if ( value === Ext.undefined ) {
                        return value;
                    }
                    return Ext.util.Format.currency(value);
                }
            }
        );
        return config;
    },
});<?php }} ?>