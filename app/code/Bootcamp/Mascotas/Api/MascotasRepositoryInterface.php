<?php
namespace Bootcamp\Mascotas\Api;

interface MascotasRepositoryInterface
{
    /**
     * Obtiene una lista de mascotas
     * @param \Magento\Framework\Api\SearchCriteria $searchCriteria
     * @return \Bootcamp\Mascotas\Api\Data\SearchResultsInterface
     */
    public function getList($searchCriteria);

    /**
     * Obtiene una mascota por su id
     * @param int $id
     * @return \Bootcamp\Mascotas\Api\Data\MascotasInterface
     */
    public function getById($id);

    /**
     * Guarda una mascota
     * @param \Bootcamp\Mascotas\Api\Data\MascotasInterface $mascota
     * @return \Bootcamp\Mascotas\Api\Data\MascotasInterface
     */
    public function save($mascota);

    /**
     * Elimina una mascota por su id
     * @param int $id
     * @return bool
     */
    public function deleteById($id);

    /**
     * Elimina una mascota
     * @param \Bootcamp\Mascotas\Api\Data\MascotasInterface $mascota
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete($mascota);
}
