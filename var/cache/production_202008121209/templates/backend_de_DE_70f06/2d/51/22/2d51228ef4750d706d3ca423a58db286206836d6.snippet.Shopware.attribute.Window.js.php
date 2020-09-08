<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/Shopware.attribute.Window.js" */ ?>
<?php /*%%SmartyHeaderCode:2126909115f5790915bd195-18522822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d51228ef4750d706d3ca423a58db286206836d6' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/Shopware.attribute.Window.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2126909115f5790915bd195-18522822',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5790915c4864_09868831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5790915c4864_09868831')) {function content_5f5790915c4864_09868831($_smarty_tpl) {?>/**
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
Ext.define('Shopware.attribute.Window', {
    extend: 'Enlight.app.Window',
    table: null,
    layout: 'border',
    iconCls: 'sprite-attributes',
    allowTranslation: true,
    footerButton: false,

    initComponent: function() {
        var me = this;

        me.items = me.createItems();
        me.dockedItems = me.createDockedItems();
        me.callParent(arguments);

        if (me.record) {
            me.loadAttribute(me.record);
        }
    },

    loadAttribute: function(record) {
        var me = this;
        me.record = record;
        me.attributeForm.loadAttribute(record.get('id'));
        me.setTitle(this.getRecordTitle(record));
    },

    saveAttribute: function() {
        var me = this;
        me.attributeForm.saveAttribute(
            me.record.get('id'),
            function() {
                me.destroy();
            }
        );
    },

    createItems: function() {
        return [this.createForm()];
    },

    createDockedItems: function() {
        return [this.createToolbar()];
    },

    createToolbar: function() {
        return Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            items: this.createToolbarItems()
        });
    },

    createToolbarItems: function() {
        return [
            '->',
            this.createCancelButton(),
            this.createSaveButton()
        ];
    },

    createSaveButton: function() {
        var me = this;
        me.saveButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'save_button','namespace'=>'backend/attributes/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'save_button','namespace'=>'backend/attributes/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Speichern<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'save_button','namespace'=>'backend/attributes/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'primary',
            handler: function() {
                me.saveAttribute();
            }
        });
        return me.saveButton;
    },

    createCancelButton: function() {
        var me = this;
        me.cancelButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cancel_button','namespace'=>'backend/attributes/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'cancel_button','namespace'=>'backend/attributes/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Abbrechen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'cancel_button','namespace'=>'backend/attributes/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'secondary',
            handler: function() {
                me.destroy();
            }
        });
        return me.cancelButton;
    },

    createForm: function() {
        var me = this;

        me.attributeForm = Ext.create('Shopware.attribute.Form', {
            table: me.table,
            bodyPadding: 20,
            region: 'center',
            autoScroll: true,
            allowTranslation: me.allowTranslation
        });

        return me.attributeForm;
    },

    getRecordTitle: function(record) {
        var me = this;

        if (me.title) {
            return me.title;
        }

        var plain = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'attribute_window_title','namespace'=>'backend/attributes/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'attribute_window_title','namespace'=>'backend/attributes/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Freitextfelder<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'attribute_window_title','namespace'=>'backend/attributes/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        if (!record) {
            return plain;
        }

        var prefix = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'attribute_window_title','namespace'=>'backend/attributes/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'attribute_window_title','namespace'=>'backend/attributes/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Freitextfelder<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'attribute_window_title','namespace'=>'backend/attributes/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' + ': ';
        if (record.get('name')) {
            return prefix + record.get('name');
        }
        if (record.get('label')) {
            return prefix + record.get('label');
        }
        if (record.get('description')) {
            return prefix + record.get('description');
        }
        if (record.get('number')) {
            return prefix + record.get('number');
        }
        return plain;
    }
});
//
<?php }} ?>