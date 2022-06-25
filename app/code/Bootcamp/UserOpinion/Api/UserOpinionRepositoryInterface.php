<?php
namespace Bootcamp\UserOpinion\Api;

interface UserOpinionRepositoryInterface
{
    /**
     * Obtiene una lista de mascotas
     * @param \Magento\Framework\Api\SearchCriteria $searchCriteria
     * @return \Bootcamp\UserOpinion\Api\Data\SearchResultsInterface
     */
    public function getList($searchCriteria);

    /**
     * Obtiene una UserOpinion por su id
     * @param int $id
     * @return \Bootcamp\UserOpinion\Api\Data\UserOpinionInterface
     */
    public function getById($id);

    /**
     * Guarda una UserOpinion
     * @param \Bootcamp\UserOpinion\Api\Data\UserOpinionInterface $useropinion
     * @return \Bootcamp\UserOpinion\Api\Data\UserOpinionInterface
     */
    public function save($useropinion);

    /**
     * Elimina una UserOpinion por su id
     * @param int $id
     * @return bool
     */
    public function deleteById($id);

    /**
     * Elimina una UserOpinion
     * @param \Bootcamp\UserOpinion\Api\Data\UserOpinionInterface $useropinion
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete($useropinion);
}
