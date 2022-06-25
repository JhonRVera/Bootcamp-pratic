<?php
namespace Bootcamp\MarvelApp\Model;

class MarvelApi
{
       /**
     * @param \Magento\Framework\HTTP\Client\Curl
     */
    private $_curl;

    /**
     * @param \Bootcamp\MarvelApp\Model\Config
     */
    private $config;

    public function __construct(
        \Magento\Framework\HTTP\Client\Curl $_curl,
        \Bootcamp\MarvelApp\Model\Config $config
    )
    {
        $this->_curl = $_curl;   
        $this->config = $config;
    }

    /**
     * Get rick and morty characters
     * @return string[][] Avengers characters
     */
    public function getCharacters() {
        
        $this->_curl->get($this->config->getApiUrl());
        $response = $this->_curl->getBody();
        $charactersResponse = json_decode($response, true);
        return $charactersResponse['data']['results'];
    }
}
