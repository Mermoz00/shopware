<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:20
         compiled from "/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.data.writer.Json.js" */ ?>
<?php /*%%SmartyHeaderCode:6243109275f579090c5ffa3-28948462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeef4030bd4e3d66a2cf0a02330f74ffa26b066f' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.data.writer.Json.js',
      1 => 1598958812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6243109275f579090c5ffa3-28948462',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579090c672d1_79924174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579090c672d1_79924174')) {function content_5f579090c672d1_79924174($_smarty_tpl) {?>/**
 * Overwrite the json data writer to send the
 * associated data in the same request
 */
//
Ext.define('Ext.data.writer.Json-Shopware', {
    override: 'Ext.data.writer.Json',

    getRecordData: function (record, operation) {
        var me = this, data;

        data = me.getRecordFieldData(record, operation);

        if (record.associations && record.associations.length > 0) {
            me.setRecordAssociationData(record, data);
        }
        return data;
    },

    /**
     * Internal helper function to draw the data values into a new object.
     * Exact copy of parent.getRecordData
     *
     * @param record
     * @return object
     */
    getRecordFieldData: function(record, operation) {
        var isPhantom = record.phantom === true,
            writeAll = this.writeAllFields || isPhantom,
            nameProperty = this.nameProperty,
            fields = record.fields,
            fieldItems = fields.items,
            data = {},
            clientIdProperty = record.clientIdProperty,
            changes,
            name,
            field,
            key,
            value,
            f, fLen;

        if (writeAll) {
            fLen = fieldItems.length;

            for (f = 0; f < fLen; f++) {
                field = fieldItems[f];
                if (field.persist) {
                    name = field[nameProperty] || field.name;
                    value = record.get(field.name);
                    if (field.serialize) {
                        data[name] = field.serialize(value, record);
                    } else if (field.type === Ext.data.Types.DATE && field.dateFormat && Ext.isDate(value)) {
                        data[name] = Ext.Date.format(value, field.dateFormat);
                    } else {
                        data[name] = value;
                    }
                }
            }
        } else {
            // Only write the changes
            changes = record.getChanges();
            for (key in changes) {
                if (changes.hasOwnProperty(key)) {
                    field = fields.get(key);
                    if (field.persist) {
                        name = field[nameProperty] || field.name;
                        value = record.get(field.name);
                        if (field.serialize) {
                            data[name] = field.serialize(value, record);
                        } else if (field.type === Ext.data.Types.DATE && field.dateFormat && Ext.isDate(value)) {
                            data[name] = Ext.Date.format(value, field.dateFormat);
                        } else {
                            data[name] = value;
                        }
                    }
                }
            }
        }
        if (isPhantom) {
            if (clientIdProperty && operation && operation.records.length > 1) {
                // include clientId for phantom records, if multiple records are being written to the server in one operation.
                // The server can then return the clientId with each record so the operation can match the server records with the client records
                data[clientIdProperty] = record.internalId;
            }
        } else {
            // always include the id for non phantoms
            data[record.idProperty] = record.getId();
        }

        return data;
    },

    /**
     * Internal helper function to read the association data of the passed record.
     * @param record
     */
    setRecordAssociationData: function(record, data) {
        var me = this, associatedData;

        //iterate all associations of the record to set the association data to the data object
        record.associations.each(function(association) {

            //get access on the dynamic Ext.data.Store which contains the associated records.
            var associationStore = record[association.storeName];

            //check if the store was generated correctly and contains records
            if (associationStore instanceof Ext.data.Store && associationStore.getCount() > 0) {

                //create new array for the associated data
                data[association.associationKey] = [];

                //iterate all assigned records of the association store.
                associationStore.each(function(associatedRecord) {

                    //check if the current record, is really an Ext.data.Model
                    if (associatedRecord instanceof Ext.data.Model) {
                        //use helper function to get model data
                        associatedData = me.getRecordFieldData(associatedRecord);

                        //check if the record has associations, if this is the case, call recursive
                        if (associatedRecord.associations && associatedRecord.associations.length > 0) {
                            me.setRecordAssociationData(associatedRecord, associatedData);
                        }
                        //after the association data of the record is filled, set the associated data object into the data object.
                        data[association.associationKey].push(associatedData);
                    }
                });
            } else {
                //if the store wasn't created or no record loaded, set an empty object for the association.
                data[association.associationKey] = [];
            }
        });
    }

});
//<?php }} ?>