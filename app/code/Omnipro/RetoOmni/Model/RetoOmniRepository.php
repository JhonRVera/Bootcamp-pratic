<<<<<<< HEAD
<?php
namespace Omnipro\RetoOmni\Model;

use \Omnipro\RetoOmni\Api\Data\RetoOmniInterface;
use Magento\Framework\Exception\LocalizedException;
use DomainException;
use InvalidArgumentException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use RuntimeException;
use \Omnipro\RetoOmni\Api\RetoOmniRepositoryInterface;

class RetoOmniRepository implements RetoOmniRepositoryInterface
{
    /**
     * @param \Omnipro\RetoOmni\Model\RetoOmniFactory
     */
    private $_retoOmniFactory;

    /**
     * @param \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni
     */
    private $_retoOmniResourceModel;
    /**
     * @param \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\CollectionFactory
     */
    private $_retoOmniCollectionFactory;

    /**
     * @param \Omnipro\RetoOmni\Api\Data\SearchResultsInterfaceFactory
     */
    private $_searchResultsInterfaceFactory;

    /**
     * @param \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface
     */
    private $_collectionProcessor;



    public function __construct(
        \Omnipro\RetoOmni\Model\RetoOmniFactory $_retoOmniFactory,
        \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni $_retoOmniResourceModel,
        \Omnipro\RetoOmni\Api\Data\SearchResultsInterfaceFactory $_searchResultsInterfaceFactory,
        \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\CollectionFactory $_retoOmniCollectionFactory,
        \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $_collectionProcessor
    )
    {
        $this->_retoOmniFactory = $_retoOmniFactory;
        $this->_retoOmniResourceModel = $_retoOmniResourceModel;
        $this->_searchResultsInterfaceFactory = $_searchResultsInterfaceFactory;
        $this->_retoOmniCollectionFactory = $_retoOmniCollectionFactory;
        $this->_collectionProcessor = $_collectionProcessor;


        
    }

    public function getList($searchCriteria) {
        $collection = $this->_retoOmniCollectionFactory->create();
        $this->_collectionProcessor->process($searchCriteria, $collection);

        $searchResults = $this->_searchResultsInterfaceFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());

        return $searchResults;
    }

        /**
     * 
     * @param int $id 
     * @return UserOpinion 
     * @throws LocalizedException 
     * @throws DomainException 
     * @throws RuntimeException 
     * @throws InvalidArgumentException 
     * @throws NoSuchEntityException 
     */
    public function getById($id) {
        /**
         * @var RetoOmni $retoomni
         */
        $retoomni = $this->_retoOmniFactory->create();
        $this->_retoOmniResourceModel->load($retoomni, $id);
        if (!$retoomni->getId()) {
            throw new NoSuchEntityException(__("No existe una blog con este id"));
        }
        return $retoomni;
    }

    
    /**
     * Guarda una useropinion en la bd
     * @param RetoOmni $retoomni 
     * @return void 
     * @throws CouldNotSaveException 
     */
    public function save($retoomni)
    {
        try {
            $this->_retoOmniResourceModel->save($retoomni);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }
        return $retoomni;
    }

      /**
     * @param int $id
     * @return bool
     * @throws LocalizedException
     * @throws DomainException
     * @throws RuntimeException
     * @throws InvalidArgumentException
     * @throws NoSuchEntityException
     * @throws CouldNotDeleteException
     */
    public function deleteById($id) {
        $this->delete($this->getById($id));
        return true;
    }

    /**
     * @param RetoOmni $retoomni
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete($retoomni)
    {
        try {
            $this->_retoOmniResourceModel->delete($retoomni);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(__($e->getMessage()));
        }
        return true;
    }

}
=======
<?php
namespace Omnipro\RetoOmni\Model;

use \Omnipro\RetoOmni\Api\Data\RetoOmniInterface;
use Magento\Framework\Exception\LocalizedException;
use DomainException;
use InvalidArgumentException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use RuntimeException;
use \Omnipro\RetoOmni\Api\RetoOmniRepositoryInterface;

class RetoOmniRepository implements RetoOmniRepositoryInterface
{
    /**
     * @param \Omnipro\RetoOmni\Model\RetoOmniFactory
     */
    private $_retoOmniFactory;

    /**
     * @param \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni
     */
    private $_retoOmniResourceModel;
    /**
     * @param \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\CollectionFactory
     */
    private $_retoOmniCollectionFactory;

    /**
     * @param \Omnipro\RetoOmni\Api\Data\SearchResultsInterfaceFactory
     */
    private $_searchResultsInterfaceFactory;

    /**
     * @param \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface
     */
    private $_collectionProcessor;



    public function __construct(
        \Omnipro\RetoOmni\Model\RetoOmniFactory $_retoOmniFactory,
        \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni $_retoOmniResourceModel,
        \Omnipro\RetoOmni\Api\Data\SearchResultsInterfaceFactory $_searchResultsInterfaceFactory,
        \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\CollectionFactory $_retoOmniCollectionFactory,
        \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $_collectionProcessor
    )
    {
        $this->_retoOmniFactory = $_retoOmniFactory;
        $this->_retoOmniResourceModel = $_retoOmniResourceModel;
        $this->_searchResultsInterfaceFactory = $_searchResultsInterfaceFactory;
        $this->_retoOmniCollectionFactory = $_retoOmniCollectionFactory;
        $this->_collectionProcessor = $_collectionProcessor;


        
    }

    public function getList($searchCriteria) {
        $collection = $this->_retoOmniCollectionFactory->create();
        $this->_collectionProcessor->process($searchCriteria, $collection);

        $searchResults = $this->_searchResultsInterfaceFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());

        return $searchResults;
    }

        /**
     * 
     * @param int $id 
     * @return UserOpinion 
     * @throws LocalizedException 
     * @throws DomainException 
     * @throws RuntimeException 
     * @throws InvalidArgumentException 
     * @throws NoSuchEntityException 
     */
    public function getById($id) {
        /**
         * @var RetoOmni $retoomni
         */
        $retoomni = $this->_retoOmniFactory->create();
        $this->_retoOmniResourceModel->load($retoomni, $id);
        if (!$retoomni->getId()) {
            throw new NoSuchEntityException(__("No existe una blog con este id"));
        }
        return $retoomni;
    }

    
    /**
     * Guarda una useropinion en la bd
     * @param RetoOmni $retoomni 
     * @return void 
     * @throws CouldNotSaveException 
     */
    public function save($retoomni)
    {
        try {
            $this->_retoOmniResourceModel->save($retoomni);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }
        return $retoomni;
    }

      /**
     * @param int $id
     * @return bool
     * @throws LocalizedException
     * @throws DomainException
     * @throws RuntimeException
     * @throws InvalidArgumentException
     * @throws NoSuchEntityException
     * @throws CouldNotDeleteException
     */
    public function deleteById($id) {
        $this->delete($this->getById($id));
        return true;
    }

    /**
     * @param RetoOmni $retoomni
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete($retoomni)
    {
        try {
            $this->_retoOmniResourceModel->delete($retoomni);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(__($e->getMessage()));
        }
        return true;
    }

}
>>>>>>> 0076efc0cb4a3cc2adda505b9857017ff428095e
