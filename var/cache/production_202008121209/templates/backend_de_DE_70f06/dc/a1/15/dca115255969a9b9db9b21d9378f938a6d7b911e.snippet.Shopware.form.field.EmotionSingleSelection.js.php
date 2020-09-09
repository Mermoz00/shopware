<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.EmotionSingleSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:5252980695f5883585642b8-29775709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dca115255969a9b9db9b21d9378f938a6d7b911e' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.EmotionSingleSelection.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5252980695f5883585642b8-29775709',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835856ea24_59060296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835856ea24_59060296')) {function content_5f58835856ea24_59060296($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

//

Ext.define('Shopware.form.field.EmotionSingleSelection', {
    extend: 'Shopware.form.field.SingleSelection',
    alias: 'widget.shopware-form-field-emotion-single-selection',
    iconStyling: 'width:16px; height:16px; display:inline-block; margin-right:5px',
    snippets: {
        desktop: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'desktop')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'desktop'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Für Desktop Computer sichtbar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'desktop'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        tabletLandscape: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'tabletLandscape')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'tabletLandscape'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Für Tablet Landscape Geräte sichtbar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'tabletLandscape'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        tablet: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'tablet')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'tablet'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Für Tablet Portrait Geräte sichtbar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'tablet'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        mobileLandscape: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'mobileLandscape')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'mobileLandscape'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Für mobile Landscape Geräte sichtbar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'mobileLandscape'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        mobile: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'mobile')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'mobile'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Für mobile Portrait Geräte sichtbar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'grid'/'renderer'/'mobile'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    getComboConfig: function() {
        var me = this;
        var config = me.callParent(arguments);

        config.tpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '<div class="x-boundlist-item">' +
                '' +
                    '{name}   {[this.getDevices(values)]}' +
                '' +
                '</div>',
            '</tpl>',
            {
                getDevices: function(values) {
                    var devices = '';

                    // Device detection
                    if(values.device.indexOf('0') >= 0) {
                        devices += '<div class="sprite-imac" style="' + me.iconStyling + '" title="' + me.snippets.desktop + '">&nbsp;</div>';
                    }
                    if(values.device.indexOf('1') >= 0) {
                        devices += '<div class="sprite-ipad--landscape" style="' + me.iconStyling + '" title="' + me.snippets.tabletLandscape + '">&nbsp;</div>';
                    }
                    if(values.device.indexOf('2') >= 0) {
                        devices += '<div class="sprite-ipad--portrait" style="' + me.iconStyling + '" title="' + me.snippets.tablet + '">&nbsp;</div>';
                    }
                    if(values.device.indexOf('3') >= 0) {
                        devices += '<div class="sprite-iphone--landscape" style="' + me.iconStyling + '" title="' + me.snippets.mobileLandscape + '">&nbsp;</div>';
                    }
                    if(values.device.indexOf('4') >= 0) {
                        devices += '<div class="sprite-iphone--portrait" style="' + me.iconStyling + '" title="' + me.snippets.mobile + '">&nbsp;</div>';
                    }

                    return '<div style="float: right;">' + devices + '</div>';
                }
            }
        );

        config.displayTpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '{name}',
            '</tpl>'
        );

        return config;
    }
});
<?php }} ?>