<?php
namespace Bootcamp\Mascotas\Model;
use Bootcamp\Mascotas\Api\Data\MascotasInterface;
use Magento\Framework\Exception\LocalizedException;
use DomainException;
use InvalidArgumentException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use RuntimeException;
use \Bootcamp\Mascotas\Api\MascotasRepositoryInterface;

class MascotasRepository implements MascotasRepositoryInterface
{
    /**
     * @param \Bootcamp\Mascotas\Model\MascotasFactory
     */
    private $_mascotasFactory;

    /**
     * @param \Bootcamp\Mascotas\Model\ResourceModel\Mascotas
     */
    private $_mascotasResourceModel;

    /**
     * @param \Bootcamp\Mascotas\Model\ResourceModel\Mascotas\CollectionFactory
     */
    private $_mascotasCollectionFactory;

    /**
     * @param \Bootcamp\Mascotas\Api\Data\SearchResultsInterfaceFactory
     */
    private $_searchResultsInterfaceFactory;

    /**
     * @param \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface
     */
    private $_collectionProcessor;

    public function __construct(
        \Bootcamp\Mascotas\Model\MascotasFactory $_mascotasFactory,
        \Bootcamp\Mascotas\Model\ResourceModel\Mascotas $_mascotasResourceModel,
        \Bootcamp\Mascotas\Model\ResourceModel\Mascotas\CollectionFactory $_mascotasCollectionFactory,
        \Bootcamp\Mascotas\Api\Data\SearchResultsInterfaceFactory $_searchResultsInterfaceFactory,
        \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $_collectionProcessor
    )
    {
        $this->_mascotasFactory = $_mascotasFactory;
        $this->_mascotasResourceModel = $_mascotasResourceModel;
        $this->_mascotasCollectionFactory = $_mascotasCollectionFactory;
        $this->searchResultsInterfaceFactory = $_searchResultsInterfaceFactory;
        $this->collectionProcessor = $_collectionProcessor;
    }

    public function getList($searchCriteria) {
        $collection = $this->_mascotasCollectionFactory->create();
        $this-> _collectionProcesor->process($searchCriteria,$collection);

        $searchResults = $this ->_searchResultsInterfaceFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        
        return $searchResults;
    }

    /**
     * 
     * @param int $id 
     * @return Mascotas 
     * @throws LocalizedException 
     * @throws DomainException 
     * @throws RuntimeException 
     * @throws InvalidArgumentException 
     * @throws NoSuchEntityException 
     */
    public function getById($id) {
        /**
         * @var Mascotas $mascota
         */
        $mascota = $this->_mascotasFactory->create();
        $this->_mascotasResourceModel->load($mascota, $id);
        if(!$mascota->getId()) {
            throw new NoSuchEntityException(__("No existe una mascota con este id"));
        }
        return $mascota;
    }

    /**
     * Guarda una mascota en la bd
     * @param Mascotas $mascota 
     * @return void 
     * @throws CouldNotSaveException 
     */
    public function save($mascota) {
        try {
            $this->_mascotasResourceModel->save($mascota);
        } catch (\Exception $e){
            throw new CouldNotSaveException(__($e->getMessage()));
        }
        return $mascota;
    }

    public function deleteById($id) {
        $this->delete($this->getById($id));
        return true;
    }

    public function delete($mascota) {
        try {
            $this->_mascotasResourceModel->delete($mascota);
        } catch (\Exception $e){
            throw new CouldNotDeleteException(__($e->getMessage()));
        }
        return true;
    }
}
