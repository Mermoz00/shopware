<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:15
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/feedback/view/preview/window.js" */ ?>
<?php /*%%SmartyHeaderCode:1006766265f58835b1f3306-71629066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6de603d5e8e651afc53348affe914d13ed414a84' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/feedback/view/preview/window.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1006766265f58835b1f3306-71629066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SHOPWARE_VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835b202d65_56482973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835b202d65_56482973')) {function content_5f58835b202d65_56482973($_smarty_tpl) {?>/**
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

/**
 * Shopware UI - Feedback preview Window
 *
 * This file contains the business logic for the User Manager module. The module
 * handles the whole administration of the backend users.
 */
//
Ext.define('Shopware.apps.Feedback.view.preview.Window', {
    extend: 'Enlight.app.Window',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'title','namespace'=>'backend/feedback/view/preview')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window'/'title','namespace'=>'backend/feedback/view/preview'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Feedback für Vorabversion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window'/'title','namespace'=>'backend/feedback/view/preview'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    alias: 'widget.feedback-preview-window',
    border: false,
    layout: {
        type: 'vbox',
        align: 'stretch'
    },
    autoShow: true,
    height: 550,
    width: 500,
    resizable: false,
    maximizable: false,
    stateful: true,
    stateId: 'feedback-preview-window',

    /**
     * Initializes the component and builds up the main interface
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.addEvents(
            'feedback-show-issue-tracker'
        );

        me.imageComponent = Ext.create('Ext.Img', {
            height: 177,
            src: Ext.String.format(
                '<?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => "themes/Backend/ExtJs/backend/_resources/resources/themes/images/shopware-ui/beta-feedback-thankyou-[0].png", "fullPath" => false), $_smarty_tpl); ?>',
                Ext.userLanguage !== 'de' ? 'en' : Ext.userLanguage
            )
        });

        me.textComponent = Ext.create('Ext.container.Container', {
            padding: 20,
            flex: 1,
            autoScroll: true,
            style: 'background-color: #ffffff;',
            html: Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'info_text','namespace'=>'backend/feedback/view/preview')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window'/'info_text','namespace'=>'backend/feedback/view/preview'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<p><strong>Dein Feedback ist uns wichtig.</strong></p><p>Wir freuen uns, dass Du die Vorabversion der Shopware [0] im Einsatz hast.</p><p>Als Open Company ist uns der stetige Austausch mit unserer großen Community enorm wichtig, denn wir entwicklen unsere Software für Menschen, die sie benutzen - für Dich! Deshalb bitten wir Dich, mögliche Bugs oder Verbesserungswünsche, die Dir in dieser Vorabversion auffallen, an uns mitzuteilen.</p><p>Schicke uns Dein Feedback ganz einfach über unseren <a href="https://issues.shopware.com/#/" target="_blank">Shopware Issue Tracker</a>, den Du alternativ auch jetzt direkt oder über die Funktion „Feedback senden“ öffnen kannst.</p><p>Vielen Dank für Deine Unterstützung,</p><p>Dein Shopware-Team</p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window'/'info_text','namespace'=>'backend/feedback/view/preview'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php echo $_smarty_tpl->tpl_vars['SHOPWARE_VERSION']->value;?>
'),
            styleHtmlContent: true
        });

        me.items = [me.imageComponent, me.textComponent];

        me.checkbox = Ext.create('Ext.form.field.Checkbox', {
            padding: '0 0 0 5px',
            itemId: 'disablePreviewFeedback',
            width: 150,
            boxLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'do_not_show_again','namespace'=>'backend/feedback/view/preview')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window'/'do_not_show_again','namespace'=>'backend/feedback/view/preview'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nicht mehr anzeigen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window'/'do_not_show_again','namespace'=>'backend/feedback/view/preview'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        me.cancelButton = Ext.create('Ext.button.Button', {
            cls: 'secondary',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'cancel','namespace'=>'backend/feedback/view/preview')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window'/'cancel','namespace'=>'backend/feedback/view/preview'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Abbrechen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window'/'cancel','namespace'=>'backend/feedback/view/preview'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function() {
                me.close();
            }
        });

        me.issueTrackerButton = Ext.create('Ext.button.Button', {
            cls: 'primary',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'open_issuetracker','namespace'=>'backend/feedback/view/preview')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window'/'open_issuetracker','namespace'=>'backend/feedback/view/preview'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Issue Tracker öffnen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'window'/'open_issuetracker','namespace'=>'backend/feedback/view/preview'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function() {
                me.fireEvent('feedback-show-issue-tracker', me);
            }
        });

        me.dockedItems = [{
            xtype: 'toolbar',
            dock: 'bottom',
            items:[me.checkbox, '->', me.cancelButton, me.issueTrackerButton]
        }];

        me.callParent(arguments);
    }
});
//
<?php }} ?>