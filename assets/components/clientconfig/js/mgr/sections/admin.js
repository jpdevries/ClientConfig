Ext.onReady(function() {
    MODx.load({
        xtype: 'clientconfig-page-admin',
        renderTo: 'clientconfig-wrapper-div'
    });
});
 
ClientConfig.page.Admin = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        cls: 'container form-with-labels',
        border: false,
        components: [{
            xtype: 'panel',
            html: '<h2>' + _('clientconfig.adminpanel') + '</h2>',
            border: false,
            cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs',
            width: '98%',
            border: true,
            defaults: {
                border: false,
                autoHeight: true,
                defaults: {
                    border: false
                }
            },
            items: [{
                title: _('clientconfig.settings'),
                cls: 'main-wrapper',
                items: [{
                    xtype: 'clientconfig-grid-settings'
                }]
            },{
                title: _('clientconfig.groups'),
                cls: 'main-wrapper',
                items: [{
                    xtype: 'clientconfig-grid-groups'
                }]
            }]
        }],
        buttons: [{
            text: _('clientconfig.to_client_view'),
            handler: this.toClientView,
            scope: this
        }]
    });
    ClientConfig.page.Admin.superclass.constructor.call(this,config);
};
Ext.extend(ClientConfig.page.Admin,MODx.Component,{
    toClientView: function() {
        location.href = MODx.config.manager_url + '?a=' + MODx.request.a;
    }
});
Ext.reg('clientconfig-page-admin',ClientConfig.page.Admin);
