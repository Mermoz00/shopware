<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/country_state.js" */ ?>
<?php /*%%SmartyHeaderCode:19783625215f588358108768-71708664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc6bf8383b5d2d7a66f77e1c334c0fa538a9fa1' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/country_state.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19783625215f588358108768-71708664',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835810bae9_43186237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835810bae9_43186237')) {function content_5f58835810bae9_43186237($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 */
//
Ext.define('Shopware.apps.Base.model.CountryState', {
    extend: 'Shopware.data.Model',
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'countryId', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'shortCode', type: 'string' },
        { name: 'position', type: 'int' },
        { name: 'active', type: 'boolean' }
    ]
});
//
<?php }} ?>