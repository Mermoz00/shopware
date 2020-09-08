<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/custom_sorting.js" */ ?>
<?php /*%%SmartyHeaderCode:19264858115f5790915d6ad1-05357436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d5b516cbf27cd92ab776b08e6cd26d729bae620' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/custom_sorting.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19264858115f5790915d6ad1-05357436',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5790915d9965_01712446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5790915d9965_01712446')) {function content_5f5790915d9965_01712446($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Base.model.CustomSorting', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'CustomSorting'
        };
    },

    fields: [
        { name: 'id', type: 'int' },
        { name: 'label', type: 'string' },
        { name: 'active', type: 'boolean' },
        { name: 'displayInCategories', type: 'boolean' },
        { name: 'position', type: 'int' },
        { name: 'sortings', type: 'array' }
    ]
});

//
<?php }} ?>