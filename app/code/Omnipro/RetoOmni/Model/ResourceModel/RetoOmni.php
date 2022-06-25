<?php
namespace Omnipro\RetoOmni\Model\ResourceModel;

class RetoOmni extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        $this->_init('datos_blog', 'blog_id');
    }
}
