<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:11
         compiled from "/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.grid.RowEditor.js" */ ?>
<?php /*%%SmartyHeaderCode:2244291695f588357e0a296-28121386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aff26a4e5bc189c4ef4dddbf160c68937be34616' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.grid.RowEditor.js',
      1 => 1598958812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2244291695f588357e0a296-28121386',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f588357e0e0e4_55337948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f588357e0e0e4_55337948')) {function content_5f588357e0e0e4_55337948($_smarty_tpl) {?>/**
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
Ext.override(Ext.grid.RowEditor, {
    getFloatingButtons: function() {
       var me = this,
           cssPrefix = Ext.baseCSSPrefix,
           btnsCss = cssPrefix + 'grid-row-editor-buttons',
           plugin = me.editingPlugin,
           btns;

       if (!me.floatingButtons) {
           btns = me.floatingButtons = new Ext.Container({
               renderTpl: [
                   '<div class="{baseCls}-ml"></div>',
                   '<div class="{baseCls}-mr"></div>',
                   '<div class="{baseCls}-bl"></div>',
                   '<div class="{baseCls}-br"></div>',
                   '<div class="{baseCls}-bc"></div>',
                   '{%this.renderContainer(out,values)%}'
               ],
               width: 200,
               renderTo: me.el,
               baseCls: btnsCss,
               layout: {
                   type: 'hbox',
                   align: 'middle'
               },
               defaults: {
                   flex: 1,
                   margins: '0 1 0 1'
               },
               items: [{
                   itemId: 'update',
                   xtype: 'button',
                   cls: 'primary small',
                   handler: plugin.completeEdit,
                   scope: plugin,
                   text: me.saveBtnText,
                   disabled: !me.isValid,
                   minWidth: Ext.panel.Panel.prototype.minButtonWidth
               }, {
                   xtype: 'button',
                   handler: plugin.cancelEdit,
                   scope: plugin,
                   cls: 'secondary small',
                   text: me.cancelBtnText,
                   minWidth: Ext.panel.Panel.prototype.minButtonWidth
               }]
           });

           // Prevent from bubbling click events to the grid view
           me.mon(btns.el, {
               // BrowserBug: Opera 11.01
               //   causes the view to scroll when a button is focused from mousedown
               mousedown: Ext.emptyFn,
               click: Ext.emptyFn,
               stopEvent: true
           });
       }
       return me.floatingButtons;
   }
});
//<?php }} ?>