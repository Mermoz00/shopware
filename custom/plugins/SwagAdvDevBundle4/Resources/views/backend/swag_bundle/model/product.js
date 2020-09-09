Ext.define('Shopware.apps.SwagBundle.model.Product', {
    extend: 'Shopware.apps.Base.model.Article',
    configure: function () {
        return {
            releted: 'Shopware.apps.SwagBundle.view.detail.Product'
        };
    },
});
