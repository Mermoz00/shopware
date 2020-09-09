<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/view/widgets/bi/base.js" */ ?>
<?php /*%%SmartyHeaderCode:14512580155f588358ceb355-38106275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33674db8471905fdac98ab6fdb0dbd628a000203' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/index/view/widgets/bi/base.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14512580155f588358ceb355-38106275',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f588358cee0d5_42576765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f588358cee0d5_42576765')) {function content_5f588358cee0d5_42576765($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Index.view.widgets.bi.Base', {
    extend: 'Shopware.apps.Index.view.widgets.Base',
    alias: 'widget.swag-bi-base',
    layout: 'fit',
    height: 480,
    bodyPadding: '1 0 0 0',
    minWidth: 450,

    /**
     * Initializes the widget.
     *
     * @public
     * @return void
     */
    initComponent: function() {
        var me = this,
            store = me.subApp.getStore('Shopware.apps.Base.store.ShopLanguage'),
            record;


        if (!me.widgetRecord.data || !me.widgetRecord.data.shopId) {
            me.callParent();
            return;
        }

        me.widgetRecord.data.shopId = parseInt(me.widgetRecord.data.shopId);
        me.widgetRecord.data.title = me.widgetRecord.data.title || '';

        me.items = [
            {
                xtype: 'container',
                html: '<iframe frameborder="0" scrolling="no" src="<?php echo 'http://shopware.localhost/backend/BenchmarkOverview/render';?>?shopId=' + me.widgetRecord.data.shopId + '&name=' + me.widgetRecord.data.name + '&mode=widget"></iframe>'
            }
        ];

        record = store.getById(me.widgetRecord.data.shopId);

        if (record === null) {
            store.load({
                callback: function () {
                    store.each(function (storeRecord) {
                        if (storeRecord.get('id') === me.widgetRecord.data.shopId) {
                            me.updateTitle(storeRecord.get('name'));
                        }
                    });
                }
            })
        } else {
            me.title = record.get('name') + ' - ' + me.widgetRecord.data.title;
        }

        me.callParent();
    },

    /**
     * Update the title
     * @param { string } name
     */
    updateTitle: function (name) {
        this.setTitle(name + ' - ' + this.widgetRecord.data.title);
    }
});
<?php }} ?>