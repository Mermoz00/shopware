<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/store/listing_filter_mode.js" */ ?>
<?php /*%%SmartyHeaderCode:1941397805f5883581d6fa8-08718905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '204673b9b242697d74f7d5f1f468f57a83ed8ced' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/store/listing_filter_mode.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1941397805f5883581d6fa8-08718905',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5883581e3828_36864237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5883581e3828_36864237')) {function content_5f5883581e3828_36864237($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */


//

Ext.define('Shopware.apps.Base.store.ListingFilterMode', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.ListingFilterMode',

    storeId: 'base.ListingFilterMode',

    fields: [
        { name: 'key', type: 'string' },
        { name: 'label', type: 'string' },
        { name: 'description', type: 'string' },
        { name: 'image', type: 'string' }
    ],

    pageSize: 1000,

    defaultModes: {
        displayFullPageReload: true,
        displayReloadProductsMode: true,
        displayReloadFiltersMode: true
    },

    fullPageReload: {
        key: 'full_page_reload',
        label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing_mode_reload_label','namespace'=>'backend/base/listing_filter_mode')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'listing_mode_reload_label','namespace'=>'backend/base/listing_filter_mode'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filterbutton anzeigen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'listing_mode_reload_label','namespace'=>'backend/base/listing_filter_mode'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        description: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing_mode_reload_description','namespace'=>'backend/base/listing_filter_mode')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'listing_mode_reload_description','namespace'=>'backend/base/listing_filter_mode'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Das Produktlisting wird über einen Button neu geladen.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'listing_mode_reload_description','namespace'=>'backend/base/listing_filter_mode'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        image: '/themes/Backend/ExtJs/backend/_resources/images/listing_mode/full_page_reload.jpg'
    },

    reloadProductsMode: {
        key: 'product_ajax_reload',
        label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing_mode_product_reload_label','namespace'=>'backend/base/listing_filter_mode')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'listing_mode_product_reload_label','namespace'=>'backend/base/listing_filter_mode'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Produkte live nachladen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'listing_mode_product_reload_label','namespace'=>'backend/base/listing_filter_mode'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        description: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing_mode_product_reload_description','namespace'=>'backend/base/listing_filter_mode')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'listing_mode_product_reload_description','namespace'=>'backend/base/listing_filter_mode'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Beim Filtern einer Produktliste wird diese direkt live nachgeladen.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'listing_mode_product_reload_description','namespace'=>'backend/base/listing_filter_mode'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        image: '/themes/Backend/ExtJs/backend/_resources/images/listing_mode/product_ajax_reload.jpg'
    },

    reloadFiltersMode: {
        key: 'filter_ajax_reload',
        label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing_mode_filter_reload_label','namespace'=>'backend/base/listing_filter_mode')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'listing_mode_filter_reload_label','namespace'=>'backend/base/listing_filter_mode'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Produkte & Filter live nachladen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'listing_mode_filter_reload_label','namespace'=>'backend/base/listing_filter_mode'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        description: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing_mode_filter_reload_description','namespace'=>'backend/base/listing_filter_mode')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'listing_mode_filter_reload_description','namespace'=>'backend/base/listing_filter_mode'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Beim Filtern einer Produktliste wird diese direkt live nachgeladen. Nicht mehr kombinierbare Filter werden deaktiviert.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'listing_mode_filter_reload_description','namespace'=>'backend/base/listing_filter_mode'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        image: '/themes/Backend/ExtJs/backend/_resources/images/listing_mode/filter_ajax_reload.jpg'
    },

    constructor: function(config) {
        var me = this,
            data = [];

        if (this.getConfigValue(config, 'displayFullPageReload')) {
            data.push(me.fullPageReload);
        }
        if (this.getConfigValue(config, 'displayReloadProductsMode')) {
            data.push(me.reloadProductsMode);
        }
        if (this.getConfigValue(config, 'displayReloadFiltersMode')) {
            data.push(me.reloadFiltersMode);
        }

        this.data = data;
        this.callParent(arguments);
    },

    getConfigValue: function(config, property) {
        if (!Ext.isObject(config)) {
            return this.defaultModes[property];
        }

        if (!config.hasOwnProperty(property)) {
            return this.defaultModes[property];
        }

        return config[property];
    }
});
<?php }} ?>