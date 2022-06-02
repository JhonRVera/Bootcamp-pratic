<?php
namespace Bootcamp\PruebaApi\Model;


class RickAndMortyApi {
    /**
     * @param \Magento\Framework\HTTP\Client\Curl
     */
    private $curl;

    /**
     * @param \Bootcamp\PruebaApi\Model\Config
     */
    private $config;

    public function __construct(
        \Magento\Framework\HTTP\Client\Curl $_curl,
        \Bootcamp\PruebaApi\Model\Config $config

    )
    {
        $this->curl = $_curl;
        $this->config = $config;
        
    }
    
    /**
     * Get rick and morty characters
     * @return string[][] rick and morty characters
     */
    public function getCharacters() {
        $this->_curl->get($this->config->getApiUrl());
        $response = $this->_curl->getBody();
        $charactersResponse = json_decode($response, true);
        return $charactersResponse['results'];
    }
}