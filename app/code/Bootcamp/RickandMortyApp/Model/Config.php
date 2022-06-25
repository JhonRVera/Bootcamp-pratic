<<<<<<< HEAD
<?php
namespace Bootcamp\RickandMortyApp\Model;

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
            'rickandmortyapp/general/enable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $storeId
        ));
    }

    public function getApiUrl() {
        return $this->scopeConfig->getValue('rickandmortyapp/general/api_url');
    }
}
=======
<?php
namespace Bootcamp\RickandMortyApp\Model;

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
            'rickandmortyapp/general/enable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $storeId
        ));
    }

    public function getApiUrl() {
        return $this->scopeConfig->getValue('rickandmortyapp/general/api_url');
    }
}
>>>>>>> 0076efc0cb4a3cc2adda505b9857017ff428095e
