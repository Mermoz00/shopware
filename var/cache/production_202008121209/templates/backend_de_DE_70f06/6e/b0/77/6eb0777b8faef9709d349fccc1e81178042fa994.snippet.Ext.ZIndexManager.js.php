<?php /* Smarty version Smarty-3.1.12, created on 2020-09-08 16:09:20
         compiled from "/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.ZIndexManager.js" */ ?>
<?php /*%%SmartyHeaderCode:1879824265f579090c9b4d1-74464518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eb0777b8faef9709d349fccc1e81178042fa994' => 
    array (
      0 => '/var/www/html/shopware_test/engine/Library/ExtJs/overrides/Ext.ZIndexManager.js',
      1 => 1598958812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1879824265f579090c9b4d1-74464518',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f579090c9ef91_06567728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f579090c9ef91_06567728')) {function content_5f579090c9ef91_06567728($_smarty_tpl) {?>//
Ext.override(Ext.ZIndexManager, {

    /**
     * Private method which terminates the body
     * and renders the mask into it.
     *
     * This method contains a special shopware behavior.
     * We're endering the mask into the active desktop
     * instead of the body element to support
     * our multiple desktop enviroment.
     *
     * @param [Ext.Component] comp - The component to mask
     * @private
     */
    _showModalMask: function(comp) {
        var me = this,
            zIndex = comp.el.getStyle('zIndex') - 4,
            maskTarget = comp.floatParent ? comp.floatParent.getTargetEl() : comp.container,
            viewSize = maskTarget.getBox(),
            viewport = Shopware.app.Application.viewport;

        if (maskTarget.dom === document.body) {
            viewSize.height = Math.max(document.body.scrollHeight, Ext.dom.Element.getDocumentHeight()) + 1000;
            viewSize.width = Math.max(document.body.scrollWidth, viewSize.width);
        }
        if (!me.mask && !Shopware.app.Application.globalMask) {

            var body = Ext.getBody();
            if(viewport) {
                body = viewport.getActiveDesktop().getEl();
            }

            me.mask = body.createChild({
                cls: Ext.baseCSSPrefix + 'mask'
            });
            me.mask.setVisibilityMode(Ext.Element.DISPLAY);
            me.mask.on('click', me._onMaskClick, me);
            Shopware.app.Application.globalMask = me.mask;
        }

        // Terminate the mask comp which will be displayed
        me.mask = me.mask || Shopware.app.Application.globalMask;

        me.mask.insertAfter(comp.el);
        me.mask.maskTarget = maskTarget;
        maskTarget.addCls(Ext.baseCSSPrefix + 'body-masked');
        me.mask.setBox(viewSize);
        me.mask.setStyle('zIndex', zIndex);
        me.mask.show();
    },

    /**
     * Registers a floating Ext.Component with this ZIndexManager. This should not
     * need to be called under normal circumstances. Floating Components (such as Windows,
     * BoundLists and Menus) are automatically registered with a
     * Ext.Component#zIndexManager zIndexManager at render time.
     *
     * Where this may be useful is moving Windows between two ZIndexManagers. For example,
     * to bring the Ext.MessageBox dialog under the same manager as the Desktop's
     * ZIndexManager in the desktop sample app:
     *
     *     MyDesktop.getDesktop().getManager().register(Ext.MessageBox);
     *
     * @param [Ext.Component] comp The Component to register.
     */
    register : function(comp, skipGlobalRegister, skipInit) {
        var me = this;

        skipInit = skipInit || false;
        skipGlobalRegister = skipGlobalRegister || false;
        if (comp.zIndexManager && !skipGlobalRegister) {
            comp.zIndexManager.unregister(comp);
        }
        if(!skipInit) {
            comp.zIndexManager = me;
        }
        me.list[comp.id] = comp;
        me.zIndexStack.push(comp);
        comp.on('hide', me.onComponentHide, me);
    }
});
//<?php }} ?>