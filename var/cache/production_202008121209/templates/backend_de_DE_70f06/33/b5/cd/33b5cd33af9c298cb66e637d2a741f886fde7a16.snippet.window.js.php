<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:14
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/customer/view/main/window.js" */ ?>
<?php /*%%SmartyHeaderCode:16883892625f58835a4999c3-56785602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33b5cd33af9c298cb66e637d2a741f886fde7a16' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/customer/view/main/window.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16883892625f58835a4999c3-56785602',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835a49eb02_46428846',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835a49eb02_46428846')) {function content_5f58835a49eb02_46428846($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Main
 * @version    $Id$
 * @author shopware AG
 */

// 
// 
Ext.define('Shopware.apps.Customer.view.main.Window', {
    extend: 'Enlight.app.Window',
    cls: Ext.baseCSSPrefix + 'customer-list-window',
    alias: 'widget.customer-list-main-window',
    border: false,
    autoShow: true,
    layout: {
        type: 'fit'
    },
    width: '95%',
    height: '95%',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window_title','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window_title','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window_title','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    createItems: function() {
        var me = this, tabs = [];

        me.quickView = Ext.create('Shopware.apps.Customer.view.main.QuickView');
        me.streamView = Ext.create('Shopware.apps.Customer.view.main.StreamView');

        tabs.push(me.quickView);

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('resource'=>'customerstream','privilege'=>'read'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
            tabs.push(me.streamView);
        /*<?php }?>*/

        me.tabPanel = Ext.create('Ext.tab.Panel', {
            flex: 1,
            items: tabs,
            activeTab: (me.subApp.action && me.subApp.action === 'customer_stream') ? 1 : 0
        });

        me.on('afterrender', function() {
            if (me.subApp.action !== 'customer_stream' || !me.subApp.params || !me.subApp.params.streamId) {
                return;
            }

            Ext.defer(function() {
                var record = me.streamView.streamListing.getStore().getById(
                    window.parseInt(me.subApp.params.streamId)
                );

                me.streamView.streamListing.getSelectionModel().select([record]);
            }, 200);
        });

        return [me.tabPanel];
    },

    /**
     * Initializes the component and builds up the main interface
     *
     * @return void
     */
    initComponent: function () {
        var me = this;

        Ext.suspendLayouts();

        me.items = me.createItems();

        Ext.resumeLayouts(true);

        me.callParent(arguments);
    }
});
// 
<?php }} ?>