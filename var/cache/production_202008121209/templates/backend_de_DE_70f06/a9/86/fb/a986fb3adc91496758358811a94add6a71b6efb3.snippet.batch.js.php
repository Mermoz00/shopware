<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:23
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/controller/batch.js" */ ?>
<?php /*%%SmartyHeaderCode:13847526185f579093d6b7b0-50228046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a986fb3adc91496758358811a94add6a71b6efb3' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/order/controller/batch.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13847526185f579093d6b7b0-50228046',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579093da1443_14361987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579093da1443_14361987')) {function content_5f579093da1443_14361987($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage Controller
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware Controller - Order backend module
 */
//
Ext.define('Shopware.apps.Order.controller.Batch', {

    /**
     * Extend from the standard ExtJS 4 controller
     * @string
     */
    extend: 'Ext.app.Controller',

    /**
     * All references to get the elements by the applicable selector
     */
    refs: [
        { ref: 'orderListGrid', selector: 'order-list-main-window order-list'},
        { ref: 'batchWindow', selector: 'order-batch-window'},
        { ref: 'batchList', selector: 'order-batch-window batch-list'},
        { ref: 'settingsPanel', selector: 'order-batch-window batch-settings-panel'},
        { ref: 'progressBar', selector: 'order-progress-window progressbar'},
        { ref: 'progressWindow', selector: 'order-progress-window'},
        { ref: 'closeButton', selector: 'order-progress-window button[action=closeWindow]'},
        { ref: 'cancelButton', selector: 'order-progress-window button[action=cancel]'}
    ],

    /**
     * Contains all snippets for the this component
     * @object
     */
    snippets: {
        process: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress_bar','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'progress_bar','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erstelle Dokument [0] von [1] ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'progress_bar','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        done: {
            message: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'done_message','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'done_message','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Alle Dokumente erstellt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'done_message','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'done_title','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'done_title','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dokument-Erstellung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'done_title','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        cancel: {
            brokenOrderMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'broken_order_message','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'broken_order_message','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dokument-Erstellung abgebrochen: Die Bestellung [0] enthält inkonsistente Daten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'broken_order_message','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            message: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cancel_message','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'cancel_message','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dokument-Erstellung abgebrochen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'cancel_message','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cancel_title','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'cancel_title','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Abgebrochen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'cancel_title','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        orderErrorTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'order_error'/'title','default'=>'Error at order [0]','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'batch'/'order_error'/'title','default'=>'Error at order [0]','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fehler bei Bestellung [0]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'batch'/'order_error'/'title','default'=>'Error at order [0]','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        errorTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'error'/'title','default'=>'Error','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'batch'/'error'/'title','default'=>'Error','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fehler<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'batch'/'error'/'title','default'=>'Error','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'growlMessage','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestellungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'growlMessage','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        formInvalid: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'form_invalid','default'=>'Please correct the information in the form','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'settings'/'form_invalid','default'=>'Please correct the information in the form','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please correct the information in the form<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'settings'/'form_invalid','default'=>'Please correct the information in the form','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        noEmailsWillBeSent: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'no_emails_will_be_sent','default'=>'Due to your current configuration no emails will be sent.','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'batch'/'no_emails_will_be_sent','default'=>'Due to your current configuration no emails will be sent.','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aufgrund der aktuellen Konfiguration werden keine E-Mails gesendet.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'batch'/'no_emails_will_be_sent','default'=>'Due to your current configuration no emails will be sent.','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Contains all possible status for the current batch process.
     *
     * @object
     */
    processStatus: {
        waiting: 0,
        cancel: 1,
        working: 2,
        done: 3
    },

    /**
     * Internal helper property which contains the current status of the batch process.
     * Can contains one of the defined "processStatus" values. Switched in the following cases:
     * - User open the batch window => status initialed with "waiting"
     * - User starts the process => status changed to "working"
     * - User clicks the cancel button on the progress window => status changed to "cancel"
     * - The batch process are finished => status changed to "done"
     *
     * The queueProcess function checks if this status is set to "cancel" and abort the current document creation
     *
     * @int
     */
    currentStatus: 0,

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     */
    init: function () {
        var me = this;

        me.control({
            'order-batch-window batch-settings-panel': {
                processChanges: me.onProcessChanges
            },
            'order-progress-window': {
                cancelProcess: me.onCancelProcess
            }
        });

        me.callParent(arguments);
    },

    /**
     * Cancel the document creation.
     */
    onCancelProcess: function () {
        var me = this;

        if (me.currentStatus !== me.processStatus.working) {
            me.refreshProgressWindow();
        }
        me.currentStatus = me.processStatus.cancel;
    },

    /**
     * Event listener method which is fired when the user clicks the "process changes" button
     * on the batch window to create documents for the selected orders or|and change the order or|and payment status.
     *
     * @param formComponent
     */
    onProcessChanges: function (formComponent) {
        var me = this,
            orders = formComponent.records,
            values = formComponent.getValues(),
            orderListGrid = me.getOrderListGrid(),
            gridStore = orderListGrid.getStore(),
            store = Ext.create('Shopware.apps.Order.store.Batch'),
            document = formComponent.down('*[name=documentType]').store.getById(values.documentType),
            attachDocumentsField = formComponent.form.findField('addAttachments'),
            sendEmailsField = formComponent.form.findField('autoSendMail'),
            orderStatusField = formComponent.form.findField('orderStatus'),
            paymentStatusField = formComponent.form.findField('paymentStatus');

        if (!formComponent.form.isValid()) {
            Shopware.Msg.createStickyGrowlMessage({
                title: me.snippets.errorTitle,
                text: me.snippets.formInvalid
            });
            return false;
        }

        var canAttachDocuments = document && attachDocumentsField.getValue(),
            statusHasValue = orderStatusField.getValue() || paymentStatusField.getValue(),
            autoSend = sendEmailsField.getValue();

        if (autoSend && !canAttachDocuments && !statusHasValue){
            Shopware.Msg.createGrowlMessage('', me.snippets.noEmailsWillBeSent);
        }

        me.mode = values.mode;
        orders = me.prepareOrders(orders, values);
        store = me.prepareStoreProxy(store, values);

        // Generate documents? Display progress bar window
        if (!Ext.isEmpty(values.documentType)) {
            me.currentStatus = me.processStatus.working;
            me.getView('batch.Progress').create({
                count: orders.length
            });

            me.queueProcess(document, store, orders, 0, Ext.create('Shopware.apps.Order.store.Batch'));
            return;
        }

        me.syncBatchStore(store, gridStore, orders);
    },

    /**
     * @param { Ext.data.Store } orderStore
     * @param { Ext.data.Store } listingStore
     * @param { Array } orders
     */
    syncBatchStore: function (orderStore, listingStore, orders) {
        var me = this,
            grid = me.getBatchList(),
            resultSet;

        grid.setLoading(true);
        orderStore.add(orders);
        orderStore.sync({
            callback: function (batch) {
                var operation = batch.operations[0],
                    settings = me.getSettingsPanel().getValues();
                resultSet = operation.resultSet ? operation.resultSet.records : operation.records;

                grid.getStore().removeAll();
                grid.getStore().add(resultSet);
                grid.setLoading(false);

                var mailSent = resultSet.some(function (record) {
                    return record.getMail().first();
                });
                // Inform the user if no mail was sent, but the autoSendMail checkbox is active (Occurs when no status change took place for example)
                if (!mailSent && settings && settings.autoSendMail) {
                    Shopware.Msg.createGrowlMessage('', me.snippets.noEmailsWillBeSent);
                }

                Ext.Array.forEach(resultSet, function (batchResult) {
                    if (batchResult.get('success') !== false) {
                        return;
                    }
                    Shopware.Notification.createGrowlMessage(
                        Ext.String.format(me.snippets.orderErrorTitle, batchResult.get('number')),
                        batchResult.get('errorMessage'),
                        'order'
                    )
                });

                listingStore.load();
            }
        });
    },

    /**
     * Add the extra parameters for the document creation.
     *
     * @param { Ext.data.Store } store
     * @param { object } values
     * @returns { Ext.data.Store }
     */
    prepareStoreProxy: function (store, values) {
        store.getProxy().extraParams = {
            docType: values.documentType,
            mode: values.mode,
            forceTaxCheck: 1,
            displayDate: new Date(),
            deliveryDate: new Date(),
            autoSend: values.autoSendMail,
            addAttachments: values.addAttachments
        };

        return store;
    },

    /**
     * @param { Array } orders
     * @param { object } values
     * @returns { Array }
     */
    prepareOrders: function (orders, values) {
        Ext.each(orders, function (order) {
            if (Ext.isDefined(values.orderStatus)) {
                order.set('status', values.orderStatus);
            }
            if (Ext.isDefined(values.paymentStatus)) {
                order.set('cleared', values.paymentStatus);
            }

            order.setDirty();
        });

        return orders;
    },

    /**
     * Internal helper function which allows an synchronous batch processing.
     * The function will add the order of the passed orders array based on the passed index
     * to the store and calls the store.sync() function. In the callback function of the store sync,
     * the function calls themselves.
     *
     * @param { Ext.data.Model } document
     * @param { Shopware.apps.Order.store.Batch } store
     * @param orders
     * @param index
     * @param { Shopware.apps.Order.store.Batch } resultStore
     */
    queueProcess: function (document, store, orders, index, resultStore) {
        var me = this,
            progressBar = me.getProgressBar(),
            snippets = me.snippets,
            percentage = index / orders.length;

        if (index === orders.length) {
            me.finishProcess(orders, resultStore, percentage, false);
            return;
        }

        // Updates the progress bar value and text, the last parameter is the animation flag
        progressBar.updateProgress(percentage, Ext.String.format(snippets.process, index + 1, orders.length), true);

        me.process(document, store, orders, index, resultStore);
    },

    /**
     * Finishes the queue process
     *
     * @param { Array } orders
     * @param { Ext.data.Store } resultStore
     * @param { number } percentage
     * @param { boolean } canceled
     */
    finishProcess: function (orders, resultStore, percentage, canceled) {
        var me = this,
            mailSent = false,
            snippets = me.snippets,
            progressBar = me.getProgressBar(),
            batchStore = me.getBatchList().getStore(),
            settings = me.getSettingsPanel().getValues();

        // Display finish update progress bar and display finish message
        progressBar.updateProgress(percentage, canceled ? '' : snippets.done.message, true);

        // Reload the main order store to show the new generated documents on the detail page
        me.subApplication.getStore('Order').load();

        if (!canceled) {
            // Display shopware notification message that the batch process finished
            Shopware.Notification.createGrowlMessage(snippets.done.title, snippets.done.message, snippets.growlMessage);
        }

        // Refresh the current batch status and enable the close window button.
        me.currentStatus = me.processStatus.done;
        me.refreshProgressWindow(orders);

        // Update the grid in order to set the new status or the mail
        batchStore.removeAll();
        resultStore.each(function (record) {
            if (record.getMail().first() !== undefined) {
                mailSent = true;
            }

            batchStore.add(record);
        });

        // Inform the user if no mail was sent, but the autoSendMail checkbox is active (Occurs when no status change took place for example)
        if (!mailSent && settings && settings.autoSendMail) {
            Shopware.Msg.createGrowlMessage('', me.snippets.noEmailsWillBeSent);
        }

        me.createSingleDocument(orders);
    },

    /**
     * Merge documents if requested and open it in a new window
     *
     * @param { Array } orders
     */
    createSingleDocument: function (orders) {
        var me = this,
            settingValues = me.getSettingsPanel().getValues(),
            orderIds, data;

        if (settingValues.createSingleDocument) {
            orderIds = [];

            Ext.each(orders, function (order) {
                orderIds.push(order.get('id'));
            });

            data = Ext.encode({
                docType: settingValues.documentType,
                orders: orderIds
            });

            window.open('<?php echo '/backend/Order/mergeDocuments';?>?data=' + data, '_blank');
        }
    },

    /**
     * Continues the queue process
     *
     * @param { Ext.data.Model } document
     * @param { Array } orders
     * @param { Ext.data.Store } store
     * @param { Ext.data.Store } resultStore
     * @param { number } index
     */
    process: function (document, store, orders, index, resultStore) {
        var me = this;

        if (!me.checkForCancellation(document, store, orders, index, resultStore)) {
            me.saveDocument(document, orders, store, resultStore, index);
        }
    },

    /**
     * Checks if the document type is a cancellation also input a invoice number is required.
     *
     * @param { Ext.data.Model } document
     * @param { Array } orders
     * @param { Ext.data.Store } store
     * @param { Ext.data.Store } resultStore
     * @param { number } index
     * @returns { boolean }
     */
    checkForCancellation: function (document, store, orders, index, resultStore) {
        var me = this,
            message;

        if ((document.get('numbers') === 'doc_3' && !me.hasDocument(orders[index], document)) ||
            (document.get('numbers') === 'doc_3' && me.mode == 0)) {

            message = Ext.String.format(
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'attachment'/'invoice'/'number'/'hint','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'document'/'attachment'/'invoice'/'number'/'hint','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Betreffende Rechnung:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'document'/'attachment'/'invoice'/'number'/'hint','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 [0] [1] [2]',
                orders[index].get('number'),
                '<br />',
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'attachment'/'invoice'/'number'/'text','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'document'/'attachment'/'invoice'/'number'/'text','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bitte gib die Rechnungsnummer ein, auf die sich die Stornorechnung bezieht:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'document'/'attachment'/'invoice'/'number'/'text','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            );

            // A little delay is required to open the messageBox in the top layer,
            // otherwise the window is behind a modal window.
            Ext.defer(function () {
                Ext.Msg.prompt(
                    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'attachment'/'invoice'/'number','namespace'=>'backend/order/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'document'/'attachment'/'invoice'/'number','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rechnungsnummer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'document'/'attachment'/'invoice'/'number','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', message,
                    function (clickedButtonName, inputText) {
                        if (clickedButtonName !== 'ok' || !inputText) {
                            return;
                        }

                        store.getProxy().extraParams.invoiceNumber = inputText;
                        me.saveDocument(document, orders, store, resultStore, index);
                    }
                );
            }, 200);

            return true;
        }

        return false;
    },

    /**
     * Checks the order for the given document type
     *
     * @param { Ext.data.Model } order
     * @param { Ext.data.Model } document
     * @returns { boolean }
     */
    hasDocument: function (order, document) {
        var result = false;
        order.getReceipt().each(function (doc) {
            if (document.get('id') == doc.get('typeId')) {
                result = true;
                return false;
            }
        });

        return result;
    },

    /**
     * Save the Document by call store.sync
     *
     * @param { Ext.data.Model } document
     * @param { Array } orders
     * @param { Ext.data.Store } store
     * @param { Ext.data.Store } resultStore
     * @param { number } index
     */
    saveDocument: function (document, orders, store, resultStore, index) {
        var me = this;

        store.removeAll();

        // Add the record to the store and sync the store to fire the ajax request
        store.add(orders[index]);

        store.sync({
            callback: Ext.bind(me.afterSaveDocument, me, [document, orders, store, resultStore, index], true)
        });
    },

    /**
     * @param { object } batch
     * @param { Ext.EventObject } event
     * @param { Ext.data.Model } document
     * @param { Array } orders
     * @param { Ext.data.Store } store
     * @param { Ext.data.Store } resultStore
     * @param { number } index
     * @returns { boolean }
     */
    afterSaveDocument: function (batch, event, document, orders, store, resultStore, index) {
        var me = this,
            snippets = me.snippets,
            progressBar = me.getProgressBar(),
            operation = batch.operations[0],
            brokenOrderMessage;

        if (operation.resultSet === Ext.undefined || operation.resultSet.records === Ext.undefined) {
            brokenOrderMessage = Ext.String.format(snippets.cancel.brokenOrderMessage, orders[index].data.number);

            // Update progress bar and display finish message
            progressBar.updateProgress(1, brokenOrderMessage, true);
            me.refreshProgressWindow(orders);

            return false;
        }

        // Add the resulting record to our result store
        resultStore.add(operation.resultSet.records);

        var resultRecord = operation.resultSet.records[0];
        if (resultRecord.get('success') === false) {
            Shopware.Notification.createGrowlMessage(
                Ext.String.format(me.snippets.orderErrorTitle, resultRecord.get('number')),
                resultRecord.get('errorMessage'),
                'order'
            );
        }


        // Checks if the user clicks the cancel button on the detail window.
        if (me.currentStatus === me.processStatus.cancel) {

            // Update progress bar and display finish message
            progressBar.updateProgress(1, snippets.cancel.message, true);

            me.refreshProgressWindow(orders);
            me.finishProcess(orders, resultStore, index / orders.length, true);

            // Display shopware notification growl message to display that the batch process canceled successfully
            Shopware.Notification.createGrowlMessage(snippets.cancel.title, snippets.cancel.message, snippets.growlMessage);
        } else {
            // Increase the array index and call recursive
            me.queueProcess(document, store, orders, index + 1, resultStore);
        }
    },

    /**
     * Internal helper function which called when the batch process finished or canceled.
     * Refresh the progress window elements. Enables the close window button, disable the cancel
     * process button and set the window loading to false.
     *
     * @return void
     */
    refreshProgressWindow: function (orders) {
        var me = this,
            grid = me.getBatchList(),
            store = grid.getStore();

        if (orders.length > 0) {
            // Refresh the grid panel with the changed orders
            store.removeAll();
            store.add(orders);
            grid.reconfigure(store);
        }

        // If the current batch doesn't work, enable the close button
        // Enable the close window button, disable loading mask and disable cancel button
        me.getCloseButton().setDisabled(false);
        me.getCancelButton().setDisabled(true);
        me.getProgressWindow().setLoading(false);
    }
});
//
<?php }} ?>