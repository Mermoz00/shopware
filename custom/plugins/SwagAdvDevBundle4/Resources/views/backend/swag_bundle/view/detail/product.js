//{namespace name="bundle/translation"}

Ext.define('Shopware.apps.SwagBundle.view.detail.Product', {
    extend: 'Shopware.grid.Association',
    alias: 'widget.bundle-view-detail-product',
    title: 'Zugeordnete Produkte',
    height: 200,
    configure: function () {
        return {
            controller: 'SwagBundle',
            columns: {
                name: {},
            }
        };
    },
});
