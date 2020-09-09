<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/store/form.js" */ ?>
<?php /*%%SmartyHeaderCode:549895285f5883581ae994-12618515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec69a52f56bf19e3891c796c6753f2bba6209a27' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/store/form.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '549895285f5883581ae994-12618515',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5883581b2722_03873210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5883581b2722_03873210')) {function content_5f5883581b2722_03873210($_smarty_tpl) {?>/**
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
 * @package    Shopware_Base
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.Base.store.Form', {
    extend: 'Ext.data.Store',
    alternateClassName: 'Shopware.store.Form',
    storeId: 'base.Form',

    model:'Shopware.apps.Base.model.Form',
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/config/getForm';?>',
        api: {
            create: '<?php echo '/backend/config/saveForm';?>',
            update: '<?php echo '/backend/config/saveForm';?>',
            destroy: '<?php echo '/backend/config/deleteForm';?>'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>