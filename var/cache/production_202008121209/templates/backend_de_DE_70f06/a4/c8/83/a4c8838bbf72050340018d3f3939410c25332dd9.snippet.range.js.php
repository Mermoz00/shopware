<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:14
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/range.js" */ ?>
<?php /*%%SmartyHeaderCode:6305143455f58835a59a938-96475912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4c8838bbf72050340018d3f3939410c25332dd9' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/range.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6305143455f58835a59a938-96475912',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835a5a2045_44826635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835a5a2045_44826635')) {function content_5f58835a5a2045_44826635($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.condition_list.field.Range', {

    extend: 'Ext.form.FieldContainer',
    layout: { type: 'hbox', align: 'stretch' },
    mixins: [ 'Ext.form.field.Base' ],
    height: 30,
    value: undefined,

    minField: 'minPrice',
    maxField: 'maxPrice',
    decimalPrecision: 2,

    initComponent: function() {
        var me = this;
        me.items = me.createItems();
        me.callParent(arguments);
    },

    createItems: function() {
        var me = this;
        return [
            me.createFromField(),
            me.createToField()
        ];
    },

    createFromField: function() {
        var me = this;

        me.fromField = Ext.create('Ext.form.field.Number', {
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'from','default'=>'from','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'from','default'=>'from','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Von<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'from','default'=>'from','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            minValue: 0,
            labelWidth: 30,
            decimalPrecision: me.decimalPrecision,
            flex: 1,
            listeners: {
                change: function() {
                    me.toField.setMinValue(me.fromField.getValue());
                }
            }
        });
        return me.fromField;
    },

    createToField: function() {
        var me = this;

        me.toField = Ext.create('Ext.form.field.Number', {
            labelWidth: 30,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'to','default'=>'to','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'to','default'=>'to','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bis<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'to','default'=>'to','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            minValue: 0,
            padding: '0 0 0 10',
            decimalPrecision: me.decimalPrecision,
            flex: 1,
            listeners: {
                change: function() {
                    me.fromField.setMaxValue(me.toField.getValue());
                }
            }
        });
        return me.toField;
    },

    getValue: function() {
        return this.value;
    },

    setValue: function(value) {
        var me = this;

        me.value = value;

        if (!Ext.isObject(value)) {
            me.fromField.setValue(null);
            me.toField.setValue(null);
            return;
        }


        if (value.hasOwnProperty(me.minField)) {
            me.fromField.setValue(value[me.minField]);
        }
        if (value.hasOwnProperty(me.maxField)) {
            me.toField.setValue(value[me.maxField]);
        }
    },

    getSubmitData: function() {
        var value = {};

        value[this.name] = { };
        value[this.name][this.minField] = this.fromField.getValue();
        value[this.name][this.maxField] = this.toField.getValue();

        return value;
    },

    validate: function() {
        var valid = (this.fromField.getValue() !== null || this.toField.getValue());

        if (!valid) {
            Shopware.Notification.createGrowlMessage(
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'validation_title','default'=>'Validation','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'validation_title','default'=>'Validation','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Überprüfung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'validation_title','default'=>'Validation','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                this.getErrorMessage()
            );
        }

        return valid;
    },

    getErrorMessage: function() {
        return 'Range requires at least one value';
    }
});
//
<?php }} ?>