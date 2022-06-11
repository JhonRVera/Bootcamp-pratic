<?php
namespace Omnipro\RetoOmni\Api;

interface RetoOmniRepositoryInterface
{
 /**
     * Obtiene una lista de blog
     * @param \Magento\Framework\Api\SearchCriteria $searchCriteria
     * @return \Omnipro\RetoOmni\Api\Data\SearchResultsInterface
     */
    public function getList($searchCriteria);

    /**
     * Obtiene una post por su id
     * @param int $id
     * @return \Omnipro\RetoOmni\Api\Data\RetoOmniInterface
     */
    public function getById($id);

    /**
     * Guarda una blog
     * @param \Omnipro\RetoOmni\Api\Data\RetoOmniInterface $retoomni
     * @return \Omnipro\RetoOmni\Api\Data\RetoOmniInterface
     */
    public function save($retoomni); 
 
    /**
     * Elimina un post por su id
     * @param int $id
     * @return bool
     */
    public function deleteById($id);

    /**
     * Elimina una RetoOmni
     * @param \Omnipro\RetoOmni\Api\Data\RetoOmniInterface $retoomni
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete($retoomni);
}
 