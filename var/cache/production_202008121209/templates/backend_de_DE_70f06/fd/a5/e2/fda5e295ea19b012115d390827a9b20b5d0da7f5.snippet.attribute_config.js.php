<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/attribute_config.js" */ ?>
<?php /*%%SmartyHeaderCode:8947843305f588358142663-38676899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda5e295ea19b012115d390827a9b20b5d0da7f5' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/model/attribute_config.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8947843305f588358142663-38676899',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f588358146e88_01741186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f588358146e88_01741186')) {function content_5f588358146e88_01741186($_smarty_tpl) {?>
//

Ext.define('Shopware.model.AttributeConfig', {
    extend: 'Shopware.data.Model',

    fields: [
        { name: 'id', type: 'integer', useNull: true },
        { name: 'tableName', type: 'string' },
        { name: 'columnName', type: 'string' },
        { name: 'columnType', type: 'string' },
        { name: 'defaultValue', type: 'string', useNull: true, defaultValue: null },
        { name: 'entity', type: 'string', useNull: true },
        { name: 'dbalType', type: 'string' },
        { name: 'sqlType', type: 'string' },
        { name: 'label', type: 'string' },
        { name: 'helpText', type: 'string' },
        { name: 'supportText', type: 'string' },
        { name: 'translatable', type: 'boolean' },
        { name: 'displayInBackend', type: 'boolean', defaultValue: true },
        { name: 'readonly', type: 'boolean', defaultValue: false },
        { name: 'pluginId', type: 'integer' },
        { name: 'configured', type: 'boolean' },
        { name: 'position', type: 'integer' },
        { name: 'custom', type: 'boolean', defaultValue: false },
        { name: 'identifier', type: 'boolean' },
        { name: 'core', type: 'boolean' },
        { name: 'arrayStore', type: 'string' },

        //pseudo columns for view generation / data operations
        { name: 'deleteButton', type: 'boolean' },
        { name: 'originalName', type: 'string', mapping: 'columnName' }
    ],

    configure: function() {
        return {
            controller: 'Attributes'
        };
    },

    allowDelete: function() {
        if (this.get('core')) {
            return false;
        }
        if (this.get('identifier')) {
            return false;
        }
        return this.get('custom');
    },

    allowNameChange: function() {
        if (this.get('identifier')) {
            return false;
        }
        return this.get('custom');
    },

    allowTypeChange: function() {
        if (this.get('identifier')) {
            return false;
        }
        return this.get('custom') || this.get('core');
    },

    allowConfigure: function() {
        return this.get('custom') || this.get('core');
    },

    merge: function(column) {
        var me = this;
        var fields = [
            'columnName',
            'columnType',
            'entity',
            'label',
            'helpText',
            'supportText',
            'arrayStore',
            'translatable',
            'displayInBackend',
            'pluginId',
            'position',
            'custom',
            'dbalType',
            'sqlType'
        ];

        Ext.each(fields, function(field) {
            me.set(field, column.get(field));
        });
    }
});
<?php }} ?>