<?php
namespace Bootcamp\Mascotas\Api\Data;

interface MascotasInterface
{
    /**
     * @return int
     */
    public function getId();
    
    /**
     * @param int $id 
     * @return void
     */
    public function setId($id);

    /**
     * Obtiene el nombre de la mascota
     * @return string
     */
    public function getNombre();

    /**
     * Setea el nombre de la mascota
     * @param string $nombre
     * @return void
     */
    public function setNombre($nombre);

    /**
     * Obtiene la especie
     * @return string
     */
    public function getEspecie();

    /**
     * Setea la especie
     * @param string $especie
     * @return void
     */
    public function setEspecie($especie);

    /**
     * Obtiene la raza
     * @return string
     */
    public function getRaza();

    /**
     * Setea la raza
     * @param string $raza
     * @return void
     */
    public function setRaza($raza);

    /**
     * Obtiene la edad
     * @return string
     */
    public function getEdad();

    /**
     * Setea la edad
     * @param string $edad
     * @return void
     */
    public function setEdad($edad);
}
