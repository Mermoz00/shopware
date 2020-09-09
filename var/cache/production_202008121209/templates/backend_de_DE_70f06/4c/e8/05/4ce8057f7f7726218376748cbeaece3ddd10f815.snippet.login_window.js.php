<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 10:28:54
         compiled from "/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/account/login_window.js" */ ?>
<?php /*%%SmartyHeaderCode:12845314305f5892461dd005-65534830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ce8057f7f7726218376748cbeaece3ddd10f815' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/account/login_window.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12845314305f5892461dd005-65534830',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5892461e74e6_06528500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5892461e74e6_06528500')) {function content_5f5892461e74e6_06528500($_smarty_tpl) {?>/**
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
 * @subpackage Account
 * @version    $Id$
 * @author shopware AG
 */
// 

// 
Ext.define('Shopware.apps.PluginManager.view.account.LoginWindow', {
    extend: 'Ext.window.Window',
    modal: true,

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets: {
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'account'/'title','default'=>'Shopware ID','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'account'/'title','default'=>'Shopware ID','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopware ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'account'/'title','default'=>'Shopware ID','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        descriptionMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'account'/'description_message','default'=>'Please login with your existing Shopware ID or register your shop, to access the complete functional range of the PluginManager. <br>The Shopware ID is your username and will give you access to your Shopware account and our Community Store, the central marketplace for all shopware extensions.','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'account'/'description_message','default'=>'Please login with your existing Shopware ID or register your shop, to access the complete functional range of the PluginManager. <br>The Shopware ID is your username and will give you access to your Shopware account and our Community Store, the central marketplace for all shopware extensions.','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bitte logge Dich mit Deiner bestehenden Shopware ID ein oder registriere Deinen Shop, um alle Funktionen des Plugin Managers nutzen zu können.<br>Die Shopware ID ist Dein Benutzername für die Anmeldung im Shopware Account und auch im Community Store, unserem zentralen Marktplatz für alle Shopware-Erweiterungen.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'account'/'description_message','default'=>'Please login with your existing Shopware ID or register your shop, to access the complete functional range of the PluginManager. <br>The Shopware ID is your username and will give you access to your Shopware account and our Community Store, the central marketplace for all shopware extensions.','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        registrationInfoTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'account'/'registration_info_title','default'=>'Register','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'account'/'registration_info_title','default'=>'Register','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Registrierung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'account'/'registration_info_title','default'=>'Register','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        registrationInfoMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'account'/'registration_info_message','default'=>'You don\\\'t have a Shopware ID yet?','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'account'/'registration_info_message','default'=>'You don\\\'t have a Shopware ID yet?','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Du hast noch keine Shopware ID?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'account'/'registration_info_message','default'=>'You don\\\'t have a Shopware ID yet?','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        registrationInfoButtonLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'account'/'registration_info_button_label','default'=>'Register now','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'account'/'registration_info_button_label','default'=>'Register now','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jetzt registrieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'account'/'registration_info_button_label','default'=>'Register now','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    cls: 'plugin-manager-login-window',

    header: false,

    minWidth: 800,
    bodyPadding: 40,

    initComponent: function () {
        var me = this;

        me.items = [
            me.createHeadline(),
            me.createDescriptionText(),
            me.createLayouts()
        ];

        me.callParent(arguments);
    },

    createLayouts: function () {
        var me = this;

        return {
            border: false,
            layout: {
                type: 'hbox',
                align: 'stretch'
            },
            anchor: '100%',
            items: [
                me.createLoginPanel(),
                me.createRegistrationInfoPanel()
            ]
        };
    },

    createHeadline: function () {
        var me = this;

        return Ext.create('Ext.container.Container', {
            border: false,
            layout: 'hbox',
            anchor: '100%',
            cls: 'headline-container',
            items: [
                Ext.create('Ext.Component', {
                    html: me.snippets.title,
                    width: 680,
                    cls: 'headline'
                }),
                Ext.create('PluginManager.container.Container', {
                    html: 'X',
                    cls: 'headline-close',
                    handler: function() {
                        Shopware.app.Application.fireEvent('destroy-login', me, true);
                    }
                })
            ]
        });
    },

    createDescriptionText: function() {
        var me = this;
        return {
            html: me.snippets.descriptionMessage,
            margin: '0 0 20 0',
            cls: 'description-text',
            width: 720,
            border: false
        };
    },

    createLoginPanel: function () {
        var me = this;

        return Ext.create('Shopware.apps.PluginManager.view.account.Login', {
            callback: me.callback,
            margin: '0 25 0 0'
        });
    },

    createRegistrationInfoPanel: function () {
        var me = this;

        var button = Ext.create('Ext.container.Container', {
            cls: 'action-buttons',
            layout: {
                type: 'vbox',
                align: 'left'
            },
            padding: '0 0 10 0',
            items: [
                Ext.create('PluginManager.container.Container', {
                    html: me.snippets.registrationInfoButtonLabel,
                    cls: 'plugin-manager-action-button primary',
                    handler: function () {
                        window.open('https://account.shopware.com/register', '_blank', 'noopener');
                    }
                })
            ]
        });

        return Ext.create('Ext.container.Container', {
            width: 380,
            border: false,
            cls: 'plugin-manager-login-window',
            padding: '0 0 0 60',
            items: [
                {
                    border: false,
                    margin: '22 0 20 0',
                    html: '<span class="section-title">' + me.snippets.registrationInfoTitle + '</span>'
                },
                {
                    border: false,
                    margin: '22 0 10 0',
                    cls: 'description-text',
                    style: {
                        borderTop: 'unset',
                        marginTop: 'unset',
                        paddingTop: 'unset',
                    },
                    html: '<p>' + me.snippets.registrationInfoMessage + '</p>'
                },
                button
            ]
        });
    }

});
// 
<?php }} ?>