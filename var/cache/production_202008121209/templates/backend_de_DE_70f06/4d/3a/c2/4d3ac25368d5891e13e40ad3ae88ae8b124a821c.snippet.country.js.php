<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:20
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/country.js" */ ?>
<?php /*%%SmartyHeaderCode:7936236055f579090eca3d5-22110083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d3ac25368d5891e13e40ad3ae88ae8b124a821c' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/country.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7936236055f579090eca3d5-22110083',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579090ecf167_51994322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579090ecf167_51994322')) {function content_5f579090ecf167_51994322($_smarty_tpl) {?>/**
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
 * The country model represents a data row of the s_core_countries or the
 * Shopware\Models\Country\Country doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.Country', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Country',

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
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'iso', type: 'string' },
        { name: 'isoName', type: 'string' },
        { name: 'position', type: 'int' },
        { name: 'active', type: 'boolean' },
        { name: 'forceStateInRegistration', type: 'boolean' },
        { name: 'displayStateInRegistration', type: 'boolean' },
        { name: 'allowShipping', type: 'boolean' }
    ]

});
//
<?php }} ?>