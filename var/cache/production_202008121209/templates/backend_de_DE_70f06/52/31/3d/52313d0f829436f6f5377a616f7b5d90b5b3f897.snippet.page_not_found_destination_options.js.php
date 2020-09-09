<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/page_not_found_destination_options.js" */ ?>
<?php /*%%SmartyHeaderCode:12373171795f579091044c62-15163941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52313d0f829436f6f5377a616f7b5d90b5b3f897' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/page_not_found_destination_options.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12373171795f579091044c62-15163941',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579091047a42_10876689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579091047a42_10876689')) {function content_5f579091047a42_10876689($_smarty_tpl) {?>/**
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
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware "Page Not Found" Destination Options Model
 *
 * The "Page Not Found" destination options model contains the possible options for a 404 page.
 * It always has the 2 default options, plus emotion landing pages.
 */
//
Ext.define('Shopware.apps.Base.model.PageNotFoundDestinationOptions', {
    extend: 'Ext.data.Model',

    alternateClassName: 'Shopware.model.PageNotFoundDestinationOptions',
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' }
    ]
});
//
<?php }} ?>