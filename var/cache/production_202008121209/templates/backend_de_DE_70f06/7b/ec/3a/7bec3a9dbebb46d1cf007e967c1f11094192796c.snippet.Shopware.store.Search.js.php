<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/application/Shopware.store.Search.js" */ ?>
<?php /*%%SmartyHeaderCode:8522876215f5883580a9934-35278971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bec3a9dbebb46d1cf007e967c1f11094192796c' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/application/Shopware.store.Search.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8522876215f5883580a9934-35278971',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5883580acd15_69182534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5883580acd15_69182534')) {function content_5f5883580acd15_69182534($_smarty_tpl) {?>/**
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
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */

Ext.define('Shopware.store.Search', {
    extend: 'Ext.data.Store',
    mixins: { helper: 'Shopware.model.Helper' },
    autoLoad: false,
    batch: true,
    remoteSort: true,
    remoteFilter: true,
    pageSize: 20,

    statics: {
        /**
         * @example
         *      Ext.define('Shopware.apps.Product.store.Product', {
         *          extend: 'Shopware.store.Search',
         *          configure: function() {
         *              return {
         *                  entity: 'Shopware\Models\Article\Article'
         *              }
         *          }
         *      });
         */
        displayConfig: {
            entity: undefined,

            proxy: {
                type: 'ajax',
                api: {
                    read: '<?php echo '/backend/search/search';?>'
                },
                reader: {
                    type: 'application',
                    root: 'data',
                    totalProperty: 'total'
                }
            }
        },

        getDisplayConfig: function (userOpts, definition) {
            var config = { };

            if (userOpts && typeof userOpts.configure == 'function') {
                config = Ext.apply({ }, config, userOpts.configure());
            }
            if (definition && typeof definition.configure === 'function') {
                config = Ext.apply({ }, config, definition.configure());
            }
            config = Ext.apply({ }, config, this.displayConfig);

            return config;
        },

        setDisplayConfig: function (prop, val) {
            var me = this;

            if (!me.displayConfig.hasOwnProperty(prop)) {
                return false;
            }
            me.displayConfig[prop] = val;
            return true;
        }
    },

    configure: function() {
        return { };
    },

    getConfig: function (prop) {
        var me = this;
        return me._opts[prop];
    },

    constructor: function (config) {
        var me = this;
        me._opts = me.statics().getDisplayConfig(config, this);
        me.convertProxyApi();
        me.callParent(arguments);
    },

    convertProxyApi: function () {
        var me = this;

        me.checkRequirements();

        var proxy = me.getConfig('proxy');
        proxy.extraParams = {
            entity: me.getConfig('entity')
        };

        me.setProxy(proxy);
    },

    checkRequirements: function() {
        var me = this;

        if (!me.getConfig('entity')) {
            me.throwException(me.$className + ": Component requires the `entity` property in the configure() function.");
        }
    }
});
<?php }} ?>