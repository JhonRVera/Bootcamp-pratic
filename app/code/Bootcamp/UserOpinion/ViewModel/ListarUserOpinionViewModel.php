<<<<<<< HEAD
<?php
namespace Bootcamp\UserOpinion\ViewModel;

use \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion\Collection;
use \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion\CollectionFactory as UserOpinionCollectionFactory;

class ListarUserOpinionViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @param UserOpinionCollectionFactory
     */
    private $useropinionCollectionFactory;

    public function __construct(
        UserOpinionCollectionFactory $useropinionCollectionFactory
    )
    {
        $this->useropinionCollectionFactory = $useropinionCollectionFactory;
    }

    /**
     * 
     * @return Collection 
     */
    public function getUserOpinion($sku) {
        /**
         * @var \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion\Collection $useropinionCollection
         */
        $useropinionCollection = $this->useropinionCollectionFactory->create();
        $useropinionCollection->filterBySku($sku);
        return $useropinionCollection;
    }
}
=======
<?php
namespace Bootcamp\UserOpinion\ViewModel;

use \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion\Collection;
use \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion\CollectionFactory as UserOpinionCollectionFactory;

class ListarUserOpinionViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @param UserOpinionCollectionFactory
     */
    private $useropinionCollectionFactory;

    public function __construct(
        UserOpinionCollectionFactory $useropinionCollectionFactory
    )
    {
        $this->useropinionCollectionFactory = $useropinionCollectionFactory;
    }

    /**
     * 
     * @return Collection 
     */
    public function getUserOpinion($sku) {
        /**
         * @var \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion\Collection $useropinionCollection
         */
        $useropinionCollection = $this->useropinionCollectionFactory->create();
        $useropinionCollection->filterBySku($sku);
        return $useropinionCollection;
    }
}
>>>>>>> 0076efc0cb4a3cc2adda505b9857017ff428095e
