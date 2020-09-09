<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/component/Shopware.window.ExpiredPluginWarning.js" */ ?>
<?php /*%%SmartyHeaderCode:14330579045f58835834be41-67208201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e46639c7a5fe7ca29a7d3cb4133dd2bc5035b0e' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/component/Shopware.window.ExpiredPluginWarning.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14330579045f58835834be41-67208201',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835836e4c4_41466032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835836e4c4_41466032')) {function content_5f58835836e4c4_41466032($_smarty_tpl) {?>/**
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
 * @version    $Id$
 * @author shopware AG
 */
//

Ext.define('Shopware.window.ExpiredPluginWarning', {
    extend: 'Enlight.app.Window',
    autoScroll: true,
    layout: 'fit',
    height: 430,
    width: 870,
    autoShow: true,
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_popup/title','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'expired_plugins_popup/title','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin Warnung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'expired_plugins_popup/title','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    footerButton: false,

    initComponent: function() {
        var me = this;

        me.items = [
            {
                xtype: 'form',
                items: [me.createContentPage()],
                dockedItems: [{
                    xtype: 'toolbar',
                    dock: 'bottom',
                    ui: 'shopware-ui',
                    cls: 'shopware-toolbar',
                    items: me.getWindowButtons()
                }]
            },
        ];

        me.callParent(arguments);
    },

    createContentPage: function () {
        return {
            xtype: 'container',
            html: '<style>.plugin-window { color: #475C6A; } .plugin-window h2 { color: #495B67; font-weight: bold; font-size: 24px; margin-bottom: 12px } .plugin-window p { margin-bottom: 10px; line-height: 140%;} .plugin-window img { width: calc(100% - 100px); padding: 50px; margin: 40px 0 0 -30px; position: absolute; top: 50%; left: 50%; transform: translateX(-50%); } .plugin-window .bar { width: 50%; float: left; position: relative; } .plugin-window .bar:last-child { margin-left: 50%; } .plugin-window strong { font-weight: bold; } .plugin-window ul li { list-style: inherit; margin: 3px 0}</style><div class="plugin-window"><div class="bar"><img src="' + this.getImage() + '"></div><div class="bar"><div style="margin: 30px 0 0 -40px;">' + this.getText() + '</div></div></div>'
        }
    },

    getImage: function() {
        return '/themes/Backend/ExtJs/backend/_resources/images/plugin_manager/warning.svg';
    },

    getText: function() {
        return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_popup/content','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'expired_plugins_popup/content','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<h2>Warnung!</h2><p>Für mindestens eines Deiner eingesetzten Plugins ist das Nutzungsrecht abgelaufen. Hintergrund kann sein:<ul><li>Ablauf der Plugin-Testphase (30 Tage), Plugin nicht aus dem Plugin-Manager gelöscht</li><li>Plugin-Miete beendet, Plugin nicht aus dem Plugin-Manager gelöscht</li><li>Plugin-Subscription nicht verlängert, dennoch ein Update des Plugins installiert</li><li>Änderung der Domain im Backend ohne Domain-Umzug im Shopware-Account</li><li>Plugin auf einer anderen Domain in Deinem Shopware Account registriert</li></ul></p><p>Kaufe/Miete betreffende Plugins über Deinen <a href="https://account.shopware.com/shops/shops" target="_blank">Shopware Account</a> um bestehende Lizenzverletzungen zu beheben und rechtliche Konsequenzen zu vermeiden.</p><p>Nutzt Du das Plugin nicht mehr, dann lösche es vollstândig aus dem Plugin-Manager. Shopware behält sich vor, installierte Plugins zu berechnen.</p><p><strong>Weitere Unterstützung findest Du in unseren <a href="https://docs.shopware.com/de/shopware-5-de/tutorials-und-faq/shopware-plugin-lizenzen-faq" target="_blank">FAQ</a></strong></p><p>Dein Shopware-Team</p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'expired_plugins_popup/content','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    },

    getWindowButtons: function() {
        var me = this;

        return [
            '->',
            {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_popup/cancel','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'expired_plugins_popup/cancel','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Schließen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'expired_plugins_popup/cancel','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                scope: me,
                cls: 'secondary',
                handler: function () {
                    me.destroy();
                }
            },
            {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_popup/goToPluginManager','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'expired_plugins_popup/goToPluginManager','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zum Plugin-Manager<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'expired_plugins_popup/goToPluginManager','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                scope: me,
                cls: 'primary',
                handler: function () {
                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.PluginManager',
                        action: 'ExpiredPlugins'
                    });

                    me.destroy();
                }
            }
        ];
    }
});
<?php }} ?>