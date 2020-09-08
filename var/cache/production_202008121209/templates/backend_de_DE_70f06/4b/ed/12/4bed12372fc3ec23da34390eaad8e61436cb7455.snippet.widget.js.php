<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:21
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/store/widget.js" */ ?>
<?php /*%%SmartyHeaderCode:11191496365f579091e52a31-22370237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bed12372fc3ec23da34390eaad8e61436cb7455' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/store/widget.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11191496365f579091e52a31-22370237',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579091e56425_44793127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579091e56425_44793127')) {function content_5f579091e56425_44793127($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Index.store.Widget', {

    extend: 'Ext.data.Store',

    model: 'Shopware.apps.Index.model.Widget',

    batch: true,
    remoteFilter: true,
    clearOnLoad: false,

    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/widgets/getList';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});

//
<?php }} ?>