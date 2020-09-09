<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 10:28:54
         compiled from "/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:1043106395f5892462324c6-45112027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4bf5f8db940f2f8f6d624eb059890227b1abd94' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/controller/main.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1043106395f5892462324c6-45112027',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f589246245581_56430908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f589246245581_56430908')) {function content_5f589246245581_56430908($_smarty_tpl) {?>
/**
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
 * @subpackage Controller
 * @version    $Id$
 * @author shopware AG
 */

// 
// 
Ext.define('Shopware.apps.PluginManager.controller.Main', {
    extend: 'Ext.app.Controller',
    mainWindow: null,

    refs: [
        { ref: 'navigation', selector: 'plugin-manager-listing-window plugin-category-navigation' },
        { ref: 'localListing', selector: 'plugin-manager-local-plugin-listing' },
        { ref: 'updatePage', selector: 'plugin-manager-update-page' },
        { ref: 'listingWindow', selector: 'plugin-manager-listing-window' }
    ],

    snippets: {
        'checkingStoreMessage': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'checking_sbp','default'=>'Checking Shopware API...','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'checking_sbp','default'=>'Checking Shopware API...','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Prüfe Shopware Store...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'checking_sbp','default'=>'Checking Shopware API...','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    init: function() {
        var me = this,
            mask,
            viewport = Ext.ComponentQuery.query('viewport');

        if (viewport.length > 0) {
            mask = new Ext.LoadMask(viewport[0], { msg: this.snippets.checkingStoreMessage });
            mask.show();
        }

        Ext.Ajax.request({
            url: '<?php echo '/backend/PluginManager/pingStore';?>',
            method: 'POST',
            callback: function (operation, success, response) {
                var result = Ext.decode(response.responseText);

                Shopware.app.Application.sbpAvailable = result.success;

                if (me.subApplication.params) {
                    if (me.subApplication.params.displayPlugin) {
                        Shopware.app.Application.fireEvent('display-plugin-by-name', me.subApplication.params.displayPlugin);
                    }

                    if (me.subApplication.params.hidden) {
                        return;
                    }
                }

                if (!Shopware.app.Application.sbpAvailable) {
                    Shopware.Notification.createGrowlMessage('', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'sbp_not_available','default'=>'Shopware store not available, store features disabled.','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'sbp_not_available','default'=>'Shopware store not available, store features disabled.','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopware Store nicht verfügbar, Store Features wurden deaktiviert.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'sbp_not_available','default'=>'Shopware store not available, store features disabled.','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                }
                me.mainWindow = me.getView('list.Window').create();
                if (me.subApplication.action === 'ImportExport') {
                    return;
                }

                if (mask) {
                    mask.destroy();
                }
                me.mainWindow.show();
            }
        });

        me.control({
            'plugin-manager-listing-window': {
                'plugin-manager-loaded': me.afterPluginManagerLoaded
            },
            'plugin-manager-importexport-teaser-page{ isVisible(true) }': {
                'install-import-export-plugin': me.installImportExportPlugin,
                'install-migration-plugin': me.installMigrationPlugin
            }
        });

        Shopware.app.Application.on({
            'load-update-listing': me.loadUpdateListing,
            'enable-premium-plugins-mode': me.enablePremiumPluginsMode,
            'enable-expired-plugins-mode': me.enableExpiredPluginsMode,
            'enable-importexport-teaser-mode': me.enableImportExportTeaserMode,
            scope: me
        });

        this.callParent(arguments);
    },

    enablePremiumPluginsMode: function() {
        var me = this;

        me.getListingWindow().setWidth(1028);
        me.getListingWindow().setTitle('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'premium_plugins/title','default'=>'Try features','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'premium_plugins/title','default'=>'Try features','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Premium Plugins testen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'premium_plugins/title','default'=>'Try features','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
        me.getNavigation().hide();
    },

    enableExpiredPluginsMode: function() {
        var me = this,
            listingWindow = me.getListingWindow();

        listingWindow.setWidth(1028);
        listingWindow.setTitle('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins/title','default'=>'Expired plugins','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'expired_plugins/title','default'=>'Expired plugins','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Abgelaufene Plugins<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'expired_plugins/title','default'=>'Expired plugins','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
        me.getNavigation().hide();
    },

    enableImportExportTeaserMode: function() {
        var me = this,
            listingWindow = me.getListingWindow();

        listingWindow.setWidth(845);
        listingWindow.setHeight(550);
        listingWindow.setTitle('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'import_export_teaser/title','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'import_export_teaser/title','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Import / Export<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'import_export_teaser/title','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
        me.getNavigation().hide();
    },

    loadUpdateListing: function(callback) {
        var me = this,
            navigation = me.getNavigation(),
            updatePage = me.getUpdatePage();

        updatePage.listing.resetListing();

        updatePage.updateStore.load({
            callback: function(records, operation, success) {
                if (operation.response && operation.response.responseText) {
                    var result = Ext.JSON.decode(operation.response.responseText);
                    if (result.loginRecommended) {
                        Shopware.app.Application.fireEvent('open-login', function() {});
                    }
                }

                if (records) {
                    navigation.setUpdateCount(records.length);
                }

                if (Ext.isFunction(callback)) {
                    callback(records);
                }
            }
        });
    },

    afterPluginManagerLoaded: function() {
        var me = this,
            localListing = me.getLocalListing();

        localListing.getStore().on('load', function(operation) {
            try {
                var data = operation.proxy.reader.rawData;
                if (data.error) {
                    Shopware.Notification.createGrowlMessage('', data.error);
                }
            } catch (e) {
            }
        });

        if (!Shopware.app.Application.sbpAvailable) {
            var navController = me.subApplication.getController('Navigation');
            navController.displayLocalPluginPage();
        }

        if (me.subApplication.action === 'Listing' && me.subApplication.params.filter) {
            Shopware.app.Application.fireEvent('load-store-listing', me.subApplication.params.filter);
            return;
        }

        if (Ext.isDefined(me.subApplication.params) && Ext.isDefined(me.subApplication.params.openLogin) && me.subApplication.params.openLogin) {
            Shopware.app.Application.fireEvent('open-login', Ext.emptyFn);
        }

        if (me.subApplication.action === 'PremiumPlugins') {
            Shopware.app.Application.fireEvent('display-premium-plugins');
            return;
        }
        if (me.subApplication.action === 'ExpiredPlugins') {
            Shopware.app.Application.fireEvent('display-expired-plugins');
        }
        if (me.subApplication.action === 'ImportExport') {
            Shopware.app.Application.fireEvent('display-importexport-teaser');
            var plugin = Ext.create('Shopware.apps.PluginManager.model.Plugin', {
                technicalName: 'SwagMigration'
            });
            plugin.reload({
                callback: function(record) {
                    if (Ext.isDefined(record)) {
                        me.mainWindow.down('#migrationteaser').destroy();
                        me.mainWindow.setHeight(340);
                    }
                    me.mainWindow.show();
                }
            });

            return;
        }

        Ext.Function.defer(function () {
            localListing.getStore().load({
                callback: function(records) {
                    Shopware.app.Application.fireEvent('load-update-listing');
                }
            });
        }, 1000);
    },

    installImportExportPlugin: function() {
        var me = this,
            plugin = Ext.create('Shopware.apps.PluginManager.model.Plugin', {
                technicalName: 'SwagImportExport',
                iconPath: '/themes/Backend/ExtJs/backend/_resources/resources/themes/images/shopware-ui/importexport_plugin.png'
            });

        me.doInstallPlugin(plugin, function(response) {
            me.getListingWindow().close();
            Shopware.Notification.createStickyGrowlMessage({
                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'import_export_teaser/installation_successful','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'import_export_teaser/installation_successful','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Installation erfolgreich<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'import_export_teaser/installation_successful','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'import_export_teaser/reload_backend_message','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'import_export_teaser/reload_backend_message','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wir empfehlen das Backend jetzt neu zu laden.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'import_export_teaser/reload_backend_message','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            });
        });
    },

    installMigrationPlugin: function() {
        var me = this,
            plugin = Ext.create('Shopware.apps.PluginManager.model.Plugin', {
                technicalName: 'SwagMigration',
                iconPath: '/themes/Backend/ExtJs/backend/_resources/resources/themes/images/shopware-ui/migration_plugin.png'
            });

        me.doInstallPlugin(plugin, function(response) {
            me.getListingWindow().close();
            Shopware.Notification.createStickyGrowlMessage({
                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'import_export_teaser/installation_successful','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'import_export_teaser/installation_successful','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Installation erfolgreich<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'import_export_teaser/installation_successful','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'import_export_teaser/reload_backend_message','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'import_export_teaser/reload_backend_message','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wir empfehlen das Backend jetzt neu zu laden.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'import_export_teaser/reload_backend_message','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            });
        });
    },

    doInstallPlugin: function(plugin, callback) {
        var me = this;

        Shopware.app.Application.fireEvent('update-dummy-plugin', plugin, function(response) {
            if (response.success) {
                Shopware.app.Application.fireEvent('install-plugin', plugin, function(response) {
                    if (response.success) {
                        Shopware.app.Application.fireEvent('activate-plugin', plugin, function(response) {
                            Ext.callback(callback, me, [response]);
                        });
                    }
                }, me);
            }
        }, me);
    }
});
// 
<?php }} ?>