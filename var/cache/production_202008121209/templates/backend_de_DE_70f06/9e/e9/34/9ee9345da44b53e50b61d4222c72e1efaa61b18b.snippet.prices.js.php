<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 10:28:54
         compiled from "/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/detail/prices.js" */ ?>
<?php /*%%SmartyHeaderCode:10785963285f589246183df5-25242045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ee9345da44b53e50b61d4222c72e1efaa61b18b' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/detail/prices.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10785963285f589246183df5-25242045',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5892461985a4_83014362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5892461985a4_83014362')) {function content_5f5892461985a4_83014362($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.PluginManager.view.detail.Prices', {
    extend: 'PluginManager.tab.Panel',
    cls: 'store-plugin-detail-prices-tab shopware-plugin-manager-tab',
    margin: '10 0',

    mixins: {
        events: 'Shopware.apps.PluginManager.view.PluginHelper'
    },

    tabIndex: { },

    initComponent: function() {
        var me = this,
            items = [],
            index = 0,
            buyPrice = me.getPriceByType(me.prices, 'buy'),
            rentPrice = me.getPriceByType(me.prices, 'rent'),
            testPrice = me.getPriceByType(me.prices, 'test'),
            freePrice = me.getPriceByType(me.prices, 'free'),
            redirectToStore = me.plugin.get('redirectToStore'),
            lowestPrice = me.plugin.get('lowestPrice'),
            price;

        if (redirectToStore) {
            price = me.getLowestPrice({
                lowestPrice: lowestPrice,
                buyPrice: buyPrice,
                freePrice: freePrice
            });

            items.push(me.createCommunityTab(price));
            me.tabIndex['bye'] = index;
            index++;

            // In this case we only want to add the "test tab" if it exists.
            // For this reason set the other prices to "null"
            buyPrice = null;
            rentPrice = null;
            freePrice = null;
        }

        if (buyPrice) {
            items.push(me.createBuyTab(buyPrice));
            me.tabIndex['buy'] = index;
            index++;
        }
        if (rentPrice) {
            items.push(me.createRentTab(rentPrice));
            me.tabIndex['rent'] = index;
            index++;
        }
        if (testPrice) {
            items.push(me.createTestTab(testPrice));
            me.tabIndex['test'] = index;
            index++;
        }
        if (freePrice) {
            items.push(me.createFreeTab(freePrice));
            me.tabIndex['free'] = index;
            index++;
        }
        if (items.length <= 0 && me.plugin.get('useContactForm')) {
            items.push(me.createContactTab());
            me.tabIndex['contact'] = index;
            index++;
        }

        me.items = items;

        me.callParent(arguments);
    },

    /**
     * @param { Shopware.apps.PluginManager.model.Price } price
     * @returns { Ext.container.Container }
     */
    createCommunityTab: function(price) {
        var me = this,
            items = [];

        items.push({
            xtype: 'plugin-manager-container-container',
            cls: 'button buy',
            html: '<div class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'show/in/community/store','default'=>'Show in store','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'show/in/community/store','default'=>'Show in store','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Im Store ansehen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'show/in/community/store','default'=>'Show in store','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>',
            handler: Ext.bind(me.onShowInCommunityStore, me)
        });

        items.push({
            xtype: 'component',
            cls: 'price',
            html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'from/price/prefix','default'=>'from','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'from/price/prefix','default'=>'from','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ab<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'from/price/prefix','default'=>'from','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 ' + me.formatPrice(price.get('price')) + ' *'
        });

        if (price.get('subscription')) {
            items.push({
                xtype: 'component',
                cls: 'subscription',
                html: '<div class="icon">U</div>' +
                '<div class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'subscription_info','default'=>'Incl. updates for 12 Months (subscription)','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'subscription_info','default'=>'Incl. updates for 12 Months (subscription)','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Inkl. Updates für 12 Monate (Subscription)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'subscription_info','default'=>'Incl. updates for 12 Months (subscription)','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>'
            });
        }

        return Ext.create('Ext.container.Container', {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'community/store/tab/header','default'=>'Community store','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'community/store/tab/header','default'=>'Community store','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Community Store<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'community/store/tab/header','default'=>'Community store','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'tab buy-tab',
            height: 110,
            items: items
        });
    },

    /**
     * This is the event handler for the buy button. If the buy button is
     * clicked open a new window with the given URL to the Store.
     */
    onShowInCommunityStore: function() {
        window.open(this.plugin.get('link'));
    },

    /**
     * @param { object } prices
     */
    getLowestPrice: function(prices) {
        if (prices.lowestPrice) {
            return Ext.create('Shopware.apps.PluginManager.model.Price', {
                price: prices.lowestPrice,
                subscription: prices.buyPrice && prices.buyPrice.get('subscription') ? prices.buyPrice.get('subscription') : false,
                type: 'buy'
            });
        }

        if (prices.freePrice) {
            return prices.freePrice;
        }

        if (prices.buyPrice) {
            return prices;
        }

        return Ext.create('Shopware.apps.PluginManager.model.Price', {
            price: 0,
            subscription: false,
            type: 'free'
        });
    },

    createContactTab: function() {
        var me = this, items = [];

        items.push({
            xtype: 'plugin-manager-container-container',
            cls: 'button contact',
            html: '<div class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'contact_text','default'=>'Contact producer','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'contact_text','default'=>'Contact producer','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hersteller kontaktieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'contact_text','default'=>'Contact producer','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>',
            handler: function() {
                var link = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'contact_link','default'=>'http://store.shopware.com/en/contact-producer','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'contact_link','default'=>'http://store.shopware.com/en/contact-producer','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
http://store.shopware.com/hersteller-kontaktieren/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'contact_link','default'=>'http://store.shopware.com/en/contact-producer','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
?technicalName=' + me.plugin.get('technicalName');
                window.open(link);
            }
        });

        return Ext.create('Ext.container.Container', {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'contact_version','default'=>'Contact','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'contact_version','default'=>'Contact','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kontaktieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'contact_version','default'=>'Contact','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'tab',
            height: 110,
            items: items
        });
    },

    createFreeTab: function(price) {
        var me = this, items = [];

        items.push({
            xtype: 'plugin-manager-container-container',
            cls: 'button free',
            html: '<div class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'download_now','default'=>'Download now','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'download_now','default'=>'Download now','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jetzt herunterladen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'download_now','default'=>'Download now','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>',
            handler: function() {
                me.downloadFreePluginEvent(me.plugin, price);
            }
        });

        items.push({
            xtype: 'component',
            cls: 'price-free',
            html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'for_free','default'=>'Free','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'for_free','default'=>'Free','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kostenlos<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'for_free','default'=>'Free','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        return Ext.create('Ext.container.Container', {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'free_version','default'=>'Free version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'free_version','default'=>'Free version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kostenlose Version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'free_version','default'=>'Free version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'tab',
            height: 110,
            items: items
        });
    },

    createBuyTab: function(price) {
        var me = this,
            priceString,
            items = [];

        items.push({
            xtype: 'plugin-manager-container-container',
            cls: 'button buy',
            html: '<div class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'buy_now','default'=>'Buy now','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'buy_now','default'=>'Buy now','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jetzt kaufen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'buy_now','default'=>'Buy now','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>',
            handler: function() {
                me.buyPluginEvent(me.plugin, price);
            }
        });

        priceString = me.formatPrice(price.get('price')) + ' *';

        if (price.get('discount') > 0) {
            priceString = Ext.String.format('<span class="reduced">[0]</span> <span class="original">[1]</small>',
                priceString,
                me.formatPrice((price.get('price') / (100 - price.get('discount')) * 100))
            );
        }

        items.push({
            xtype: 'component',
            cls: 'price',
            html: priceString
        });

        if (price.get('subscription')) {
            items.push({
                xtype: 'component',
                cls: 'subscription',
                html: '<div class="icon">U</div>' +
                '<div class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'subscription_info','default'=>'Incl. updates for 12 Months (subscription)','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'subscription_info','default'=>'Incl. updates for 12 Months (subscription)','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Inkl. Updates für 12 Monate (Subscription)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'subscription_info','default'=>'Incl. updates for 12 Months (subscription)','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>'
            });
        }

        return Ext.create('Ext.container.Container', {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'buy_version','default'=>'Purchase version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'buy_version','default'=>'Purchase version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kaufversion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'buy_version','default'=>'Purchase version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'tab buy-tab',
            height: 110,
            items: items
        });
    },

    createRentTab: function(price) {
        var me = this, items = [];

        items.push({
            xtype: 'plugin-manager-container-container',
            cls: 'button rent',
            html: '<div class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rent_now','default'=>'Rent now','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rent_now','default'=>'Rent now','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jetzt mieten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rent_now','default'=>'Rent now','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>',
            handler: function() {
                me.rentPluginEvent(me.plugin, price);
            }
        });

        items.push({
            xtype: 'component',
            cls: 'price',
            html: me.formatPrice(price.get('price')) + ' * <div class="month">/ <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'per_month','default'=>'per month','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'per_month','default'=>'per month','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
pro Monat<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'per_month','default'=>'per month','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>'
        });

        items.push({
            xtype: 'component',
            cls: 'subscription',
            html: '<div class="icon">U</div>' +
            '<div class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rent_subscription_info','default'=>'All updates included during renting period','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rent_subscription_info','default'=>'All updates included during renting period','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Beinhaltet alle Updates während der Miete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rent_subscription_info','default'=>'All updates included during renting period','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>'
        });

        items.push({
            xtype: 'component',
            cls: 'dismissal',
            html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rent_cancel','default'=>'Is cancelable on a monthly basis.','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rent_cancel','default'=>'Is cancelable on a monthly basis.','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Drei Monate Mindestlaufzeit für die Miete.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rent_cancel','default'=>'Is cancelable on a monthly basis.','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        return Ext.create('Ext.container.Container', {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rent_version','default'=>'Rent version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rent_version','default'=>'Rent version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mietversion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'rent_version','default'=>'Rent version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'tab rent-tab',
            height: 110,
            items: items
        });
    },

    createTestTab: function(price) {
        var me = this, items = [];

        items.push({
            xtype: 'plugin-manager-container-container',
            cls: 'button test',
            html: '<div class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'request_test_version','default'=>'Request test version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'request_test_version','default'=>'Request test version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Testversion herunterladen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'request_test_version','default'=>'Request test version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>',
            handler: function() {
                me.requestPluginTestVersionEvent(me.plugin, price);
            }
        });

        items.push({
            xtype: 'component',
            cls: 'price-free',
            html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'for_free','default'=>'Free','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'for_free','default'=>'Free','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kostenlos<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'for_free','default'=>'Free','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        return Ext.create('Ext.container.Container', {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'test_version','default'=>'Test version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'test_version','default'=>'Test version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Testversion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'test_version','default'=>'Test version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'tab',
            height: 110,
            items: items
        });
    },

    getPriceByType: function(prices, type) {
        var price = null;

        prices.each(function(item) {
            if (item.get('type') === type) {
                price = item;
            }
        });
        return price;
    },

    formatPrice: function(value) {
        return Ext.util.Format.currency(value, ' €', 2, true);
    }

});
// 
<?php }} ?>