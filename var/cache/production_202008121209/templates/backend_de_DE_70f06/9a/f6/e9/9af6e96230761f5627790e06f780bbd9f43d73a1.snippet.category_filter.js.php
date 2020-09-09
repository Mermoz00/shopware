<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:14
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article_list/controller/category_filter.js" */ ?>
<?php /*%%SmartyHeaderCode:20657801595f58835a5f0299-44514614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9af6e96230761f5627790e06f780bbd9f43d73a1' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article_list/controller/category_filter.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20657801595f58835a5f0299-44514614',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835a5f8843_11235833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835a5f8843_11235833')) {function content_5f58835a5f8843_11235833($_smarty_tpl) {?>/**
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
 * The category_filter controllers handels filtering by category
 */
//
//
Ext.define('Shopware.apps.ArticleList.controller.CategoryFilter', {

    /**
     * The parent class that this class extends.
     * @string
     */
    extend: 'Ext.app.Controller',

    refs: [
        { ref:'mainGrid', selector:'multi-edit-main-grid' },
        { ref:'categoryTree', selector:'multi-edit-category-tree' }
    ],

    /**
     * Init the controller and register controlls
     */
    init: function () {
        var me = this;

        me.control({
            'multi-edit-category-tree': {
                'filterByCategory': me.onFilterByCategory,
                'showVariants': me.onShowVariants
            }
        });

        me.callParent(arguments);
    },

    /**
     * Dynamically create a filter query based on the current category selection
     *
     * @param categoryId
     * @param showVariants
     */
    onFilterByCategory: function(categoryId, showVariants) {
        var me = this,
            filterString = '';

        if (!showVariants) {
            filterString = ' ISMAIN AND ';
        }

        if (categoryId > 0) {
            filterString += '(CATEGORY.PATH = "%|' + categoryId + '|%" OR CATEGORY.ID = ' + categoryId + ')';
        } else {
            filterString += 'ARTICLE.ID > 0';
        }

        me.getController('Suggest').loadFilter(
            filterString,
            me.getFilterNameByConfig(categoryId, showVariants),
            {
                categoryId: categoryId,
                showVariants: showVariants
            }
        );
    },

    onShowVariants: function(isActive) {
        var me = this;
        me.getMainGrid().detailActiveColumn.setVisible(isActive);
    },

    /**
     * Generates a translatable description of an auto-generated filter based on the configuration
     *
     * @param categoryId
     * @param showVariants
     */
    getFilterNameByConfig: function(categoryId, showVariants) {
        var me = this,
            snippet;

        if (!categoryId) {
            snippet = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'allProducts','default'=>'all products','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'allProducts','default'=>'all products','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Alle Produkte<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'allProducts','default'=>'all products','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        } else {
            snippet = Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'productsInCategory','default'=>'products in category [0]','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'productsInCategory','default'=>'products in category [0]','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Produkte in der Kategorie [0]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'productsInCategory','default'=>'products in category [0]','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', categoryId);
        }

        if (showVariants) {
            snippet += ' ' + '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'withVariants','default'=>'with variants','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'withVariants','default'=>'with variants','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
mit Varianten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'withVariants','default'=>'with variants','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        }

        return snippet;
    }
});
//
<?php }} ?>