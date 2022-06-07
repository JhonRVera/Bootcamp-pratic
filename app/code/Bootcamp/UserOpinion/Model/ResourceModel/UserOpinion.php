<?php
namespace Bootcamp\UserOpinion\Model\ResourceModel;

class UserOpinion extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('bootcamp_useropinion', 'opinion_id');
    }
}
