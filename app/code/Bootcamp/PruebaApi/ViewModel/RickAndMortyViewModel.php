<?php
namespace Bootcamp\PruebaApi\ViewModel;

use \Magento\Framework\View\Element\Block\ArgumentInterface;

class RickAndMortyViewModel implements ArgumentInterface
{
    /**
     * @param \Bootcamp\PruebaApi\Model\RickAndMortyApi
     */
    private $rickAndMortyApi;
    /**
     * @param \Bootcamp\PruebaApi\Model\Config
     */
    private $config;


    public function __construct(
        \Bootcamp\PruebaApi\Model\RickAndMortyApi $rickAndMortyApi,
        \Bootcamp\PruebaApi\Model\Config $config
    )
    {
        $this->rickAndMortyApi = $rickAndMortyApi;
        $this->config = $config;
        
    }
    public function getCharacters() {
        return $this->rickAndMortyApi->getCharacters();
    }

    public function getEnabled() {
        return $this->config->getEnabled();
    }
}
