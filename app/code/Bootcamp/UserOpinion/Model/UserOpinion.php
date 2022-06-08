<?php
namespace Bootcamp\UserOpinion\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Bootcamp\UserOpinion\Api\Data\UserOpinionInterface;

class UserOpinion extends AbstractModel implements IdentityInterface, UserOpinionInterface
{
    const CACHE_TAG = 'bootcamp_useropinion_user_opinion';

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
    protected $_eventPrefix = 'user_opinion';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion::class);
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

    public function getUser_email()
    {
        return $this->getData('user_email');
    }

    public function setUser_email($user_email)
    {
        $this->setData('user_email', $user_email);
    }

    public function getPuntuacion()
    {
        return $this->getData('puntuacion');
    }

    public function setPuntuacion($puntuacion)
    {
        $this->setData('puntuacion', $puntuacion);
    }

    public function getOpinion()
    {
        return $this->getData('opinion');
    }

    public function setOpinion($opinion)
    {
        $this->setData('opinion', $opinion);
    }

    public function getFecha()
    {
        return $this->getData('fecha');
    }

    public function setFecha($fecha)
    {
        $this->setData('fecha', $fecha);
    }
}
