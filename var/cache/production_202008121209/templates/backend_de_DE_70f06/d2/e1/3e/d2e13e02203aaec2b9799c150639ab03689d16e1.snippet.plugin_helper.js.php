<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 10:28:54
         compiled from "/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/plugin_helper.js" */ ?>
<?php /*%%SmartyHeaderCode:6730894705f5892460687a9-57354239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2e13e02203aaec2b9799c150639ab03689d16e1' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/plugin_helper.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6730894705f5892460687a9-57354239',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58924608f302_42002277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58924608f302_42002277')) {function content_5f58924608f302_42002277($_smarty_tpl) {?>/**
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
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.PluginHelper', {

    displayPluginEvent: function(record, callback) {
        Shopware.app.Application.fireEvent(
            'display-plugin',
            record,
            callback
        );
    },

    getPluginReloadedEventName: function(plugin) {
        return 'plugin-reloaded-' + plugin.get('technicalName');
    },

    getPluginBoughEventName: function(plugin) {
        return 'plugin-bought-' + plugin.get('technicalName');
    },

    registerConfigRequiredEvent: function(record) {
        var me = this;

        var event = me.getPluginReloadedEventName(record);
        Shopware.app.Application.on(event, function(plugin) {
            if (plugin.get('formId') > 0) {
                me.displayPluginEvent(plugin);
            }
        }, me, { single: true });
    },

    downloadFreePluginEvent: function(record, price) {
        var me = this;

        Shopware.app.Application.fireEvent(
            'download-free-plugin',
            record,
            price,
            function() {
                me.fireReloadEvent(record);
            }
        );
    },

    buyPluginEvent: function(record, price) {
        var me = this;

        Shopware.app.Application.fireEvent(
            'buy-plugin',
            record,
            price,
            function() {
                me.fireReloadEvent(record);
            }
        );
    },

    rentPluginEvent: function(record, price) {
        var me = this;

        Shopware.app.Application.fireEvent(
            'rent-plugin',
            record,
            price,
            function() {
                me.fireReloadEvent(record);
            }
        );
    },

    pluginBoughtEvent: function(record) {
        var me = this;

        var event = me.getPluginBoughEventName(record);

        Shopware.app.Application.fireEvent(
            event,
            record
        );
    },

    updateDummyPluginEvent: function(record) {
        var me = this;

        Shopware.app.Application.fireEvent(
            'update-dummy-plugin',
            record,
            function() {
                me.firePluginEvent('install-plugin', record);
            }
        );
    },

    updatePluginEvent: function(record) {
        this.firePluginEvent('update-plugin', record, Ext.emptyFn);
    },

    executePluginUpdateEvent: function(record, callback) {
        this.firePluginEvent('execute-plugin-update', record, callback);
    },

    installPluginEvent: function(record) {
        this.firePluginEvent('install-plugin', record);
    },

    uninstallPluginEvent: function(record) {
        this.firePluginEvent('uninstall-plugin', record);
    },

    reinstallPluginEvent: function(record) {
        this.firePluginEvent('reinstall-plugin', record);
    },

    activatePluginEvent: function(record) {
        this.firePluginEvent('activate-plugin', record);
    },

    deactivatePluginEvent: function(record) {
        this.firePluginEvent('deactivate-plugin', record);
    },

    deletePluginEvent: function(record) {
        var me = this;

        Shopware.app.Application.fireEvent('delete-plugin', record, function() {
            me.removeLocalData(record);
            Shopware.app.Application.fireEvent(me.getPluginReloadedEventName(record), record);
            Shopware.app.Application.fireEvent('plugin-reloaded', record);
        });
    },

    deleteExpiredPluginEvent: function(record, pluginEntry) {
        var me = this;

        Shopware.app.Application.fireEvent('expired-delete-plugin', record, function() {
            me.removeLocalData(record);
            Shopware.app.Application.fireEvent(me.getPluginReloadedEventName(record), record);
            Shopware.app.Application.fireEvent('plugin-reloaded', record);
            pluginEntry.destroy();
        });
    },

    requestPluginTestVersionEvent: function(record, price) {
        var me = this;

        Shopware.app.Application.fireEvent(
            'request-plugin-test-version',
            record,
            price,
            function() {
                me.fireReloadEvent(record);
            }
        );
    },

    reloadPlugin: function(plugin, callback) {
        var me = this;

        plugin.reload({
            callback: function(updated) {
                var merged = me.mergePlugin(plugin, updated.data);
                var event = me.getPluginReloadedEventName(plugin);

                Shopware.app.Application.fireEvent(event, merged);
                Shopware.app.Application.fireEvent('plugin-reloaded', merged);

                if (Ext.isFunction(callback)) {
                    callback(merged);
                }
            }
        });
    },

    mergePlugin: function(plugin, data) {
        var whiteList = [
            'active', 'installationDate', 'version', 'localDescription',
            'capabilityInstall', 'capabilityUpdate',
            'capabilityActivate', 'id', 'formId', 'localIcon'
        ];

        Ext.each(whiteList, function(property) {
            if (data.hasOwnProperty(property)) {
                plugin.set(property, data[property]);
            }
        });

        plugin.set('groupingState', null);

        return plugin;
    },

    removeLocalData: function(record) {
        record.set('id', null);
        record.set('active', false);
        record.set('version', null);
        record.set('capabilityInstall', false);
        record.set('capabilityUpdate', false);
        record.set('capabilityActivate', false);
        record.set('formId', false);
        record.set('localIcon', false);
    },

    fireRefreshAccountData: function(response) {
        Shopware.app.Application.fireEvent(
            'refresh-account-data',
            response
        );
    },

    firePluginEvent: function(event, record, callback) {
        var me = this;

        Shopware.app.Application.fireEvent(
            event,
            record,
            function() {
                me.fireReloadEvent(record, callback);
            }
        );
    },

    fireReloadEvent: function(record, callback) {
        var me = this;

        Shopware.app.Application.fireEvent(
            'reload-plugin',
            record,
            callback
        );
    },

    sendAjaxRequest: function(url, params, callback, errorCallback, timeout) {
        var me = this;

        Ext.Ajax.request({
            url: url,
            method: 'POST',
            params: params,
            timeout: Ext.isNumber(timeout) ? timeout : 30000,
            success: function(operation, opts) {
                var response = Ext.decode(operation.responseText);

                if (response.success === false) {
                    if (Ext.isFunction(errorCallback)) {
                        errorCallback(response);
                    } else {
                        me.displayErrorMessage(response);
                        me.hideLoadingMask();
                    }
                    return;
                }

                callback(response);
            }
        });
    },

    createDownloadMask: function(plugin, download, callback) {
        var icon;

        if (!plugin.get('iconPath')) {
            icon = '/themes/Backend/ExtJs/backend/_resources/resources/themes/images/shopware-ui/plugin_manager/default_icon.png';
        } else {
            icon = plugin.get('iconPath');
        }

        return Ext.create('Shopware.apps.PluginManager.view.components.DownloadWindow', {
            headline: plugin.get('label'),
            description: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'execute_plugin_download','default'=>'Plugin is being downloaded','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'execute_plugin_download','default'=>'Plugin is being downloaded','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin wird heruntergeladen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'execute_plugin_download','default'=>'Plugin is being downloaded','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            download: download,
            icon: icon,
            callback: callback
        });
    },

    displayLoadingMask: function(plugin, description, autoTimeout) {
        var me = this;

        me.hideLoadingMask();

        Shopware.app.Application.loadingMask = Ext.create('Shopware.apps.PluginManager.view.loading.Mask', {
            plugin: plugin,
            description: description
        });

        if (autoTimeout === false) {
            Shopware.app.Application.loadingMask.show();
            return;
        }

        Ext.Function.defer(function(deferPlugin) {
            if (!Shopware.app.Application.loadingMask) {
                return;
            }

            var loadingPlugin = Shopware.app.Application.loadingMask.plugin;
            if (loadingPlugin.get('technicalName') !== deferPlugin.get('technicalName')) {
                return;
            }
            me.hideLoadingMask();
        }, 15000, this, [plugin]);

        Shopware.app.Application.loadingMask.show();
    },

    hideLoadingMask: function() {
        if (Shopware.app.Application.loadingMask) {
            Shopware.app.Application.loadingMask.destroy();
        }
    },

    confirmMessage: function(title, message, callback, declineCallback) {
        var me = this;

        Ext.MessageBox.confirm(title, message, function (apply) {
            if (apply !== 'yes') {
                me.hideLoadingMask();

                if (Ext.isFunction(declineCallback)) {
                     declineCallback();
                }

                return;
            }
            callback();
        });
    },

    displayErrorMessage: function(response, callback) {
        var message = response.message;

        Shopware.Notification.createStickyGrowlMessage({
            title: 'Error',
            text: message,
            width: 350
        });

        callback = typeof callback === 'function' && callback || function() {};

        if (response.hasOwnProperty('authentication') && response.authentication) {
            Shopware.app.Application.fireEvent('open-login', callback);
        }

        this.hideLoadingMask();
    },

    getPriceByType: function(prices, type) {
        var me = this, price = null;

        prices.each(function(item) {
            if (item.get('type') == type) {
                price = item;
            }
        });
        return price;
    },

    formatDate: function(date) {
        var value = date.replace(' ', 'T');

        value += '+00:00';
        value = new Date(value);
        value = new Date((value.getTime() + (value.getTimezoneOffset() * 60 * 1000)));

        return value;
    },

    getTextForPriceType: function(type) {
        if (type == 'buy') {
            return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'buy_version','default'=>'Purchase version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'buy_version','default'=>'Purchase version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kaufversion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'buy_version','default'=>'Purchase version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        }

        if (type == 'rent') {
            return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rent_version','default'=>'Rent version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rent_version','default'=>'Rent version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mietversion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rent_version','default'=>'Rent version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        }

        if (type == 'test') {
            return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'test_version','default'=>'Test version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'test_version','default'=>'Test version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Testversion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'test_version','default'=>'Test version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }

        if (type == 'free') {
            return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'free_version','default'=>'Free version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'free_version','default'=>'Free version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kostenlose Version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'free_version','default'=>'Free version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        }

        if (type == 'unlicensed') {
            return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'unlicensed','default'=>'Unlicensed version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'unlicensed','default'=>'Unlicensed version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nicht lizenziert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'unlicensed','default'=>'Unlicensed version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }

        return null;
    }
});
//<?php }} ?>