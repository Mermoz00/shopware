<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:24
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article/view/esd/detail.js" */ ?>
<?php /*%%SmartyHeaderCode:3563255425f579094069687-41547874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66df89022e184e1d247160e49060c846ea75c9d5' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article/view/esd/detail.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3563255425f579094069687-41547874',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f5790940a76b5_42031884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5790940a76b5_42031884')) {function content_5f5790940a76b5_42031884($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Esd
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Article esd page
 */
//
//
Ext.define('Shopware.apps.Article.view.esd.Detail', {

    /**
     * Extend from the standard ExtJS 4
     * @string
     */
    extend: 'Ext.panel.Panel',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias: 'widget.article-esd-detail',

    /**
     * Set css class
     * @string
     */
    cls: Ext.baseCSSPrefix + 'article-esd-detail',

    /**
     * The view needs to be scrollable
     * @string
     */
    autoScroll: true,

    layout: {
        align: 'stretch',
        type: 'hbox'
    },

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        esdInfo:{
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'esdinfo'/'title','default'=>'ESD-Version','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'esdinfo'/'title','default'=>'ESD-Version','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ESD-Version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'esdinfo'/'title','default'=>'ESD-Version','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            article: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'esdinfo'/'artcile','default'=>'Article:','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'esdinfo'/'artcile','default'=>'Article:','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikel:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'esdinfo'/'artcile','default'=>'Article:','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            serialAdministration: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'esdinfo'/'serial_administration','default'=>'Serial administration:','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'esdinfo'/'serial_administration','default'=>'Serial administration:','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Seriennummern verwalten:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'esdinfo'/'serial_administration','default'=>'Serial administration:','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            enableSerialAdministration: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'esdinfo'/'enable_serial_administration','default'=>'Enables the administration of serials','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'esdinfo'/'enable_serial_administration','default'=>'Enables the administration of serials','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Schaltet die Verwaltung von Seriennummern frei<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'esdinfo'/'enable_serial_administration','default'=>'Enables the administration of serials','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },

        fileInfo:{
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileinfo'/'title','default'=>'File-Info','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileinfo'/'title','default'=>'File-Info','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Datei-Informationen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileinfo'/'title','default'=>'File-Info','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            downloadFile: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileinfo'/'download_file','default'=>'Download file','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileinfo'/'download_file','default'=>'Download file','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Datei herunterladen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileinfo'/'download_file','default'=>'Download file','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            noFile: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileinfo'/'no_file','default'=>'No file choosen','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileinfo'/'no_file','default'=>'No file choosen','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keine Datei ausgewählt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileinfo'/'no_file','default'=>'No file choosen','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },

        fileUpload:{
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileupload'/'title','default'=>'File-Upload','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'title','default'=>'File-Upload','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Datei hochladen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'title','default'=>'File-Upload','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            selection: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileupload'/'selection','default'=>'Selection','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'selection','default'=>'Selection','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Auswahl<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'selection','default'=>'Selection','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            selectFile: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileupload'/'download_file','default'=>'Select file','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'download_file','default'=>'Select file','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Datei auswählen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'download_file','default'=>'Select file','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dropZoneText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileupload'/'drop_zone_text','default'=>'Upload file via Drag and Drop','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'drop_zone_text','default'=>'Upload file via Drag and Drop','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dateien per Drag+Drop hochladen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'drop_zone_text','default'=>'Upload file via Drag and Drop','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            buttonOverwrite: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileupload'/'buttonOverwrite','default'=>'Overwrite','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'buttonOverwrite','default'=>'Overwrite','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Überschreiben<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'buttonOverwrite','default'=>'Overwrite','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            buttonRename: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileupload'/'buttonRename','default'=>'Rename','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'buttonRename','default'=>'Rename','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Umbenennen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'buttonRename','default'=>'Rename','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            buttonCancel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileupload'/'buttonCancel','default'=>'Cancel','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'buttonCancel','default'=>'Cancel','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Abbrechen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'buttonCancel','default'=>'Cancel','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            renameMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileupload'/'reanameMessage','default'=>'You file has been renamed to [0]','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'reanameMessage','default'=>'You file has been renamed to [0]','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Datei wurde umbenannt in [0]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'reanameMessage','default'=>'You file has been renamed to [0]','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

        fileChoose:{
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'filechoose'/'title','default'=>'Choose File','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'filechoose'/'title','default'=>'Choose File','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Datei wählen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'filechoose'/'title','default'=>'Choose File','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            pleaseChoose: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileupload'/'please_choose','default'=>'Please choose...','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'please_choose','default'=>'Please choose...','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bitte wählen...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileupload'/'please_choose','default'=>'Please choose...','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    /**
     * Initialize the Shopware.apps.Article.view.esd.List and defines the necessary default configuration
     * @return void
     */
    initComponent: function () {
        var me = this;

        me.registerEvents();
        me.items = me.getItems();

        me.callParent(arguments);
    },

    /**
     * Defines additional events which will be fired from the component
     *
     * @return void
     */
    registerEvents: function () {
        this.addEvents(
            /**
             * @event downloadFile
             */
            'downloadFile',

            /**
             * @event backToList
             */
            'backToList',

            /**
             * @event hasSerialsChanged
             * @param [boolean]
             */
            'hasSerialsChanged',

            /**
             * @event fileChange
             * @param [string]
             */
            'fileChanged'
        );
    },

    /**
     * Creates the items
     *
     * @return [array] items
     */
    getItems: function() {
        var me = this;
        return [
            {
                xtype: 'container',
                padding: 10,
                flex: 4,
                layout: {
                    align: 'stretch',
                    type: 'vbox'
                },
                items: [
                    me.getEsdInfoPanel(),
                    {
                        xtype: 'article-esd-serials',
                        store: me.serialStore,
                        disabled: !me.esdRecord.get('hasSerials'),
                        flex: 1
                    }
                ]
            },
            {
                xtype: 'container',
                padding: 10,
                flex: 2,
                items: [
                    me.getFileInfoPanel(),
                    me.getFileUploadPanel(),
                    me.getFileChoosePanel()
                ]
            }
        ];
    },

    /**
     * @return [object]
     */
    getEsdInfoPanel: function() {
        var me = this;

        var name = me.esdRecord.get('name');

        if (me.esdRecord.get('additionalText')) {
            name = name + ' - ' + me.esdRecord.get('additionalText');
        }

        return  {
            xtype: 'form',
            margin: '0 0 10',
            flex: 0,
            defaults: {
                labelWidth: 155
            },
            bodyPadding: 10,
            title: me.snippets.esdInfo.title,
            items: [
                {
                    xtype: 'displayfield',
                    readonly: true,
                    value: name,
                    fieldLabel: me.snippets.esdInfo.article,
                    anchor: '100%'
                },
                {
                    xtype: 'checkboxfield',
                    fieldLabel: me.snippets.esdInfo.serialAdministration,
                    boxLabel: me.snippets.esdInfo.enableSerialAdministration,
                    checked: me.esdRecord.get('hasSerials'),
                    anchor: '100%',
                    handler: function(checkbox, checked) {
                        me.fireEvent('hasSerialsChanged', checked);
                    }
                }
            ]
        };
    },


    /**
     * Creates the XTemplate for the file information panel
     *
     * @return [object] generated Ext.XTemplate
     */
    createInfoPanelTemplate: function() {
        var me = this;
        return new Ext.XTemplate(
            '<tpl for=".">',
            '<tpl if="file">',
            '<p><span style="font-weight: bold;">Dateiname:</span> {file}</p>',
            '<tpl else>',
            '<p>' + me.snippets.fileInfo.noFile + '</p>',
            '</tpl>',
            '</tpl>'
        );
    },

    /**
     * Returns the fileinfo panel
     *
     * @return [object]
     */
    getFileInfoPanel: function() {
        var me = this;

        me.infoView = Ext.create('Ext.view.View', {
            tpl: me.createInfoPanelTemplate(),
            margin: '0 0 12',
            data: me.esdRecord.data
        });

        me.downloadButton = Ext.create('Ext.button.Button', {
            iconCls: 'sprite-inbox-download',
            text: me.snippets.fileInfo.downloadFile,
            action: 'downloadFile',
            handler: function() {
                me.fireEvent('downloadFile');
            }
        });

        return {
            xtype: 'panel',
            margin: '0 0 10',
            bodyPadding: 8,
            title: me.snippets.fileInfo.title,
            items: [
                me.infoView,
                me.downloadButton
            ]
        };
    },


    /**
     * Creates the drop zone for article images
     * @return Shopware.app.FileUpload
     */
    getMediaDropZone: function() {
        var me = this;
        var confirmationCallback = function (apply) {
            if (apply === 'cancel') {
                return;
            }

            me.fileUpload.on('fileUploaded', function () {
                me.fileUpload.requestURL = '<?php echo '/backend/article/uploadEsdFile';?>';
            }, { single: true });

            if (apply === 'yes') {
                me.fileUpload.requestURL = '<?php echo '/backend/article/uploadEsdFile/uploadMode/overwrite';?>';
                me.fileUpload.reuploadFiles();
            }
            if (apply === 'no') {
                me.fileUpload.requestURL = '<?php echo '/backend/article/uploadEsdFile/uploadMode/rename';?>';
                me.fileUpload.reuploadFiles();
            }
        };

        return me.fileUpload = Ext.create('Shopware.app.FileUpload', {
            name: 'drop-zone',
            requestURL: '<?php echo '/backend/article/uploadEsdFile';?>',
            showInput: false,
            padding:0,
            checkSize: false,
            checkType: false,
            checkAmount: false,
            enablePreviewImage: false,
            dropZoneText: me.snippets.fileUpload.dropZoneText,
            listeners: {
                uploadFailed: function (response) {
                    if (!response.hasOwnProperty('fileExists')) {
                        return;
                    }

                    Ext.MessageBox.confirm(me.getMessageBoxConfig('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileexists'/'title','default'=>'File already exists','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileexists'/'title','default'=>'File already exists','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Die Datei existiert bereits<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileexists'/'title','default'=>'File already exists','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'fileexists'/'message','default'=>'Do you want to overwrite the existing file?','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileexists'/'message','default'=>'Do you want to overwrite the existing file?','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Möchtest Du die Datei überschreiben?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'fileexists'/'message','default'=>'Do you want to overwrite the existing file?','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', confirmationCallback));
                },
                fileUploaded: function (target, response) {
                    if (!response.hasOwnProperty('newName')) {
                        return;
                    }


                    Ext.Msg.alert('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'esd'/'detail'/'rename'/'title','default'=>'Upload','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'rename'/'title','default'=>'Upload','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Umbenennen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'esd'/'detail'/'rename'/'title','default'=>'Upload','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', Ext.String.format(me.snippets.fileUpload.renameMessage, response.newName));
                }
            }
        });
    },

    getMessageBoxConfig: function(title, message, callback) {
        var me = this;
        return {
            title: title,
            icon: Ext.Msg.QUESTION,
            msg: message,
            buttons: Ext.Msg.YESNOCANCEL,
            buttonText: {
                yes: me.snippets.fileUpload.buttonOverwrite,
                no: me.snippets.fileUpload.buttonRename,
                cancel: me.snippets.fileUpload.buttonCancel
            },
            callback: callback
        };
    },

    getFileUploadPanel: function() {
        var me = this;

        me.uploadField  = Ext.create('Ext.form.field.File', {
            buttonOnly: false,
            xtype: 'filefield',
            margin: '0 0 10',
            fieldLabel: me.snippets.fileUpload.selection,
            labelWidth: 60,
            anchor: '100%',
            buttonText : me.snippets.fileUpload.selectFile,
            listeners: {
                scope: this,
                afterrender: function(btn) {
                    btn.fileInputEl.dom.multiple = true;
                },
                change: function(field) {
                    me.fireEvent('mediaUpload', field);
                }
            },
            buttonConfig : {
                iconCls: 'sprite-inbox-upload',
                cls: 'small secondary'
            }
        });

        return {
            xtype: 'form',
            margin: '0 0 10',
            bodyPadding: 10,
            title: me.snippets.fileUpload.title,
            items: [
                me.uploadField,
                me.getMediaDropZone()
            ]
        };
    },

    getFileChoosePanel: function() {
        var me = this;

        return {
            xtype: 'panel',
            layout: {
                type: 'anchor'
            },
            bodyPadding: 10,
            title: me.snippets.fileChoose.title,
            items: [
                {
                    xtype: 'combobox',
                    store: me.fileStore,
                    valueField: 'filename',
                    forceSelection: true,
                    queryMode: 'local',
                    displayField: 'filename',
                    fieldLabel: 'Datei',
                    emptyText: me.snippets.fileChoose.pleaseChoose,
                    anchor: '100%',
                    listeners: {
                        select: function(field, records) {
                            var filename = records[0].get('filename');
                            me.fireEvent('fileChanged', filename);
                        }
                    }
                }
            ]
        };
    }
});
//
<?php }} ?>