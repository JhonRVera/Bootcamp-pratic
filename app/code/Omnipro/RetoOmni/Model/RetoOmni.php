<?php
namespace Omnipro\RetoOmni\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Omnipro\RetoOmni\Api\Data\RetoOmniInterface;

class RetoOmni extends AbstractModel implements IdentityInterface,RetoOmniInterface
{
    const CACHE_TAG = 'omnipro_retoomni_reto_omni';

    /**
     * Model cache tag for clear cache in after save and after delete
     *
     * @var string
     */
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'reto_omni';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Omnipro\RetoOmni\Model\ResourceModel\RetoOmni::class);
    }
    /**
     * Return a unique id for the model.
     *
     * @return array
     */ 
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    /**
     * @return int
     */
    public function getBlog_id(){
        return $this->getData('blog_id');
    }


    public function setBlog_id($blog_id){
        return $this->setData('blog_id',$blog_id);
    }

    public function getTitulo(){

        return $this->getData('titulo');
    }


    public function setTitulo($titulo){
        return $this->setData('titulo',$titulo);
    }


    public function getFechaCreacion(){
        return $this->getData('fecha_creacion');
    }


     public function setFechaCreacion($fecha_creacion){
         return $this->setData('fecha_creacion',$fecha_creacion);
     }


    public function getFechaPublicacion(){
        return $this->getData('fecha_publicacion');
    }


     public function setFechaPublicacion($fecha_publicacion){
         return $this->setData('fecha_publicacion',$fecha_publicacion);
     }


    public function getStatus(){
        return $this->getData('status');
    }


    public function setStatus($status){
        return $this->setData('status',$status);
    }


    public function getCategoria(){
        return $this->getData('categoria');
    }


    public function setCategoria($categoria){
        return $this->setData('categoria',$categoria);
    
    }

    public function getContenido(){
        return $this->getData('contenido');
    }

    public function setContenido($contenido){
        return $this->setData('contenido',$contenido);
    }

    public function getCantComentarios(){
        return $this->getData('comentarios');
    }


     public function setCantComentarios($cantidad_comentarios){
         return $this->setData('cantidad_comentarios',$cantidad_comentarios);
     }



}
