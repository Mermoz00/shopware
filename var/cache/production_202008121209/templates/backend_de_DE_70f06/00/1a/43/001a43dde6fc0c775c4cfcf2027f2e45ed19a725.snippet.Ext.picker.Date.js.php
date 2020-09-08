<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:20
         compiled from "/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.picker.Date.js" */ ?>
<?php /*%%SmartyHeaderCode:11327854745f579090cade16-41146041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '001a43dde6fc0c775c4cfcf2027f2e45ed19a725' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.picker.Date.js',
      1 => 1598958812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11327854745f579090cade16-41146041',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579090cb0515_14105886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579090cb0515_14105886')) {function content_5f579090cb0515_14105886($_smarty_tpl) {?>/**
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
Ext.override(Ext.picker.Date, {

    /**
     * Overrides the todayBtn to use our
     * fancy and shiny button kit.
     *
     * @private
     * @return void
     */
    beforeRender: function () {
        var me = this;
        me.callOverridden();
        if(me.todayBtn) {
            me.todayBtn.addCls('small').addCls('secondary');
        }
    }
});
//<?php }} ?>