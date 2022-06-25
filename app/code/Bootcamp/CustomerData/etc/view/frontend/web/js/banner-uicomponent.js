define([
    'uiComponent',
    'Bootcamp_CustomerData/js/customer-data'
], function(Component, CustomerData) {
    'use strict';
    return Component.extend({
        defaults: {
            customer: null,
        },
        initialize: function() {
            this._super();
            this.initSubscriptions();
        },
        initSubscriptions: function() {
            this.customer = CustomerData();
        }
    });
}); 