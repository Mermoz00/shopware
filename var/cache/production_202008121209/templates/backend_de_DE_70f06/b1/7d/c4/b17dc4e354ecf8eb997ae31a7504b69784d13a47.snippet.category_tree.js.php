<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:24
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article/store/category_tree.js" */ ?>
<?php /*%%SmartyHeaderCode:21135647335f5790941fe292-30742887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b17dc4e354ecf8eb997ae31a7504b69784d13a47' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article/store/category_tree.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21135647335f5790941fe292-30742887',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5790942017d2_87255128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5790942017d2_87255128')) {function content_5f5790942017d2_87255128($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage CategoryTree
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Article Module
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Article.store.CategoryTree', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.TreeStore',

    /**
     * Defines the id of the root node. To get the first level of shopware categories
     * we need to set the parent id = 1
     * @integer
     */
    defaultRootId: 1,
    animate: false,

    /**
     * Defines which model used for the store records.
     * @string
     */
    model: 'Shopware.apps.Article.model.Category',

    /**
     * Disable auto loading for this store
     * @boolean
     */
    autoLoad: false,

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        url: '<?php echo '/backend/category/getList';?>',

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});
//
<?php }} ?>