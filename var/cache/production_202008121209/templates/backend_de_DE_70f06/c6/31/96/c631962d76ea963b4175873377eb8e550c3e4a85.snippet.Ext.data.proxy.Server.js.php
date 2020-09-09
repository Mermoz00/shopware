<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:11
         compiled from "/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.data.proxy.Server.js" */ ?>
<?php /*%%SmartyHeaderCode:4405532475f588357d5ae27-30914110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c631962d76ea963b4175873377eb8e550c3e4a85' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.data.proxy.Server.js',
      1 => 1598958812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4405532475f588357d5ae27-30914110',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f588357d5feb4_78623351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f588357d5feb4_78623351')) {function content_5f588357d5feb4_78623351($_smarty_tpl) {?>/**
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
Ext.define('Ext.data.proxy.Server-Shopware', {
    override: 'Ext.data.proxy.Server',

    processResponse: function(success, operation, request, response, callback, scope) {
        var me = this,
            reader,
            result;

        if (success === true) {
            reader = me.getReader();

            // Apply defaults to incoming data only for read operations.
            // For create and update, there will already be a client-side record
            // to match with which will contain any defaulted in values.
            reader.applyDefaults = operation.action === 'read';

            result = reader.read(me.extractResponseData(response));

            if (result.success !== false) {
                //see comment in buildRequest for why we include the response object here
                Ext.apply(operation, {
                    response: response,
                    resultSet: result
                });

                operation.commitRecords(result.records);
                operation.setCompleted();
                operation.setSuccessful();
            } else {
                operation.setException(result.message);
                me.fireEvent('exception', this, response, operation);
            }
        } else {
            //user has been logged out reload the backend
            if(response.status == 401) {
                window.location.reload()
            }
            else {
                me.setException(operation, response);
                me.fireEvent('exception', this, response, operation);
                Ext.MessageBox.alert(operation.error.status + ' - ' + operation.error.statusText, Ext.util.Format.stripTags(response.responseText));
            }
        }

        //this callback is the one that was passed to the 'read' or 'write' function above
        if (typeof callback == 'function') {
            callback.call(scope || me, operation);
        }

        me.afterRequest(request, success);
    },



    /**
     * Encodes the array of { @link Ext.util.Filter } objects into a string to be sent in the request url. By default,
     * this simply JSON-encodes the filter data
     *
     * @param { Ext.util.Filter[] } filters The array of { @link Ext.util.Filter Filter } objects
     * @return { String } The encoded filters
     */
    encodeFilters: function(filters) {
        var min = [],
            length = filters.length,
            i = 0;

        for (; i < length; i++) {
            min[i] = {
                property: filters[i].property,
                value   : filters[i].value,
                operator: filters[i].operator,
                expression: filters[i].expression
            };
        }
        return this.applyEncoding(min);
    }
});
//<?php }} ?>