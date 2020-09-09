<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 10:28:54
         compiled from "/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/licence_page.js" */ ?>
<?php /*%%SmartyHeaderCode:17277751365f58924613b530-93310056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f84b7d36f2d843d5c0a340a409d914cb602422e1' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/licence_page.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17277751365f58924613b530-93310056',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f589246144a86_99300250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f589246144a86_99300250')) {function content_5f589246144a86_99300250($_smarty_tpl) {?>/**
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
 * @package    PluginManager
 * @subpackage List
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.list.LicencePage', {
    extend: 'Shopware.grid.Panel',
    cls: 'plugin-manager-licence-page',
    alias: 'widget.plugin-manager-licence-page',

    configure: function() {
        return {
            deleteButton: false,
            addButton: false,
            deleteColumn: false,
            editColumn: false,
            columns: {
                label: {
                    header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'plugin_name','default'=>'Plugin name','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'plugin_name','default'=>'Plugin name','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pluginname<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'plugin_name','default'=>'Plugin name','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                },
                shop: {
                    header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shop','default'=>'Shop','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'shop','default'=>'Shop','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shop<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'shop','default'=>'Shop','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                },
                creationDate: {
                    header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'creation_date','default'=>'Created on','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'creation_date','default'=>'Created on','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erstellt am<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'creation_date','default'=>'Created on','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    renderer: this.dateRenderer
                },
                expirationDate: {
                    header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'valid_to','default'=>'Valid until','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'valid_to','default'=>'Valid until','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gültig bis<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'valid_to','default'=>'Valid until','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    renderer: this.dateRenderer
                },
                priceColumn: {
                    header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'version','default'=>'Version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'version','default'=>'Version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'version','default'=>'Version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    renderer: this.priceRenderer
                },
                binaryVersion: {
                    header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'binary_version','default'=>'Binary version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'binary_version','default'=>'Binary version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Binärversion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'binary_version','default'=>'Binary version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                }
            }
        };
    },

    mixins: {
        events: 'Shopware.apps.PluginManager.view.PluginHelper'
    },

    createToolbarItems: function() {
        var me = this,
            items = me.callParent(arguments);

        me.on('licence-selection-changed', function(grid, selModel, selection) {
            if (selection.length > 0) {
                me.downloadButton.enable();
            } else {
                me.downloadButton.disable();
            }
        });

        me.downloadButton = Ext.create('Ext.button.Button', {
            iconCls: 'sprite-inbox-download',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'download_selected_plugins','default'=>'Download selected plugins','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'download_selected_plugins','default'=>'Download selected plugins','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Markierte Plugins herunterladen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'download_selected_plugins','default'=>'Download selected plugins','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            disabled: true,
            handler: function() {
                var selModel = me.getSelectionModel();

                me.queueRequests(
                    'download-plugin-licence',
                    selModel.getSelection(),
                    function() {
                        Shopware.app.Application.fireEvent('reload-local-listing');
                        me.hideLoadingMask();
                    }
                );
            }
        });

        items = Ext.Array.insert(items, 0, [ me.downloadButton ]);

        return items;
    },

    queueRequests: function(event, records, callback) {
        var me = this;

        if (records.length <= 0) {
            if (Ext.isFunction(callback)) {
                callback();
            }
            return;
        }

        var record = records.shift();

        Shopware.app.Application.fireEvent(
            event,
            record,
            function() {
                me.queueRequests(event, records, callback);
            }
        );
    },

    dateRenderer: function(value) {
        if (!value || !value.hasOwnProperty('date')) {
            return value;
        }
        var date = this.formatDate(value.date);
        return Ext.util.Format.date(date);
    },

    priceRenderer: function(value, metaData, record) {
        var me = this;

        var price = record['getPriceStore'];

        if (price && price.first()) {
            price = price.first();
            return me.getTextForPriceType(price.get('type'));
        } else {
            return value;
        }
    },

    createActionColumnItems: function() {
        var me = this,
            items = me.callParent(arguments);

        items.push({
            iconCls: 'sprite-inbox-download',
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'download_plugin','default'=>'Download plugin','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'download_plugin','default'=>'Download plugin','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin herunterladen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'download_plugin','default'=>'Download plugin','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function (view, rowIndex, colIndex, item, opts, record) {
                Shopware.app.Application.fireEvent(
                    'download-plugin-licence',
                    record,
                    function() {
                        Shopware.app.Application.fireEvent('reload-local-listing');
                        me.hideLoadingMask();
                    }
                );
            },
            getClass: function(value, metaData, record) {
                if (!record.get('binaryLink')) {
                    return Ext.baseCSSPrefix + 'hidden';
                }
            }
        });

        return items;
    }
});
//<?php }} ?>