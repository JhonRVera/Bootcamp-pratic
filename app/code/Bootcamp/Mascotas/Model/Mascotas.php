<?php
namespace Bootcamp\Mascotas\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Bootcamp\Mascotas\Api\Data\MascotasInterface;

class Mascotas extends AbstractModel implements IdentityInterface, MascotasInterface
{
    const CACHE_TAG = 'bootcamp_mascotas_mascotas';

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
    protected $_eventPrefix = 'mascotas';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Bootcamp\Mascotas\Model\ResourceModel\Mascotas::class);
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

    public function getNombre()
    {
        return $this->getData('nombre');
    }

    public function setNombre($nombre)
    {
        $this->setData('nombre', $nombre);
    }

    public function getEspecie()
    {
        return $this->getData('especie');
    }

    public function setEspecie($especie)
    {
        $this->setData('especie', $especie);
    }

    public function getRaza()
    {
        return $this->getData('raza');
    }

    public function setRaza($raza)
    {
        $this->setData('raza', $raza);
    }

    public function getEdad()
    {
        return $this->getData('edad');
    }

    public function setEdad($edad)
    {
        $this->setData('edad', $edad);
    }
}
