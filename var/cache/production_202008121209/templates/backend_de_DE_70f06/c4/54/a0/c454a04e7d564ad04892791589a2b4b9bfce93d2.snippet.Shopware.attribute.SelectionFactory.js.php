<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/mixins/Shopware.attribute.SelectionFactory.js" */ ?>
<?php /*%%SmartyHeaderCode:7008276435f58835844ee50-98750663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c454a04e7d564ad04892791589a2b4b9bfce93d2' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/mixins/Shopware.attribute.SelectionFactory.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7008276435f58835844ee50-98750663',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f588358454fd3_87901332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f588358454fd3_87901332')) {function content_5f588358454fd3_87901332($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

Ext.define('Shopware.attribute.SelectionFactory', {
    getRelevantFields: function() {
        return ['label', 'name', 'title', 'number', 'description','value'];
    },

    getLabelField: function(record) {
        var fields = this.getRelevantFields();
        var found = null;
        var recordFields = Ext.Object.getKeys(record.data);

        Ext.each(fields, function(field) {
            if (recordFields.indexOf(field) >= 0) {
                found = field;
                return false;
            }
        });

        return found;
    },

    getLabelOfObject: function(values) {
        var fields = this.getRelevantFields();
        var found = null;
        var recordFields = Object.keys(values);

        Ext.each(fields, function(field) {
            if (recordFields.indexOf(field) >= 0) {
                found = field;
                return false;
            }
        });

        if (found) {
            return values[found];
        } else {
            return null;
        }
    },

    createSelection: function(config, attribute, className, store, searchStore) {
        config.store = store;
        config.flex = 1;
        config.searchStore = searchStore;
        return Ext.create(className, config);
    },

    createDynamicSearchStore: function(attribute) {
        return this.createEntitySearchStore(attribute.get('entity'), null);
    },

    createModelSearchStore: function(attribute, model) {
        return this.createEntitySearchStore(attribute.get('entity'), model);
    },

    createEntitySearchStore: function(entity, extJsModel) {
        if (!extJsModel) {
            return Ext.create('Ext.data.Store', {
                model: 'Shopware.model.Dynamic',
                proxy: {
                    type: 'ajax',
                    url: '<?php echo '/backend/EntitySearch/search';?>?model=' + entity,
                    reader: Ext.create('Shopware.model.DynamicReader')
                }
            });
        }

        return Ext.create('Ext.data.Store', {
            model: extJsModel,
            proxy: {
                type: 'ajax',
                url: '<?php echo '/backend/EntitySearch/search';?>?model=' + entity,
                reader: { type: 'json', root: 'data' }
            }
        });
    }
});
<?php }} ?>