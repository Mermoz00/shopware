<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:12
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/component/Shopware.form.field.AceEditor.js" */ ?>
<?php /*%%SmartyHeaderCode:8593282855f588358276728-04045314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '391350398e44a866135d332228470c7973d2390c' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/base/component/Shopware.form.field.AceEditor.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8593282855f588358276728-04045314',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835827c457_32892635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835827c457_32892635')) {function content_5f58835827c457_32892635($_smarty_tpl) {?>/**
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
 * @copyright  Copyright (c) shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     shopware AG
 */

Ext.define('Shopware.form.field.AceEditor', {
    /**
     * @string
     */
    extend: 'Ext.form.field.TextArea',

    /**
     * @array
     */
    alias: ['widget.ace-editor', 'widget.codemirrorfield', 'widget.codemirror'],

    /**
     * @string
     */
    layout: 'fit',

    /**
     * @boolean
     */
    border: false,

    /**
     * @string
     */
    fontSize: '12px',

    /**
     * @string
     */
    theme: 'clouds',

    /**
     * @boolean
     */
    printMargin: false,

    /**
     * @integer
     */
    printMarginColumn: 80,

    /**
     * @boolean
     */
    highlightActiveLine: true,

    /**
     * @boolean
     */
    highlightGutterLine: true,

    /**
     * @boolean
     */
    highlightSelectedWord: true,

    /**
     * @boolean
     */
    showGutter: true,

    /**
     * @boolean
     */
    fullLineSelection: true,

    /**
     * @string
     */
    tabSize: 4,

    /**
     * @boolean
     */
    useSoftTabs: false,

    /**
     * @boolean
     */
    showInvisible: false,

    /**
     * @boolean
     */
    useWrapMode: true,

    /**
     * @boolean
     */
    codeFolding: true,

    /**
     * @integer
     */
    height: 200,

    /**
     * @boolean
     */
    useWorker: true,

    /**
     * Defines alternate names for this class
     * @array
     */
    alternateClassName: [ 'Shopware.form.field.CodeMirror', 'Shopware.form.CodeMirror', 'Ext.form.field.CodeMirror' ],

    /**
     * Truthy, if the editor is already rendered, otherwise falsy.
     * @default false
     * @boolean
     */
    isEditorRendered: false,

    /**
     * Replace field tpl to pre
     * @array
     */
    fieldSubTpl: [
        '<pre id="{id}"',
        '</pre>',
        {
            disableFormats: true
        }
    ],

    /**
     * @object
     */
    listeners: {
        resize: function () {
            if (this.editor) {
                this.fixAutocompleteWidth();
                this.editor.resize();
            }
        },
        activate: function () {
            if (this.editor) {
                this.editor.focus();
            }
        }
    },

    /**
     * Constructor
     *
     * @return object
     */
    constructor: function(config) {
        this.config = config;

        return this.callParent(arguments);
    },

    /**
     * Render the editor
     *
     * @return void
     */
    onRender: function () {
        var me = this;

        me.callParent(arguments);

        if (!me.isEditorRendered) {
            me.initEditor();
        }
    },

    /**
     * Creates the editor
     *
     * @return void
     */
    initEditor: function () {
        var me = this,
            currentModeName = Ext.isObject(me.config.mode) ? me.config.mode.name : me.config.mode;

        if (!Ext.isDefined(currentModeName)) {
            currentModeName = 'html';
        }

        me.editor = ace.edit(me.inputId);
        me.editor.ownerCt = me;
        me.getSession().setMode('ace/mode/' + currentModeName);

        me.fireEvent('setAceEditorMode', me, currentModeName);

        me.editor.getSession().setUseWorker(me.useWorker);
        me.editor.setTheme('ace/theme/' + me.theme);
        me.editor.getSession().setUseWrapMode(me.useWrapMode);
        me.editor.setShowFoldWidgets(me.codeFolding);
        me.editor.setShowInvisibles(me.showInvisible);
        me.editor.setHighlightGutterLine(me.highlightGutterLine);
        me.editor.setHighlightSelectedWord(me.highlightSelectedWord);
        me.editor.renderer.setShowGutter(me.showGutter);
        me.editor.setShowPrintMargin(me.printMargin);
        me.editor.setPrintMarginColumn(me.printMarginColumn);
        me.editor.setHighlightActiveLine(me.highlightActiveLine);
        me.editor.setReadOnly(me.isDisabled() || me.readOnly);
        me.getSession().setTabSize(me.tabSize);
        me.getSession().setUseSoftTabs(me.useSoftTabs);
        me.setValue(me.rawValue);
        me.editor.completers = [];

        if (me.config.completers) {
            me.editor.completers = me.config.completers;
        }

        me.editor.setOptions({
            enableBasicAutocompletion: true,
            enableSnippets: true,
            enableLiveAutocompletion: true
        });

        me.editor.refresh = function() {
            me.editor.renderer.updateFull();
        };

        me.editor.getSession().on('change', function () {
            me.setRawValue(me.getSession().getValue());
            me.fireEvent('change', me);
        }, me);

        me.editor.resize();

        if (!me.editor.completer && !me.editor.getReadOnly()) {
            // make sure completer is initialized
            me.editor.execCommand("startAutocomplete");
            me.editor.completer.detach()
        }

        me.isEditorRendered = true;
        me.fireEvent('editorcreated', me);
    },

    /**
     * Enables the ace-editor
     * @returns void
     */
    enable: function() {
        if (this.editor) {
            this.editor.setReadOnly(false);
        }

        return this.callParent(arguments);
    },

    /**
     * Disables the ace-editor
     * @returns void
     */
    disable: function() {
        if (this.editor) {
            this.editor.setReadOnly(true);
        }

        return this.callParent(arguments);
    },

    /**
     * Returns Ace editor session
     *
     * @return object
     */
    getSession: function () {
        return this.editor.getSession();
    },

    /**
     * Resets the editor value
     *
     * @return void
     */
    reset: function() {
        if (this.editor) {
            this.editor.setValue('');
        }
        this.callParent(arguments);
    },

    /**
     * Returns the value of the Ace editor
     *
     * @public
     * @return [string] Value of the underlying textarea
     */
    getValue: function() {
        if (this.editor) {
            this.getSession().getValue();
        }
        return this.callParent(arguments);
    },

    /**
     * Sets the passed value to the Ace editor
     * and the underlying textarea
     *
     * @param { string } value - The value to set
     * @return { string } The setted value
     */
    setValue: function(value) {
        if (this.editor && (typeof value !== "undefined") && value !== null) {
            this.editor.setValue(value, -1);
        }

        this.config.value = value;

        return this.callParent(arguments);
    },

    /**
     * Sets the focus into the Ace editor
     *
     * @return void
     */
    focus: function() {
        this.editor.focus();
    },

    /**
     * Fixes the autocomplete width
     *
     * @return void
     */
    fixAutocompleteWidth: function() {
        if (this.editor.getReadOnly()) {
            return;
        }

        this.editor.completer.getPopup().container.style.width = (this.getWidth() - 80) + 'px';
        this.editor.completer.getPopup().resize();
    },

    /**
     * Forward readOnly call
     *
     * @param { boolean } value
     */
    setReadOnly: function(value) {
        if (this.editor) {
            this.editor.setReadOnly(value);
        }

        this.callParent(arguments);
    },


    /**
     * Ace-Editor supports only readOnly
     *
     * @param { boolean } value
     */
    setDisabled: function(value) {
        if (this.editor) {
            this.editor.setReadOnly(value);
        }

        this.callParent(arguments);
    },

    /**
     * Destroy also ace editor
     *
     * @return void
     */
    destroy: function () {
        if (this.editor) {
            this.editor.destroy();
        }

        this.callParent(arguments);
    }
});
<?php }} ?>