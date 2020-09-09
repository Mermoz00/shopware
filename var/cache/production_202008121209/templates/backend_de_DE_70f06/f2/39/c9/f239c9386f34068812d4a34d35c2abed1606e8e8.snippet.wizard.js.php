<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:23
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/customer/view/main/wizard.js" */ ?>
<?php /*%%SmartyHeaderCode:20759995515f5790939a2d41-56691092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f239c9386f34068812d4a34d35c2abed1606e8e8' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/customer/view/main/wizard.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20759995515f5790939a2d41-56691092',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5790939f9ca0_71665049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5790939f9ca0_71665049')) {function content_5f5790939f9ca0_71665049($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Customer.view.main.Wizard', {
    extend: 'Ext.window.Window',
    layout: 'fit',
    autoShow: false,
    modal: true,
    cls: 'plugin-manager-loading-mask customer-wizard',
    bodyPadding: 20,
    header: false,
    width: 1250,
    height: 540,

    initComponent: function() {
        var me = this;

        me.dockedItems = me.createDockedItems();

        me.items = me.createItems();

        me.callParent(arguments);
    },

    nextPage: function() {
        var me = this;
        var layout = me.cardContainer.getLayout();

        me.nextButton.setText('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'next','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'next','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Weiter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'next','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
        me.previousButton.show();

        if (layout.getNext()) {
            layout.next();

            if (!layout.getNext()) {
                me.nextButton.setText('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'finish','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'finish','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zum Modul<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'finish','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
            }
        } else {
            me.finish();
        }
    },

    previousPage: function() {
        var me = this;
        var layout = me.cardContainer.getLayout();

        me.nextButton.setText('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'next','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'next','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Weiter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'next','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');

        if (layout.getPrev()) {
            layout.prev();
        }
        me.previousButton.show();
        if (!layout.getPrev()) {
            me.previousButton.hide();
        }
    },

    finish: function() {
        var me = this;
        me.fireEvent('finish');
        me.destroy();
    },

    createItems: function() {
        var me = this;

        me.cardContainer = Ext.create('Ext.container.Container', {
            region: 'center',
            layout: 'card',
            items: [
                me.createFirstPage(),
                me.createSecondPage(),
                me.createFinishPage()
            ]
        });
        return [me.cardContainer];
    },

    createFirstPage: function() {
        var image = '/themes/Backend/ExtJs/backend/_resources/images/customer_stream/quick_view.jpg';
        if (Ext.userLanguage === 'de') {
            image = '/themes/Backend/ExtJs/backend/_resources/images/customer_stream/quick_view_de.jpg';
        }

        return Ext.create('Ext.container.Container', {
            html: '' +
            '<h1 class="headline">' +
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'wizard_customer_quick_view_headline','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'wizard_customer_quick_view_headline','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kundenübersicht<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'wizard_customer_quick_view_headline','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' +
            '</h1>' +
            '<div class="description">' +
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'wizard_customer_quick_view_text','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'wizard_customer_quick_view_text','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<p>Die Kundenübersicht bietet einen Schnellzugriff auf alle registrierten Kunden.</p><p>Dort befinden sich alle relevanten Kundendaten sowie ein Link zur Kontaktaufnahme mit dem Kunden per E-Mail.</p><p>Neben der Freitext-Suche befindet sich auf der linken Seite eine einfache Filtermöglichkeit, mit der Du schnell nach bestimmten Kunden suchen kannst.</p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'wizard_customer_quick_view_text','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' +
            '</div>' +
            '<div class="image">' +
                '<img src="' + image + '" />' +
            '</div>'
        });
    },

    createSecondPage: function() {
        var image = '/themes/Backend/ExtJs/backend/_resources/images/customer_stream/stream_view.jpg';
        if (Ext.userLanguage === 'de') {
            image = '/themes/Backend/ExtJs/backend/_resources/images/customer_stream/stream_view_de.jpg';
        }

        return Ext.create('Ext.container.Container', {
            html: '' +
            '<h1 class="headline">' +
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'wizard_stream_view_headline','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'wizard_stream_view_headline','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customer Stream Übersicht<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'wizard_stream_view_headline','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' +
            '</h1>' +
            '<div class="description">' +
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'wizard_stream_view_text','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'wizard_stream_view_text','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<p>Mit den Customer Streams kannst Du Kunden nach bestimmten Kriterien gruppieren.</p><p>Für diese Gruppierungen kannst Du anschließend Auswertungen erstellen, Marketing-Kampagnen umsetzen, individuelle Shop-Inhalte erzeugen und vieles mehr.</p><p>Damit das Arbeiten mit den Customer Streams für Dich angenehm und schnell ist und Du schnellstmöglich Ergebnisse zur Verwendung und Filterung in den Streams erhältst, werden die Kundendaten täglich neu analysiert.</p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'wizard_stream_view_text','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' +
            '</div>' +
            '<div class="image">' +
                '<img src="' + image + '" />' +
            '</div>'
        });
    },

    createFinishPage: function() {
        var image = '/themes/Backend/ExtJs/backend/_resources/images/customer_stream/ekw_usage.jpg';
        if (Ext.userLanguage === 'de') {
            image = '/themes/Backend/ExtJs/backend/_resources/images/customer_stream/ekw_usage_de.jpg';
        }

        return Ext.create('Ext.container.Container', {
            html: '' +
            '<h1 class="headline">' +
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'wizard_usage_headline','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'wizard_usage_headline','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Verwendbarkeit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'wizard_usage_headline','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' +
            '</h1>' +
            '<div class="description">' +
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'wizard_usage_text','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'wizard_usage_text','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<p>Die Customer Streams bieten eine starke Wiederverwendbarkeit in Deinem Shop.</p><p>So kannst Du zum Beispiel eigene Einkaufswelten pro Customer Stream definieren, um auf die individuellen Wünsche Deiner Kunden einzugehen.</p><p>Des Weiteren ist es Dir so möglich, Gutscheine für bestimmte Kunden einzuschränken oder Newsletter an die verschiedenen Streams zu versenden.</p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'wizard_usage_text','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' +
            '</div>' +
            '<div class="image">' +
                '<img src="' + image + '" />' +
            '</div>'
        });
    },

    createDockedItems: function() {
        var me = this;

        me.nextButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'next','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'next','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Weiter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'next','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'primary',
            handler: Ext.bind(me.nextPage, me)
        });

        me.previousButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'back','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'back','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zurück<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'back','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'secondary',
            hidden: true,
            handler: Ext.bind(me.previousPage, me)
        });

        me.skipButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'skip','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'skip','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Überspringen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'skip','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'secondary',
            handler: Ext.bind(me.finish, me)
        });

        return [{
            xtype: 'toolbar',
            dock: 'bottom',
            ui: 'shopware-ui',
            items: [me.skipButton, '->', me.previousButton, me.nextButton]
        }];
    }
});
// 
<?php }} ?>