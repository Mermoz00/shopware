<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 10:28:54
         compiled from "/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/detail/actions.js" */ ?>
<?php /*%%SmartyHeaderCode:19810267205f5892461b6e06-00052882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e71a964657af064123baf41d8e0540e02b440644' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/detail/actions.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19810267205f5892461b6e06-00052882',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5892461bfb56_21097900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5892461bfb56_21097900')) {function content_5f5892461bfb56_21097900($_smarty_tpl) {?>/**
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
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.detail.Actions', {

    extend: 'Ext.container.Container',

    cls: 'plugin-meta-data-container-actions',

    defaults: {
        minWidth: 270,
        margin: '15 10 0'
    },

    layout: 'vbox',

    margin: '10 0',

    padding: '0 0 10',

    mixins: {
        events: 'Shopware.apps.PluginManager.view.PluginHelper'
    },

    initComponent: function() {
        var me = this,
            items = [],
            button;

        if (me.plugin.allowUpdate()) {
            button = Ext.create('PluginManager.container.Container', {
                html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'install_update','default'=>'Install update','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'install_update','default'=>'Install update','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Update installieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'install_update','default'=>'Install update','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 (v ' + me.plugin.get('availableVersion') + ')',
                cls: 'plugin-manager-action-button primary',
                handler: function() {
                    me.updatePluginEvent(me.plugin);
                }
            });
            items.push(button);
        }

        if (me.plugin.allowDummyUpdate()) {
            button = Ext.create('PluginManager.container.Container', {
                html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'install','default'=>'Install','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'install','default'=>'Install','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Installieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'install','default'=>'Install','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'plugin-manager-action-button primary',
                handler: function() {
                    me.updateDummyPluginEvent(me.plugin);
                }
            });
            items.push(button);
        }

        if (me.plugin.allowInstall()) {
            button = Ext.create('PluginManager.container.Container', {
                html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'install','default'=>'Install','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'install','default'=>'Install','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Installieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'install','default'=>'Install','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'plugin-manager-action-button primary',
                handler: function() {
                    me.installPluginEvent(me.plugin);
                }
            });
            items.push(button);
        }

        if (me.plugin.allowActivate()) {
            button = Ext.create('PluginManager.container.Container', {
                html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'activate','default'=>'Activate','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'activate','default'=>'Activate','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktivieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'activate','default'=>'Activate','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'plugin-manager-action-button primary',
                handler: function() {
                    me.activatePluginEvent(me.plugin);
                }
            });

            items.push(button);
        }

        if (me.plugin.allowReinstall()) {
            button = Ext.create('PluginManager.container.Container', {
                html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'reinstall','default'=>'Reinstall','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'reinstall','default'=>'Reinstall','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Neu installieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'reinstall','default'=>'Reinstall','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'plugin-manager-action-button',
                handler: function() {
                    me.reinstallPluginEvent(me.plugin);
                }
            });
            items.push(button);
        }

        if (me.plugin.allowUninstall()) {
            button = Ext.create('PluginManager.container.Container', {
                html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'uninstall','default'=>'Uninstall','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'uninstall','default'=>'Uninstall','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deinstallieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'uninstall','default'=>'Uninstall','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'plugin-manager-action-button',
                handler: function() {
                    me.uninstallPluginEvent(me.plugin);
                }
            });
            items.push(button);
        }

        if (me.plugin.allowDeactivate()) {
            button = Ext.create('PluginManager.container.Container', {
                html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'deactivate','default'=>'Deactivate','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'deactivate','default'=>'Deactivate','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deaktivieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'deactivate','default'=>'Deactivate','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'plugin-manager-action-button',
                handler: function() {
                    me.deactivatePluginEvent(me.plugin);
                }
            });
            items.push(button);
        }

        if (me.plugin.allowDelete()) {
            button = Ext.create('PluginManager.container.Container', {
                html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete','default'=>'Delete','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'delete','default'=>'Delete','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Löschen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'delete','default'=>'Delete','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'plugin-manager-action-button',
                handler: function() {
                    me.deletePluginEvent(me.plugin);
                }
            });
            items.push(button);
        }

        me.items = items;

        me.callParent(arguments);
    }
});
//<?php }} ?>