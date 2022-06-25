define([
    'uiComponent',
    'jquery'
], function(Component, $) {
    return Component.extend({
        defaults: {
            hora: '',
            fechas: []
        },
        initialize: function() {
            this._super();
            this.initializeDate();
        },
        initObservable: function () {
            this._super()
                .observe(['hora'])
                .observe({
                    fechas: []
                });
            return this;
        },
        initializeDate: function() {
            setInterval($.proxy(function() {
                this.hora(new Date().toLocaleTimeString())
            }, this), 1000);
        }
    });
}); 