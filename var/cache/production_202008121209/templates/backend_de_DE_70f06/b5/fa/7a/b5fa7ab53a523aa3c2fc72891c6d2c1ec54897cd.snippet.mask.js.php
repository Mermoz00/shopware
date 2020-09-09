<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 10:28:54
         compiled from "/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/loading/mask.js" */ ?>
<?php /*%%SmartyHeaderCode:12373067695f5892461c3689-84316421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5fa7ab53a523aa3c2fc72891c6d2c1ec54897cd' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/loading/mask.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12373067695f5892461c3689-84316421',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5892461c7d19_21667537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5892461c7d19_21667537')) {function content_5f5892461c7d19_21667537($_smarty_tpl) {?>/**
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
 * @package    PluginManager
 * @subpackage Loading
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.loading.Mask', {
    extend: 'Ext.window.Window',

    modal: true,
    cls: 'plugin-manager-loading-mask',

    layout: {
        type: 'hbox',
        align: 'stretch'
    },
    bodyPadding: 20,
    header: false,
    width: 550,

    initComponent: function() {
        var me = this;

        me.items = [
            me.createIcon(),
            {
                xtype: 'container',
                flex: 1,
                layout: {
                    type: 'vbox',
                    align: 'stretch'
                },
                padding: '0 20',
                items: [
                    me.createHeadline(),
                    me.createDescription(),
                    me.createLoadingIndicator()
                ]
            }
        ];

        me.callParent(arguments);
    },

    createIcon: function() {
        var me = this, path = '';

        if (!me.plugin.get('iconPath')) {
            path = '/themes/Backend/ExtJs/backend/_resources/resources/themes/images/shopware-ui/plugin_manager/default_icon.png';
        } else {
            path = me.plugin.get('iconPath');
        }

        return Ext.create('Ext.Component', {
            width: 128,
            height: 128,
            html: '<img src="'+ path +'" />'
        });
    },

    createHeadline: function() {
        var me = this;

        return Ext.create('Ext.Component', {
            cls: 'headline',
            html: me.plugin.get('label')
        });
    },

    createDescription: function() {
        var me = this;

        return Ext.create('Ext.Component', {
            flex: 1,
            html: me.description
        });
    },

    createLoadingIndicator: function() {
        var me = this;

        me.loadingIndicator = Ext.create('Ext.Component', {
            width: 60,
            height: 60,
            cls: 'plugin-manager-loading-indicator-wrapper',
            html: '<div class="plugin-manager-loading-indicator"></div>'
        });

        return me.loadingIndicator;
    }
});
//<?php }} ?>