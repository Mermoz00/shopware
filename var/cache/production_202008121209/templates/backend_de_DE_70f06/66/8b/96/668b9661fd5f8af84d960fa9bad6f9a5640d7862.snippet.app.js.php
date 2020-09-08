<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:24
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/benchmark/app.js" */ ?>
<?php /*%%SmartyHeaderCode:845475205f579094650e44-38154492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '668b9661fd5f8af84d960fa9bad6f9a5640d7862' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/benchmark/app.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '845475205f579094650e44-38154492',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579094654cb8_80228746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579094654cb8_80228746')) {function content_5f579094654cb8_80228746($_smarty_tpl) {?>/**
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

//
//
Ext.define('Shopware.apps.Benchmark', {
    name: 'Shopware.apps.Benchmark',
    extend:'Enlight.app.SubApplication',
    bulkLoad: true,
    loadPath: '<?php echo '/backend/Benchmark/load';?>',

    views: ['overview.Window', 'settings.Window', 'settings.IndustryField', 'settings.IndustryWindow'],
    models: [ 'ShopConfig' ],
    stores: [ 'Industry', 'ShopConfigs' ],

    controllers: [ 'Main', 'Settings' ],

    launch: function() {
        var me = this,
            mainController = me.getController('Main');

        return mainController.mainWindow;
    }
});
//<?php }} ?>