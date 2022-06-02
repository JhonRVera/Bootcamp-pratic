<?php
namespace Bootcamp\RickandMortyApp\ViewModel;

use \Magento\Framework\View\Element\Block\ArgumentInterface;

class RickAndMortyViewModel implements ArgumentInterface
{
    /**
     * 
     * @var \Bootcamp\RickandMortyApp\Model\RickAndMortyApi
     */
    private $rickAndMortyApi;

    /**
     * @param \Bootcamp\RickandMortyApp\Model\Config
     */
    private $config;

    public function __construct(
        \Bootcamp\RickandMortyApp\Model\RickAndMortyApi $rickAndMortyApi,
        \Bootcamp\RickandMortyApp\Model\Config $config
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
