<<<<<<< HEAD
<?php
namespace Bootcamp\RickandMortyApp\Model;

class RickAndMortyApi {

    /**
     * @param \Magento\Framework\HTTP\Client\Curl
     */
    private $_curl;

    /**
     * @param \Bootcamp\RickandMortyApp\Model\Config
     */
    private $config;

    public function __construct(
        \Magento\Framework\HTTP\Client\Curl $_curl,
        \Bootcamp\RickandMortyApp\Model\Config $config
    )
    {
        $this->_curl = $_curl;   
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
=======
<?php
namespace Bootcamp\RickandMortyApp\Model;

class RickAndMortyApi {

    /**
     * @param \Magento\Framework\HTTP\Client\Curl
     */
    private $_curl;

    /**
     * @param \Bootcamp\RickandMortyApp\Model\Config
     */
    private $config;

    public function __construct(
        \Magento\Framework\HTTP\Client\Curl $_curl,
        \Bootcamp\RickandMortyApp\Model\Config $config
    )
    {
        $this->_curl = $_curl;   
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
>>>>>>> 0076efc0cb4a3cc2adda505b9857017ff428095e
