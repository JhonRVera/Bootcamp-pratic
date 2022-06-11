<?php

namespace Omnipro\RetoOmni\Api\Data;

interface RetoOmniInterface
{
    /**
     * @return int
     */
    public function getBlog_id();

    /**
     * @param int $id
     * @return void
     */
    public function setBlog_id($id);

    /**
     * @return string
     */
    public function getTitulo();

    /**
     * @param string $titulo
     * @return void
     */
    public function setTitulo($titulo);

    /**
     * @return string
     */
    public function getFechaCreacion();

    /**
     * @param string $fecha_creacion
     * @return string
     */

     public function setFechaCreacion($fecha_creacion);

     
    /**
     * @return string
     */
    public function getFechaPublicacion();

    /**
     * @param string $fecha_publicacion
     * @return string
     */

     public function setFechaPublicacion($fecha_publicacion);

     /**
     * @return string
     */
    public function getStatus();

    /**
     * @param string $status
     * @return void
     */
    public function setStatus($status);

    /**
     * @return string
     */
    public function getCategoria();


    /**
     * @param string $categoria
     * @return void
     */
    public function setCategoria($categoria);


    /**
     * @return string
     */
    public function getContenido();


    /**
     * @param string $contenido
     * @return string
     */
    public function setContenido($contenido);

    /**
     * @return int
     */
    public function getCantComentarios();

    /**
     * @param int $comentarios
     * @return int
     */

     public function setCantComentarios($cantidad_comentarios);



}
