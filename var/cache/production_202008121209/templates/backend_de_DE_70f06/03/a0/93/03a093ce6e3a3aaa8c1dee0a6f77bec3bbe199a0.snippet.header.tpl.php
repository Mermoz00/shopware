<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/engine/Shopware/Plugins/Community/Core/SwagFrance/Views/backend/index/swag_france/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5713573705f588358ab7671-23565027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a093ce6e3a3aaa8c1dee0a6f77bec3bbe199a0' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Community/Core/SwagFrance/Views/backend/index/swag_france/header.tpl',
      1 => 1599055203,
      2 => 'file',
    ),
    'c4892143deca5853a70bbbf69cd7034f5331286d' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/app.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5713573705f588358ab7671-23565027',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f588358abccb3_70815229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f588358abccb3_70815229')) {function content_5f588358abccb3_70815229($_smarty_tpl) {?>/**
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
 * Shopware UI - Main Backend Application Bootstrap
 *
 * This file bootstrapps the complete backend structure.
 */

//
//
Ext.define('Shopware.apps.Index', {
    /**
     * Extends from our special controller, which handles the
     * sub-application behavior and the event bus
     * @string
     */
    extend:'Enlight.app.SubApplication',

    /**
     * Enables our bulk loading technique.
     * @booelan
     */
    bulkLoad: true,

    /**
     * Sets the loading path for the sub-application.
     *
     * Note that you'll need a "loadAction" in your
     * controller (server-side)
     * @string
     */
    loadPath: '<?php echo '/backend/Index/load';?>',

    /**
     * Required controllers for module (subapplication)
     * @array
     */
    controllers:[
        'Main',
        'Widgets',
        'ErrorReporter',
        'ThemeCacheWarmUp'
    ],

    /**
     * Requires class for the module (subapplication)
     */
    requires: [
        'Shopware.container.Viewport'
    ],

    /**
     * Required views for module (subapplication)
     * @array
     */
    views: [
        'Main',
        'Menu',
        'Footer',
        'Search',
        'widgets.Window',
        'widgets.Sales',
        'widgets.Upload',
        'widgets.Visitors',
        'widgets.Orders',
        'widgets.Notice',
        'widgets.Merchant',
        'widgets.Rating',
        'widgets.News',
        'widgets.Base',
        'merchant.Window',
        'themeCache.ThemeCacheWarmUp',
        'widgets.bi.Base'
    ],

    /**
     * Required models for the module
     * @array
     */
    models: [
        'Widget',
        'WidgetSettings',
        'Turnover',
        'Batch',
        'Customers',
        'Visitors',
        'Orders',
        'News',
        'Merchant',
        'MerchantMail',
        'ThemeCacheWarmUp',
        'Rating'
    ],

    /**
     * Required stores for the module
     * @array
     */
    stores: [
        'Widget',
        'WidgetSettings',
        'ThemeCacheWarmUp'
    ]
});
//
//
<?php }} ?>