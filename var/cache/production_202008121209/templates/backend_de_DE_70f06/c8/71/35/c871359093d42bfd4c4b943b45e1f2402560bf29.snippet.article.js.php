<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/article.js" */ ?>
<?php /*%%SmartyHeaderCode:10920862615f5883580ccd40-64980307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c871359093d42bfd4c4b943b45e1f2402560bf29' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/article.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10920862615f5883580ccd40-64980307',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5883580d16a3_35116788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5883580d16a3_35116788')) {function content_5f5883580d16a3_35116788($_smarty_tpl) {?>/**
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
 *
 * The article model represents a data row of the s_articles or the
 * Shopware\Models\Article\Article doctrine model. In addition to the
 * article data the article model contains the data for the first article detail
 * position and the data for the category to which the article was first assigned.
 */
//
Ext.define('Shopware.apps.Base.model.Article', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName:'Shopware.model.Article',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name:'id', type:'int' },
        { name:'number', type:'string' },
        { name:'name', type:'string' },
        { name:'description', type:'string' },
        { name:'supplierName', type:'string' },
        { name:'supplierId', type:'int' },
        { name:'active', type:'int' },
        { name:'detailId', type:'int' },
        { name:'changeTime', type:'date' },
        { name:'inStock', type:'int' },

        { name:'label', type:'string' }
    ]
});
//
<?php }} ?>