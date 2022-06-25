define([
    'Magento_Customer/js/customer-data'
], function(CustomerData) {
    return function() {
        return CustomerData.get('customer');
    }
}); 