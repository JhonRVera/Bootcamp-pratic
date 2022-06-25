<<<<<<< HEAD
<?php
namespace Bootcamp\MarvelApp\ViewModel;
use \Magento\Framework\View\Element\Block\ArgumentInterface;

class MarvelViewModel implements ArgumentInterface
{
    /**
     * 
     * @var \Bootcamp\MarvelApp\Model\MarvelApi
     */
    private $MarvelApi;

    /**
     * 
     * 
     * @param \Bootcamp\MarvelApp\Model\Config
     */
    private $config;

    public function __construct(
        \Bootcamp\MarvelApp\Model\MarvelApi $MarvelApi,
        \Bootcamp\MarvelApp\Model\Config $config
    )
    {
        $this->MarvelApi = $MarvelApi;
        $this->config = $config;
    }

    public function getCharacters() {
        return $this->MarvelApi->getCharacters();
    }

    public function getEnabled() {
        return $this->config->getEnabled();
    }
}
=======
<?php
namespace Bootcamp\MarvelApp\ViewModel;
use \Magento\Framework\View\Element\Block\ArgumentInterface;

class MarvelViewModel implements ArgumentInterface
{
    /**
     * 
     * @var \Bootcamp\MarvelApp\Model\MarvelApi
     */
    private $MarvelApi;

    /**
     * 
     * 
     * @param \Bootcamp\MarvelApp\Model\Config
     */
    private $config;

    public function __construct(
        \Bootcamp\MarvelApp\Model\MarvelApi $MarvelApi,
        \Bootcamp\MarvelApp\Model\Config $config
    )
    {
        $this->MarvelApi = $MarvelApi;
        $this->config = $config;
    }

    public function getCharacters() {
        return $this->MarvelApi->getCharacters();
    }

    public function getEnabled() {
        return $this->config->getEnabled();
    }
}
>>>>>>> 0076efc0cb4a3cc2adda505b9857017ff428095e
