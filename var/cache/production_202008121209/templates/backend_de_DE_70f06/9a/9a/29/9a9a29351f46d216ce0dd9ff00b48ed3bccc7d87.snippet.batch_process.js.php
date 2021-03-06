<?php /* Smarty version Smarty-3.1.12, created on 2020-09-09 09:25:14
         compiled from "/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article_list/controller/batch_process.js" */ ?>
<?php /*%%SmartyHeaderCode:14002527865f58835a5937c8-11096724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a9a29351f46d216ce0dd9ff00b48ed3bccc7d87' => 
    array (
      0 => '/var/www/html/shopware_test/themes/Backend/ExtJs/backend/article_list/controller/batch_process.js',
      1 => 1598958813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14002527865f58835a5937c8-11096724',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f58835a5c6432_16736941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58835a5c6432_16736941')) {function content_5f58835a5c6432_16736941($_smarty_tpl) {?>/**
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

/**
 * The batchProcess controller handles the batch process
 */
//
//
Ext.define('Shopware.apps.ArticleList.controller.BatchProcess', {

    /**
     * The parent class that this class extends.
     * @string
     */
    extend: 'Ext.app.Controller',

    refs: [
        { ref:'navigationGrid', selector:'multi-edit-navigation-grid' },
        { ref:'mainGrid', selector:'multi-edit-main-grid' },
        { ref:'batchWindow', selector:'multi-edit-batch-process-window' },
        { ref:'batchGrid', selector:'multi-edit-batch-process-grid' }
    ],

    /**
     * Reference to the progressWindow (if existing)
     */
    progressWindow: undefined,

    /**
     * Canceled flag: Indicated that the current process should be canceled after the next call
     */
    cancel: false,

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     *
     * @return void
     */
    init: function () {
        var me = this;

        me.control({
            'multi-edit-menu': {
                openBatchProcessWindow: me.onOpenBatchProcessWindow
            },
            'multi-edit-batch-process-grid': {
                editRow: me.onEditRow,
                deleteRow: me.onDeleteRow,
                setEditor: me.onSetEditor,
                addRow: me.onAddRow
            },
            'multi-edit-batch-process-window button[action=addToQueueAndRun]': {
                click: me.onAddToQueueAndRun
            }
        });

        me.callParent(arguments);
    },

    /**
     * Convenience method to show a sticky growl message
     *
     * @param message
     */
    showError: function(message) {
        var me = this;

        Shopware.Notification.createStickyGrowlMessage({
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'error','default'=>'Error','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'error','default'=>'Error','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fehler<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'error','default'=>'Error','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            text: message,
            log: true
        },
        'ArticleList');
    },

    /**
     * Return an array of operations defined in the store
     *
     * @param store
     * @returns Object
     */
    getOperationArray: function(store) {
        var operations = [];

        Ext.each(store.data.items, function(record, index, array) {
            operations.push({ 'column': record.get('column'), 'operator': record.get('operator'), 'value': record.get('value') });
        });

        return operations;
    },

    /**
     * Callback method triggered, after the user presses the 'add to queue and run' button. Will
     * basically first add items to queue and then immidately run the batch processing
     */
    onAddToQueueAndRun: function() {
        var me = this,
            config;

        Ext.MessageBox.confirm(
            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'confirmAddToQueueTitle','default'=>'Add to queue?','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'confirmAddToQueueTitle','default'=>'Add to queue?','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add to queue?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'confirmAddToQueueTitle','default'=>'Add to queue?','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'confirmAddToQueueMessage','default'=>'You are about to add [0] products to the queue. Do you really want to queue those products to be batch processed with the operations you defined?','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'confirmAddToQueueMessage','default'=>'You are about to add [0] products to the queue. Do you really want to queue those products to be batch processed with the operations you defined?','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Du wirst [0] Produkte zum Queue hinzufügen. Möchtest Du diese Produkte wirklich für die Stapelverarbeitung mit den definierten Operationen vormerken?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'confirmAddToQueueMessage','default'=>'You are about to add [0] products to the queue. Do you really want to queue those products to be batch processed with the operations you defined?','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', me.getBatchProcessWindow().total),
            function (response) {
                if ( response !== 'yes' ) {
                    return;
                }
                config = me.initAddToQueue();
                config.processDirectly = true;

                me.addToQueue(config, 0, 0, 0);
            }
        );
    },

    /**
     * Init queue
     *
     * @returns Object
     */
    initAddToQueue: function() {
        var me = this,
            grid = me.getBatchGrid(),
            store = grid.store,
            operations = me.getOperationArray(store),
            filterArray = me.getBatchWindow().filterArray;

        me.cancel = false;

        me.createQueueWindow();

        return { operations: operations, filterArray: filterArray}
    },

    /**
     * Creates a Ext.MessageBox with a progressbar in order to show a process while adding items to queue
     */
    createQueueWindow: function() {
        var me = this;

        me.progressWindow = Ext.MessageBox.show({
            title        : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'creatingQueue','default'=>'Creating queue for bulk changes','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'creatingQueue','default'=>'Creating queue for bulk changes','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erstelle Queue für die Stapelverarbeitung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'creatingQueue','default'=>'Creating queue for bulk changes','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            msg          : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'importPendingMessageQueue','default'=>'In this step the filtered products are calculated. Additionally a backup will be created, if configured. Depending one the amount of products and the server speed, this might take a while.','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'importPendingMessageQueue','default'=>'In this step the filtered products are calculated. Additionally a backup will be created, if configured. Depending one the amount of products and the server speed, this might take a while.','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
In diesem Schritt werden die gefilterten Produkte ermittelt. Außerdem wird - falls konfiguriert - eine Teilsicherung erzeugt, um die Änderungen später wieder rückgäng machen zu können. Abhängig von der Anzahl der geänderten Produkte und der Servergeschwindigkeit, kann dieser Schritt einige Minuten in Anspruch nehmen.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'importPendingMessageQueue','default'=>'In this step the filtered products are calculated. Additionally a backup will be created, if configured. Depending one the amount of products and the server speed, this might take a while.','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            width        : 500,
            progress     : true,
            closable     : false,
            buttons      : Ext.MessageBox.CANCEL,
            fn           : function(buttonId, text, opt) {

                if (buttonId !== 'cancel') {
                    return;
                }

                // Set the cancel property to true in order to cancel the migration
                // after the next request
                me.cancel = true;
            }
        });

        // workaround to set the height of the MessageBox
        me.progressWindow.setSize(500, 200);
        me.progressWindow.doLayout();

        me.progressWindow.progressBar.reset();
        me.progressWindow.progressBar.animate = true;
        me.progressWindow.progressBar.updateProgress(0, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'startingAddToQueue','default'=>'Adding to queue...','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'startingAddToQueue','default'=>'Adding to queue...','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Füge zum Queue hinzu...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'startingAddToQueue','default'=>'Adding to queue...','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
    },

    /**
     * Creates a Ext.MessageBox with a progressbar for the batch process
     */
    createBatchWindow: function() {
        var me = this;

        me.progressWindow = Ext.MessageBox.show({
            title        : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'creatingBatchWindow','default'=>'Batch-changing products','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'creatingBatchWindow','default'=>'Batch-changing products','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Führe Stapelverarbeitung durch<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'creatingBatchWindow','default'=>'Batch-changing products','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            msg          : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'importPendingMessageBatch','default'=>'In this step your changes will be applied to the filtered products. This is quite fast in most cases. If not, try to disable cache invalidation in the ArticleList plugin configuration.','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'importPendingMessageBatch','default'=>'In this step your changes will be applied to the filtered products. This is quite fast in most cases. If not, try to disable cache invalidation in the ArticleList plugin configuration.','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
In diesem Schritt werden die gewünschten Änderungen vorgenommen. Das geschieht in den meisten Fällen recht schnell - falls nicht, sollte in der Plugin-Konfiguration die Option »Cache für Produkte leeren« deaktiviert werden.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'importPendingMessageBatch','default'=>'In this step your changes will be applied to the filtered products. This is quite fast in most cases. If not, try to disable cache invalidation in the ArticleList plugin configuration.','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            width        : 500,
            progress     : true,
            closable     : false,
            buttons      : Ext.MessageBox.CANCEL,
            fn           : function(buttonId, text, opt) {

                if (buttonId !== 'cancel') {
                    return;
                }

                // Set the cancel property to true in order to cancel the migration
                // after the next request
                me.cancel = true;
            }
        });

        // Workaround to set the height of the MessageBox
        me.progressWindow.setSize(500, 180);
        me.progressWindow.doLayout();

        me.progressWindow.progressBar.reset();
        me.progressWindow.progressBar.animate = true;
        me.progressWindow.progressBar.updateProgress(0, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'startingImport','default'=>'Starting BatchProcess ...','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'startingImport','default'=>'Starting BatchProcess ...','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Starte die Stapelverarbeitung...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'startingImport','default'=>'Starting BatchProcess ...','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
    },

    /**
     * Called recursively until all items have been added to queue.
     *
     * @param config
     * @param offset
     * @param queueId
     * @param startTime
     */
    addToQueue: function(config, offset, queueId, startTime) {
        var me = this;

        if (me.cancel) {
            me.cancel = false;
            return;
        }

        if (!startTime || startTime == 0) {
            startTime = new Date().getTime() / 1000;
        }

        Ext.Ajax.request({
            type: 'POST',
            url: '<?php echo '/backend/ArticleList/createQueue';?>',
            timeout: 4000000,
            params : {
                resource: 'product',
                operations: Ext.JSON.encode(config.operations),
                filterArray: config.filterArray,
                offset: offset,
                limit: '<?php echo 2048;?>',
                queueId: queueId
            },
            success: function (response, request) {
                if (!response.responseText) {
                    me.showError('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Es ist ein unbekannter Fehler aufgetreten, bitte überprüfe Deine Server-Logs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                    return;
                }

                var result = Ext.JSON.decode(response.responseText);

                if(!result) {
                    me.progressWindow.close();
                    me.showError(response.responseText);
                }else if(!result.success) {
                    me.progressWindow.close();
                    me.showError(result.message);
                }else{
                    if (result.data.offset < result.data.totalCount) {
                        var eta = me.getETA(startTime, result.data.offset, result.data.totalCount);
                        var progressText =  Ext.String.format(
                            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'processedItems','default'=>'[0] / [1] processed. [2]:[3]:[4] remaining','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'processedItems','default'=>'[0] / [1] processed. [2]:[3]:[4] remaining','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] / [1] verarbeitet. [2]:[3]:[4] Restdauer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'processedItems','default'=>'[0] / [1] processed. [2]:[3]:[4] remaining','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            result.data.offset, result.data.totalCount, eta.hours, eta.minutes, eta.seconds
                        );
                        me.progressWindow.progressBar.updateProgress(result.data.offset/result.data.totalCount, progressText);

                        me.addToQueue(config, result.data.offset, result.data.queueId, startTime);
                    }else{
                        Shopware.Notification.createStickyGrowlMessage({
                                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'createdQueueTitle','default'=>'Created queue','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'createdQueueTitle','default'=>'Created queue','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Queue erzeugt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'createdQueueTitle','default'=>'Created queue','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                                text: Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'createdQueueMessage','default'=>'Created queue for [0] items for this filter: [1]','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'createdQueueMessage','default'=>'Created queue for [0] items for this filter: [1]','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Queue für [0] Produkte mit folgendem Filter erzeugt: [1]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'createdQueueMessage','default'=>'Created queue for [0] items for this filter: [1]','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', result.data.totalCount, me.filterArrayToString(Ext.JSON.decode(config.filterArray))),
                                log: true
                            },
                            'ArticleList'
                        );

                        me.progressWindow.progressBar.updateProgress(1, "Done");
                        me.progressWindow.close();
                        if (config.processDirectly) {
                            if (me.subApplication.backupStore) {
                                me.subApplication.backupStore.reload();
                            }
                            window.setTimeout(function() {
                                me.onInitBatchProcess(result.data.queueId, config);
                            }, 300);
                            return;
                        }
                    }
                }

            },
            failure: function (response, request) {
                if(response.responseText) {
                    me.showError(response.responseText);
                } else {
                    me.showError('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Es ist ein unbekannter Fehler aufgetreten, bitte überprüfe Deine Server-Logs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                }
            }
        });
    },

    /**
     * Helper which returns a human readable string for a given filter array
     *
     * @param filterArray
     * @returns string
     */
    filterArrayToString: function(filterArray) {
        var filterLength = filterArray.length,
            result = [];

        for (var i=0;i<filterLength;i++) {
            result.push(filterArray[i]['token']);
        }
        return result.join(' ');
    },

    /**
     * Starts the batch process for a given id.
     *
     * @param queueId The queue ID
     * @param config Config object with infos such as filterArray and the operators to apply
     */
    onInitBatchProcess: function(queueId, config) {
        var me = this;

        me.cancel = false;

        me.createBatchWindow();

        me.runBatchProcess(queueId, config,0 )
    },

    /**
     * Called recursively until the batch process is done
     *
     * @param queueId
     * @param config
     * @param startTime
     */
    runBatchProcess: function(queueId, config, startTime) {
        var me = this;

        if (!startTime || startTime == 0) {
            startTime = new Date().getTime() / 1000;
        }

        if (me.cancel) {
            me.cancel = false;
            return;
        }

        Ext.Ajax.request({
            url: '<?php echo '/backend/ArticleList/batch';?>',
            timeout: 4000000,
            params : {
                resource: 'product',
                limit: 200,
                queueId: queueId
            },
            success: function (response, request) {
                if (!response.responseText) {
                    me.showError('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Es ist ein unbekannter Fehler aufgetreten, bitte überprüfe Deine Server-Logs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                    return;
                }

                var result = Ext.JSON.decode(response.responseText);

                if(!result) {
                    me.progressWindow.close();
                    me.showError(response.responseText);
                }else if(!result.success) {
                    me.progressWindow.close();
                    me.showError(result.message);
                }else{
                    if (!result.data.done) {
                        var eta = me.getETA(startTime, result.data.processed, result.data.totalCount);
                        var progressText =  Ext.String.format(
                            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'processedItems','default'=>'[0] / [1] processed. [2]:[3]:[4] remaining','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'processedItems','default'=>'[0] / [1] processed. [2]:[3]:[4] remaining','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] / [1] verarbeitet. [2]:[3]:[4] Restdauer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'processedItems','default'=>'[0] / [1] processed. [2]:[3]:[4] remaining','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            result.data.processed, result.data.totalCount, eta.hours, eta.minutes, eta.seconds
                        );
                        me.progressWindow.progressBar.updateProgress(result.data.processed/result.data.totalCount, progressText);

                        me.runBatchProcess(queueId, config, startTime);
                    }else{
                        me.progressWindow.close();
                        me.getMainGrid().store.reload();
                        operationString = Ext.JSON.encode(config.operations);
                        Shopware.Notification.createStickyGrowlMessage({
                                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batchDoneTitle','default'=>'Done','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'batchDoneTitle','default'=>'Done','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fertig<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'batchDoneTitle','default'=>'Done','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                                text: Ext.String.format(
                                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batchDoneMessage','default'=>'Processed [0] items with following rules: [1]','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'batchDoneMessage','default'=>'Processed [0] items with following rules: [1]','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] Produkte mit folgenden Regeln verarbeitet: [1]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'batchDoneMessage','default'=>'Processed [0] items with following rules: [1]','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
\n',
                                        result.data.totalCount,
                                        me.operationsToString(config.operations)
                                ),
                                log: true
                            },
                            'ArticleList'
                        );
                    }
                }

            },
            failure: function (response, request) {
                if(response.responseText) {
                    me.showError(response.responseText);
                } else {
                    me.showError('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Es ist ein unbekannter Fehler aufgetreten, bitte überprüfe Deine Server-Logs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                }
            }
        });
    },

    /**
     * Helper method to return a human readable string for a given operators array
     *
     * @param operations
     * @returns string
     */
    operationsToString: function(operations) {
        var operationsLength = operations.length,
            result = [];

        for (var i=0;i<operationsLength;i++) {
            if (operations[i]['column'] != '' && operations[i]['operation'] != '') {
                result.push(Ext.String.format('[0] [1] [2]', operations[i]['column'], operations[i]['operator'], operations[i]['value']));
            }
        }

        return result.join(',\n');
    },

    /**
     * Calculate the estimated remaining time for a process
     *
     * @param startTime
     * @param processedItems
     * @param totalItems
     * @returns Object
     */
    getETA: function(startTime, processedItems, totalItems) {
        var remainingItems = totalItems - processedItems,
            passedSeconds = new Date().getTime()/1000 - startTime,
            perSecond = passedSeconds  / processedItems,
            remainingSeconds = remainingItems * perSecond,
            hours = ~~(remainingSeconds / 3600),
            minutes = ~~((remainingSeconds - hours*3600)/60),
            seconds = ~~(remainingSeconds - -hours*3600 - minutes*60);

        return {
            hours: hours < 10 ? '0' + hours : hours,
            minutes: minutes < 10 ? '0' + minutes : minutes,
            seconds: seconds < 10 ? '0' + seconds : seconds
        };
    },

    /**
     * Callback method triggered, after the user edited a row
     *
     * @param rowIndex
     */
    onEditRow: function(rowIndex) {
        var me = this,
            emptyRecordAt,
            grid = me.getBatchGrid(),
            store = grid.store,
            record = store.getAt(rowIndex);

        if (!record.get('column') || !record.get('operator')) {
            store.remove( [record] );
        }
    },

    /**
     * Callback method triggered, after the user pressed the 'delete' action button
     *
     * @param rowIndex
     */
    onDeleteRow: function(rowIndex) {
        var me = this,
            grid = me.getBatchGrid(),
            store = grid.store,
            record = store.getAt(rowIndex);

        store.remove( [record] );
    },

    /**
     * Fired when the user clicks the "add row" button
     */
    onAddRow: function() {
        var me = this,
            grid = me.getBatchGrid(),
            store = grid.store,
            record,
            emptyRecordAt;

        // Find an existing, empty record
        emptyRecordAt = store.findBy(function(record) {
            if (!record.get('column') || !record.get('operator')) {
                return true;
            }
        });

        // If there is an empty record - use that one
        if (emptyRecordAt >= 0) {
            record = store.getAt(emptyRecordAt);
        // Else create a new one
        } else {
            record = Ext.create('Shopware.apps.ArticleList.model.Operation',  { });
            store.add(record);
        }

        grid.rowEditing.startEdit(record, 1);
    },

    /**
     * Fired when the user changed the selected column in batch grid.
     * We will need to set the value editor here.
     *
     * @param column
     * @param record
     */
    onSetEditor: function(column, record) {
        var me = this,
            columnName = record.get('name'),
            config;

        config = me.subApplication.getController('Main').getConfigForColumn(columnName);

        column.setEditor({
            xtype: me.getEditorForColumn(config),
            allowBlank: false
        });
    },


    /**
     * Helper method which returns a rowEditing.editor for a given column.
     *
     * @param column
     * @returns Object|boolean
     */
    getEditorForColumn: function(column) {
        // Do create editor for columns, which have been configured to be non-editable
        if (!column.editable) {
            return false;
        }

        switch (column.alias) {
            default:
                switch (column.type) {
                    case 'integer':
                    case 'decimal':
                    case 'float':
                        var precision = 0;
                        if (column.precision) {
                            precision = column.precision
                        } else if (column.type === 'float') {
                            precision = 3;
                        } else if (column.type === 'decimal') {
                            precision = 3;
                        }
                        return { xtype: 'numberfield', decimalPrecision: precision };

                    case 'string':
                    case 'text':
                        return {
                            xtype: 'textfield',
                            maxLength: 2700,  // Issue SW-23934: Due to a problem in PHP (https://bugs.php.net/bug.php?id=70110) long values can lead to a problem parsing the DQL
                        };

                    case 'boolean':
                        return {
                            xtype: 'checkbox',
                            inputValue: 1,
                            uncheckedValue: 0
                        };

                    case 'date':
                        return new Ext.form.DateField({
                            disabled : false,
                            format: 'Y-m-d'
                        });

                    case 'datetime':
                        return new Ext.form.DateField({
                            disabled : false,
                            format: 'Y-m-d H:i:s'
                        });

                        return new Shopware.apps.Base.view.element.DateTime({
                            timeCfg: { format: 'H:i:s' },
                            dateCfg: { format: 'Y-m-d' }
                        });

                    default:
                        console.log('Unknown column: ', column.type);
                        break;
                }
            break;
        }
    },

    /**
     * Return an existing instance of the batchProcess window or create a new one
     *
     * @returns Ext.window
     */
    getBatchProcessWindow: function() {
        var me = this;

        if (me.subApplication.batchProcessWindow && !me.subApplication.batchProcessWindow.isDestroyed) {
            return me.subApplication.batchProcessWindow;
        } else {
            me.subApplication.batchProcessWindow = me.getView('BatchProcess.Window').create({
                editableColumnsStore: Ext.create('Shopware.apps.ArticleList.store.EditableColumns').load({ params: { resource: 'product' }})
            });
            me.subApplication.batchProcessWindow.title = me.setWindowTitle();
        }

        return me.subApplication.batchProcessWindow;
    },

    /**
     * Set the window title
     */
    setWindowTitle: function() {
        var me = this,
            window,
            mainGrid = me.getMainGrid(),
            filterArray = mainGrid.store.getProxy().extraParams.ast;

        if (!me.subApplication.batchProcessWindow || me.subApplication.batchProcessWindow.isDestroyed) {
            return;
        }

        window = me.getBatchProcessWindow();

        if (!me.subApplication.currentFilterName) {
            name = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'unknownFilter','default'=>'Unknown filter','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'unknownFilter','default'=>'Unknown filter','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unbekannter Filter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'unknownFilter','default'=>'Unknown filter','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        } else {
            name = me.subApplication.currentFilterName;
        }

        window.filterArray = filterArray;
        window.total = mainGrid.store.getProxy().reader.rawData.total;
        window.setTitle(
            Ext.util.Format.stripTags(
                window.titleTemplate + ' - ' + name + ' - ' + Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batchProcess'/'window'/'totalTitle','default'=>'[0] products','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'batchProcess'/'window'/'totalTitle','default'=>'[0] products','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] products<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo FroshProfiler\Components\Smarty\SnippetResource::compileSnippetBlock(array('name'=>'batchProcess'/'window'/'totalTitle','default'=>'[0] products','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', window.total, window.filter)
            )
        );

    },

    /**
     * Update the batch process window without loosing the current data
     */
    updateBatchProcessWindow: function() {
        var me = this;

        if (!me.subApplication.batchProcessWindow || me.subApplication.batchProcessWindow.isDestroyed) {
            return;
        }

        me.setWindowTitle();
    },

    /**
     * Callback method triggered, after the user clicked the "batch process" button above the main grid
     */
    onOpenBatchProcessWindow: function() {
        var me = this,
            window = me.getBatchProcessWindow(),
            grid = window.down('grid'),
            store =  me.getStore('Shopware.apps.ArticleList.store.Operation');

        me.setWindowTitle();

        store.load({
            params: {
                resource: 'product'
            }
        });

        window.storeLoaded = true;
        grid.reconfigure(store);

        return window.show();
    }
});
//
<?php }} ?>