<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 10:28:54
         compiled from "/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/window.js" */ ?>
<?php /*%%SmartyHeaderCode:15429518065f589246166128-29239329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ab5df1a1d53a4517f90deca9168b79606e5dd4b' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/window.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15429518065f589246166128-29239329',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58924616a6c6_17594900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58924616a6c6_17594900')) {function content_5f58924616a6c6_17594900($_smarty_tpl) {?>/**
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
 * @subpackage List
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.list.Window', {
    extend: 'Enlight.app.Window',

    layout: 'border',
    cls: 'plugin-manager-window listing-window',
    alias: 'widget.plugin-manager-listing-window',

    height: '90%',
    width: 1283,

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title','default'=>'Plugin Manager','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'title','default'=>'Plugin Manager','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin Manager<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'title','default'=>'Plugin Manager','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    initComponent: function() {
        var me = this;

        me.items = [
            me.createNavigation(),
            me.createCenterPanel()
        ];

        me.callParent(arguments);

        me.on('afterrender', function() {
            me.fireEvent('plugin-manager-loaded');
        });
    },

    createCenterPanel: function() {
        var me = this;

        me.cards = [
            me.createHomePage(),
            me.createLocalPluginPage(),
            me.createPluginUpdatesPage(),
            me.createListingPage(),
            me.createAccountPage(),
            me.createLicencePage(),
            me.createPremiumPluginsPage(),
            me.createExpiredPluginsPage(),
            me.createImportExportTeaserPage()
        ];

        me.centerPanel = Ext.create('Ext.container.Container', {
            name: 'card-container',
            region: 'center',
            layout: 'card',
            items: me.cards
        });

        return me.centerPanel;
    },

    createNavigation: function() {
        this.navigation = Ext.create('Shopware.apps.PluginManager.view.list.Navigation', {
            region: 'west',
            width: 255
        });

        return this.navigation;
    },

    createHomePage: function() {
        this.homePage = Ext.create('Shopware.apps.PluginManager.view.list.HomePage', {
            cardIndex: 0
        });
        return this.homePage;
    },

    createLocalPluginPage: function() {
        var me = this;

        me.localPluginStore = Ext.create('Shopware.apps.PluginManager.store.LocalPlugin');

        me.localPluginListing = Ext.create('Shopware.apps.PluginManager.view.list.LocalPluginListingPage', {
            store: me.localPluginStore,
            subApp: this.subApp,
            flex: 1
        });

        this.localPluginPage = Ext.create('Ext.container.Container', {
            layout: { type: 'hbox', align: 'stretch' },
            items: [ me.localPluginListing ],
            cardIndex: 1,
            hideContent: function() {
                me.localPluginListing.hide();
            },
            displayContent: function() {
                me.localPluginListing.show();
            }
        });

        return this.localPluginPage;
    },

    createPluginUpdatesPage: function() {
        var me = this;

        me.updateListing = Ext.create('Shopware.apps.PluginManager.view.list.UpdatePage');

        me.pluginUpdatesPage = Ext.create('Ext.container.Container', {
            layout: { type: 'hbox', align: 'stretch' },
            items: [ me.updateListing ],
            cardIndex: 2
        });

        return me.pluginUpdatesPage;
    },

    createListingPage: function() {
        this.listingPage = Ext.create('Shopware.apps.PluginManager.view.list.StoreListingPage', {
            cardIndex: 3
        });
        return this.listingPage;
    },

    createAccountPage: function() {
        this.accountPage = Ext.create('Ext.container.Container', {
            html: 'AccountPage',
            cardIndex: 4
        });
        return this.accountPage;
    },

    createLicencePage: function() {

        this.licenceStore = Ext.create('Shopware.apps.PluginManager.store.Licence');

        this.licencePage = Ext.create('Shopware.apps.PluginManager.view.list.LicencePage', {
            cardIndex: 5,
            store: this.licenceStore
        });

        return this.licencePage;
    },

    createPremiumPluginsPage: function() {
        this.createPremiumPluginPage = Ext.create('Shopware.apps.PluginManager.view.list.PremiumPluginsPage', {
            cardIndex: 6
        });

        return this.createPremiumPluginPage;
    },

    createExpiredPluginsPage: function() {
        this.createExpiredPluginsPage = Ext.create('Shopware.apps.PluginManager.view.list.ExpiredPluginsPage', {
           cardIndex: 7
        });

        return this.createExpiredPluginsPage;
    },

    createImportExportTeaserPage: function() {
        this.importExportTeaserPage = Ext.create('Shopware.apps.PluginManager.view.list.ImportExportTeaserPage', {
            cardIndex: 8
        });

        return this.importExportTeaserPage;
    }
});
//
<?php }} ?>