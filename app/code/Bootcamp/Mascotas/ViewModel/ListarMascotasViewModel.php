<?php
namespace Bootcamp\Mascotas\ViewModel;

use \Bootcamp\Mascotas\Model\ResourceModel\Mascotas\Collection;
use \Bootcamp\Mascotas\Model\ResourceModel\Mascotas\CollectionFactory as MascotasCollectionFactory;

class ListarMascotasViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @param MascotasCollectionFactory
     */
    private $mascotasCollectionFactory;

    public function __construct(
        MascotasCollectionFactory $mascotasCollectionFactory
    )
    {
        $this->mascotasCollectionFactory = $mascotasCollectionFactory;  
    }

    /**
     * 
     * @return Collection 
     */
    public function getMascotas($raza) {
        /**
         * @var \Bootcamp\Mascotas\Model\ResourceModel\Mascotas\Collection $mascotasCollection
         */
        $mascotasCollection = $this->mascotasCollectionFactory->create();
        $mascotasCollection->filterByRaza($raza);
        return $mascotasCollection;
    }
}