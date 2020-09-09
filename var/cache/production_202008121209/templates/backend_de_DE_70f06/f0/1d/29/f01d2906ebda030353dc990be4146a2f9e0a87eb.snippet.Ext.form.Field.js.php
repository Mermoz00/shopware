<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:20
         compiled from "/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.form.Field.js" */ ?>
<?php /*%%SmartyHeaderCode:20864418965f579090c3a6b8-05966233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f01d2906ebda030353dc990be4146a2f9e0a87eb' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.form.Field.js',
      1 => 1598958812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20864418965f579090c3a6b8-05966233',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579090c3d236_03751563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579090c3d236_03751563')) {function content_5f579090c3d236_03751563($_smarty_tpl) {?>/**
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
 * Overrides the Ext.button.Button to provide
 * an additional HTML5 data attribute to provide
 * a better adressing in selenium ui tests.
 *
 * @category   Enlight
 * @package    Enlight_ExtJs
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 */
// 
Ext.define('Enlight.form.Field',
    {
        override: 'Ext.form.Field',

        afterRender: function () {
            var me = this;
            me.callParent(arguments);
            me.initHelpSupportElements();
        },

    }, function()
    {
        Ext.form.Field.mixin('helpSupportElems', Enlight.form.mixin.HelpSupportElements);
});
// 
<?php }} ?>