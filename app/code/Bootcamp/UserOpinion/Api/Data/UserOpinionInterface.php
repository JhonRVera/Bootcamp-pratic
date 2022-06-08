<?php
namespace Bootcamp\UserOpinion\Api\Data;

interface UserOpinionInterface
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
     * Obtiene el email
     * @return string
     */
    public function getUser_email();

    /**
     * Setea el email
     * @param string $user_email
     * @return void
     */
    public function setUser_email($user_email);

    /**
     * Obtiene la puntuacion
     * @return string
     */
    public function getPuntuacion();

    /**
     * Setea la puntuacion
     * @param string $puntuacion
     * @return void
     */
    public function setPuntuacion($puntuacion);

    /**
     * Obtiene la opinion
     * @return string
     */
    public function getOpinion();

    /**
     * Setea la opinion
     * @param string $opinion
     * @return void
     */
    public function setOpinion($opinion);

    /**
     * Obtiene la fecha
     * @return string
     */
    public function getFecha();

    /**
     * Setea la fecha
     * @param string $fecha
     * @return void
     */
    public function setFecha($fecha);
}
