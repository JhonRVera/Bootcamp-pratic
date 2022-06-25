<<<<<<< HEAD
<?php
namespace Omnipro\RetoOmni\ViewModel;


use \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\Collection;
use \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\CollectionFactory as RetoOmniCollectionFactory;

class RetoOmniViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @param \Omnipro\RetoOmni\Model\Config
     */
    private $config;

    /**
     * @param RetoOmniCollectionFactory
     */
    private $retoOmniCollectionFactory;

    public function __construct(
            \Omnipro\RetoOmni\Model\Config $config,
            RetoOmniCollectionFactory  $retoOmniCollectionFactory
        )
    {
            $this->config = $config;
            $this->retoOmniCollectionFactory = $retoOmniCollectionFactory;
        
    }
    public function getEnabled() {
        return $this->config->getEnabled();
    }

        /**
     * 
     * @return Collection 
     */
    public function getBlog($blog_id) {
        /**
         * @var \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\Collection $retoomniCollection
         */
        $retoomniCollection = $this->retoOmniCollectionFactory->create();
        $retoomniCollection->filterById($blog_id);
        return $retoomniCollection;
    }
    public function getCategoria($categoria){
        /**
         * @var \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\Collection $retoomniCollection
         */
        $retoomniCollection = $this->retoOmniCollectionFactory->create();
        $retoomniCollection->filterByCategoria($categoria);
        return $retoomniCollection;

    }
 
}
=======
<?php
namespace Omnipro\RetoOmni\ViewModel;


use \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\Collection;
use \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\CollectionFactory as RetoOmniCollectionFactory;

class RetoOmniViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @param \Omnipro\RetoOmni\Model\Config
     */
    private $config;

    /**
     * @param RetoOmniCollectionFactory
     */
    private $retoOmniCollectionFactory;

    public function __construct(
            \Omnipro\RetoOmni\Model\Config $config,
            RetoOmniCollectionFactory  $retoOmniCollectionFactory
        )
    {
            $this->config = $config;
            $this->retoOmniCollectionFactory = $retoOmniCollectionFactory;
        
    }
    public function getEnabled() {
        return $this->config->getEnabled();
    }

        /**
     * 
     * @return Collection 
     */
    public function getBlog($blog_id) {
        /**
         * @var \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\Collection $retoomniCollection
         */
        $retoomniCollection = $this->retoOmniCollectionFactory->create();
        $retoomniCollection->filterById($blog_id);
        return $retoomniCollection;
    }
    public function getCategoria($categoria){
        /**
         * @var \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\Collection $retoomniCollection
         */
        $retoomniCollection = $this->retoOmniCollectionFactory->create();
        $retoomniCollection->filterByCategoria($categoria);
        return $retoomniCollection;

    }
 
}
>>>>>>> 0076efc0cb4a3cc2adda505b9857017ff428095e
