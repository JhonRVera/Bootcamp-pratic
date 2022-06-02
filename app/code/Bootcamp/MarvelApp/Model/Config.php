<?php
namespace Bootcamp\MarvelApp\Model;

use Laminas\Db\Sql\Ddl\Column\Timestamp;

class Config {
     /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface
     */
    private $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\Stdlib\DateTime\DateTime $dateTime
    )
    {
        $this->scopeConfig = $scopeConfig;
        $this->dateTime = $dateTime;
    }

    /**
     * Get if the module is active in the admin panel
     * @param int $storeId Store ID
     * @return bool enabled configuration
     */
    public function getEnabled($storeId = null) {
        return boolval($this->scopeConfig->getValue(
            'marvelapp/general/enable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $storeId
        ));
    }
    /**
     * return $URL whith params from api web
     */
    public function getApiUrl() {
        $url = $this->scopeConfig->getValue('marvelapp/general/api_url');
        $publickey = $this->scopeConfig->getValue('marvelapp/general/publickey');
        $privatekey = $this->scopeConfig->getValue('marvelapp/general/privatekey');
        $key = $privatekey. $publickey;
        $timestamp =  time();
        $string = (String)$timestamp . $key;
        $md5 = md5($string);

        return $url.(String)$timestamp."&apikey=".$publickey."&hash=".$md5;
    }

}
