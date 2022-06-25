<<<<<<< HEAD
<?php
namespace Bootcamp\UserOpinion\Model;

use Bootcamp\UserOpinion\Api\Data\UserOpinionInterface;
use Magento\Framework\Exception\LocalizedException;
use DomainException;
use InvalidArgumentException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use RuntimeException;
use \Bootcamp\UserOpinion\Api\UserOpinionRepositoryInterface;

class UserOpinionRepository implements UserOpinionRepositoryInterface
{
    /**
     * @param \Bootcamp\UserOpinion\Model\UserOpinionFactory
     */
    private $_userOpinionFactory;

    /**
     * @param \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion
     */
    private $_userOpinionResourceModel;

    /**
     * @param \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion\CollectionFactory
     */
    private $_userOpinionCollectionFactory;

    /**
     * @param \Bootcamp\UserOpinion\Api\Data\SearchResultsInterfaceFactory
     */
    private $_searchResultsInterfaceFactory;

    /**
     * @param \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface
     */
    private $_collectionProcessor;

    public function __construct(
        \Bootcamp\UserOpinion\Model\UserOpinionFactory $_userOpinionFactory,
        \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion $_userOpinionResourceModel,
        \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion\CollectionFactory $_userOpinionCollectionFactory,
        \Bootcamp\UserOpinion\Api\Data\SearchResultsInterfaceFactory $_searchResultsInterfaceFactory,
        \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $_collectionProcessor
    )
    {
        $this->_userOpinionFactory = $_userOpinionFactory;
        $this->_userOpinionResourceModel = $_userOpinionResourceModel;
        $this->_userOpinionCollectionFactory = $_userOpinionCollectionFactory;
        $this->_searchResultsInterfaceFactory = $_searchResultsInterfaceFactory;
        $this->_collectionProcessor = $_collectionProcessor;
        
    }

    public function getList($searchCriteria) {
        $collection = $this->_userOpinionCollectionFactory->create();
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
         * @var UserOpinion $useropinion
         */
        $useropinion = $this->_userOpinionFactory->create();
        $this->_userOpinionResourceModel->load($useropinion, $id);
        if (!$useropinion->getId()) {
            throw new NoSuchEntityException(__("No existe una useropinion con este id"));
        }
        return $useropinion;
    }

    /**
     * Guarda una useropinion en la bd
     * @param UserOpinion $useropinion 
     * @return void 
     * @throws CouldNotSaveException 
     */
    public function save($useropinion)
    {
        try {
            $this->_userOpinionResourceModel->save($useropinion);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }
        return $useropinion;
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
     * @param UserOpinion $useropinion
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete($useropinion)
    {
        try {
            $this->_userOpinionResourceModel->delete($useropinion);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(__($e->getMessage()));
        }
        return true;
    }
}
=======
<?php
namespace Bootcamp\UserOpinion\Model;

use Bootcamp\UserOpinion\Api\Data\UserOpinionInterface;
use Magento\Framework\Exception\LocalizedException;
use DomainException;
use InvalidArgumentException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use RuntimeException;
use \Bootcamp\UserOpinion\Api\UserOpinionRepositoryInterface;

class UserOpinionRepository implements UserOpinionRepositoryInterface
{
    /**
     * @param \Bootcamp\UserOpinion\Model\UserOpinionFactory
     */
    private $_userOpinionFactory;

    /**
     * @param \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion
     */
    private $_userOpinionResourceModel;

    /**
     * @param \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion\CollectionFactory
     */
    private $_userOpinionCollectionFactory;

    /**
     * @param \Bootcamp\UserOpinion\Api\Data\SearchResultsInterfaceFactory
     */
    private $_searchResultsInterfaceFactory;

    /**
     * @param \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface
     */
    private $_collectionProcessor;

    public function __construct(
        \Bootcamp\UserOpinion\Model\UserOpinionFactory $_userOpinionFactory,
        \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion $_userOpinionResourceModel,
        \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion\CollectionFactory $_userOpinionCollectionFactory,
        \Bootcamp\UserOpinion\Api\Data\SearchResultsInterfaceFactory $_searchResultsInterfaceFactory,
        \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $_collectionProcessor
    )
    {
        $this->_userOpinionFactory = $_userOpinionFactory;
        $this->_userOpinionResourceModel = $_userOpinionResourceModel;
        $this->_userOpinionCollectionFactory = $_userOpinionCollectionFactory;
        $this->_searchResultsInterfaceFactory = $_searchResultsInterfaceFactory;
        $this->_collectionProcessor = $_collectionProcessor;
        
    }

    public function getList($searchCriteria) {
        $collection = $this->_userOpinionCollectionFactory->create();
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
         * @var UserOpinion $useropinion
         */
        $useropinion = $this->_userOpinionFactory->create();
        $this->_userOpinionResourceModel->load($useropinion, $id);
        if (!$useropinion->getId()) {
            throw new NoSuchEntityException(__("No existe una useropinion con este id"));
        }
        return $useropinion;
    }

    /**
     * Guarda una useropinion en la bd
     * @param UserOpinion $useropinion 
     * @return void 
     * @throws CouldNotSaveException 
     */
    public function save($useropinion)
    {
        try {
            $this->_userOpinionResourceModel->save($useropinion);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }
        return $useropinion;
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
     * @param UserOpinion $useropinion
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete($useropinion)
    {
        try {
            $this->_userOpinionResourceModel->delete($useropinion);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(__($e->getMessage()));
        }
        return true;
    }
}
>>>>>>> 0076efc0cb4a3cc2adda505b9857017ff428095e
