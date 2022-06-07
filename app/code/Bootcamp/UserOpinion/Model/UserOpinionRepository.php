<?php
namespace Bootcamp\UserOpinion\Model;

use Magento\Framework\Exception\LocalizedException;
use DomainException;
use InvalidArgumentException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use RuntimeException;

class UserOpinionRepository 
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

    public function __construct(
        \Bootcamp\UserOpinion\Model\UserOpinionFactory $_userOpinionFactory,
        \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion $_userOpinionResourceModel,
        \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion\CollectionFactory $_userOpinionCollectionFactory
    )
    {
        $this->_userOpinionFactory = $_userOpinionFactory;
        $this->_userOpinionResourceModel = $_userOpinionResourceModel;
        $this->_userOpinionCollectionFactory = $_userOpinionCollectionFactory;
        
    }

    public function getList() {}

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
        if(!$useropinion->getId()) {
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
    public function save(\Bootcamp\UserOpinion\Model\UserOpinion $useropinion) {
        try {
            $this->_userOpinionResourceModel->save($useropinion);
        } catch (\Exception $e){
            throw new CouldNotSaveException(__($e->getMessage()));
        }
    }

    public function deleteById($id) {
        $this->delete($this->getById($id));
    }

    public function delete(\Bootcamp\UserOpinion\Model\UserOpinion $useropinion) {
        try {
            $this->_userOpinionResourceModel->delete($useropinion);
        } catch (\Exception $e){
            throw new CouldNotDeleteException(__($e->getMessage()));
        }
    }
}
