<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:20
         compiled from "/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.grid.column.Action.js" */ ?>
<?php /*%%SmartyHeaderCode:13532356045f579090c69ea9-59368422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b5d5806ac52e1e9c39b1770d30b9b851bcb0031' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.grid.column.Action.js',
      1 => 1598958812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13532356045f579090c69ea9-59368422',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579090c6cfc9_30686265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579090c6cfc9_30686265')) {function content_5f579090c6cfc9_30686265($_smarty_tpl) {?>/**
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
 * Overrides the Ext.grid.column.Actio to provide
 * an additional HTML5 data attribute to provide
 * a better adressing in selenium ui tests.
 */
//
Ext.override(Ext.grid.column.Action, {

    /** Suffix for the data attribute */
    dataSuffix: 'action',

    constructor: function(config) {
        var me = this,
            cfg = Ext.apply({}, config),
            items = cfg.items || [me],
            i,
            item;

        // This is a Container. Delete the items config to be reinstated after construction.
        delete cfg.items;
        me.callParent([cfg]);

        // Items is an array property of ActionColumns
        me.items = items;

        // todo@all in Extjs 4.1 this has to be moved into the new defaultRenderer()-function
        me.renderer = function(v, meta) {
//          Allow a configured renderer to create initial value (And set the other values in the "metadata" argument!)
            v = Ext.isFunction(cfg.renderer) ? cfg.renderer.apply(this, arguments)||'' : '';

            meta.tdCls += ' ' + Ext.baseCSSPrefix + 'action-col-cell';
            for (i = 0; i < me.items.length; i++) {
                item = me.items[i];
                item.disable = Ext.Function.bind(me.disableAction, me, [i]);
                item.enable = Ext.Function.bind(me.enableAction, me, [i]);

                var dataString = '';
                if (item.action) {
                    dataString = ' data-' + me.dataSuffix + '="' + item.action + '" ';
                }
                //'" data-' + me.dataSuffix + '="' + item.action +

                v += '<img alt="' + (item.altText || me.altText) + '" src="' + (item.icon || Ext.BLANK_IMAGE_URL) +

                        '" class="' + Ext.baseCSSPrefix + 'action-col-icon ' + Ext.baseCSSPrefix + 'action-col-' + String(i) + ' ' + (item.disabled ? Ext.baseCSSPrefix + 'item-disabled' : ' ') + (item.iconCls || '') +
                        ' ' + (Ext.isFunction(item.getClass) ? item.getClass.apply(item.scope||me.scope||me, arguments) : (me.iconCls || '')) + '"' +
                        ((item.tooltip) ? ' data-qtip="' + item.tooltip + '"' : '') + dataString + ' />';
            }
            return v;
        };
    }
});
//<?php }} ?>