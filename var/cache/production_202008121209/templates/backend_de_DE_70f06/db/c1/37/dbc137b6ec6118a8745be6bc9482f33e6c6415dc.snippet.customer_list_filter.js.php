<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:14
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/customer/view/main/customer_list_filter.js" */ ?>
<?php /*%%SmartyHeaderCode:6193228405f58835a468305-17258281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc137b6ec6118a8745be6bc9482f33e6c6415dc' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/customer/view/main/customer_list_filter.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6193228405f58835a468305-17258281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835a491662_93813214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835a491662_93813214')) {function content_5f58835a491662_93813214($_smarty_tpl) {?>/**
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
 * @subpackage Controller
 * @version    $Id$
 * @author shopware AG
 */

// 
// 

Ext.define('Shopware.apps.Customer.view.main.CustomerListFilter', {
    extend: 'Shopware.listing.FilterPanel',
    alias:  'widget.customer-listing-filter-panel',
    cls: 'customer-listing-filter-panel detail-view',
    width: 270,
    filterFieldStyle: '',
    collapsible: true,
    collapsed: true,

    configure: function() {
        var factory = Ext.create('Shopware.attribute.SelectionFactory');
        var customerGroupStore = factory.createEntitySearchStore("Shopware\\Models\\Customer\\Group");
        var shopStore = factory.createEntitySearchStore("Shopware\\Models\\Shop\\Shop");
        var salutationStore = Ext.create('Shopware.apps.Base.store.Salutation');
        var countryStore = factory.createEntitySearchStore("Shopware\\Models\\Country\\Country");
        countryStore.remoteSort = true;

        countryStore.sort([{
            property: 'active',
            direction: 'DESC'
        }, {
            property: 'name',
            direction: 'ASC'
        }]);

        var modeStore = Ext.create('Ext.data.Store', {
            fields: ['key', 'label'],
            data: [
                { key: 1, label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'accountModeGuest','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'accountModeGuest','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Schnellbesteller<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'accountModeGuest','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' },
                { key: 0, label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'accountModeNormal','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'accountModeNormal','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunde<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'accountModeNormal','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' }
            ]
        });

        return {
            controller: 'CustomerQuickView',
            model: 'Shopware.apps.Customer.model.QuickView',
            fields: {
                number: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column/number','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'column/number','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kundennummer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'column/number','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    expression: 'LIKE'
                },
                email: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'email','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'email','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
E-Mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'email','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    expression: 'LIKE'
                },
                salutation: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'salutation','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'salutation','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Anrede<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'salutation','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    xtype: 'combobox',
                    displayField: 'label',
                    valueField: 'id',
                    store: salutationStore
                },
                company: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'company','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'company','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Firma<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'company','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    expression: 'LIKE'
                },
                title: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'title','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Titel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'title','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    expression: 'LIKE'
                },
                firstname: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column/first_name','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'column/first_name','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vorname<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'column/first_name','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    expression: 'LIKE'
                },
                lastname: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column/last_name','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'column/last_name','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nachname<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'column/last_name','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    expression: 'LIKE'
                },
                zipcode: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'zip_code','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'zip_code','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Postleitzahl<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'zip_code','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    expression: 'LIKE'
                },
                city: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'city','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'city','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Stadt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'city','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    expression: 'LIKE'
                },
                countryId: {
                    xtype: 'pagingcombobox',
                    displayField: 'name',
                    valueField: 'id',
                    store: countryStore,
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column/country','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'column/country','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Land<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'column/country','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                },
                active: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'active','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'active','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktiv<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'active','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                },
                newsletter: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'newsletter','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'newsletter','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Newsletter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'newsletter','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                },
                accountMode: {
                    xtype: 'combobox',
                    displayField: 'label',
                    valueField: 'key',
                    store: modeStore,
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column/accountMode','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'column/accountMode','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Account Typ<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'column/accountMode','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                },
                customerGroup: {
                    xtype: 'pagingcombobox',
                    displayField: 'name',
                    valueField: 'id',
                    store: customerGroupStore,
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column/customer_group','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'column/customer_group','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kundengruppe<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'column/customer_group','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                },
                shop: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shop','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'shop','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shop<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'shop','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    xtype: 'pagingcombobox',
                    displayField: 'name',
                    valueField: 'id',
                    store: shopStore
                },
                firstLogin: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'first_login','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'first_login','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunde seit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'first_login','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    expression: '>='
                },
                lastLogin: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'lastLogin','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'lastLogin','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zuletzt eingeloggt am<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'lastLogin','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                },
                lockedUntil: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'lockedUntil','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'lockedUntil','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gesperrt bis zum<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'lockedUntil','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    expression: '<='
                },
                birthday: {
                    fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'birthday','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'birthday','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Geburtstag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'birthday','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                }
            }
        };
    }
});
// 
<?php }} ?>