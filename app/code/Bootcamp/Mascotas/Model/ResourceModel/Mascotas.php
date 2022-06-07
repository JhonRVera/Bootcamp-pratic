<?php
namespace Bootcamp\Mascotas\Model\ResourceModel;

class Mascotas extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        $this->_init('bootcamp_mascotas', 'entity_id');
    }
}
