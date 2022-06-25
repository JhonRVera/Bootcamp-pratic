<?php
namespace Bootcamp\CustomerData\Plugin\Frontend;

use \Magento\Customer\CustomerData\Customer;

class CustomerDataPlugin
{
    /**
     * @var \Magento\Customer\Helper\Session\CurrentCustomer
     */
    private $currentCustomer;

    public function __construct(
        \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer
    )
    {
        $this->currentCustomer = $currentCustomer;

    }

    public function afterGetSectionData(Customer $customer, $customerData) {
        if($this->currentCustomer->getCustomerId()) {
            $customerData['isOnline'] = true;
        }
        return $customerData;
    }
}