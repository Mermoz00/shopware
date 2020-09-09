//{namespace name="bundle/translation"}

Ext.define('Shopware.apps.SwagBundle.view.detail.Bundle', {
    extend: 'Shopware.model.Container',

    configure: function () {
        return {
            controller: 'SwagBundle',
            association: ['products']
        };
    }
});
