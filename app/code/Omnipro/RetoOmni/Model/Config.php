<?php
namespace Omnipro\RetoOmni\Model;

class Config {
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
        'retoomni/general/enable',
        \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
        $storeId
    ));
}
}
