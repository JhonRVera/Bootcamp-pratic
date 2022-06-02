<?php
namespace Bootcamp\PruebaApi\Model;

class Config 
{
    /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface
     */
    private $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
        
    }
    /**
     * Get if the module is active in the admin panel
     * @param int $storeId Store ID
     * @return bool enabled configuration
     */
    public function getEnabled($storeId = null) {
        return boolval($this->scopeConfig->getValue(
            'pruebaapiapp/general/enable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $storeId
        ));
    }

    public function getApiUrl() {
        return $this->scopeConfig->getValue('pruebaapiapp/general/api_url');
    }
}
