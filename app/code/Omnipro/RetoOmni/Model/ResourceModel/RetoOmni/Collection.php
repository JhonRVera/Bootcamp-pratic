<?php
namespace Omnipro\RetoOmni\Model\ResourceModel\RetoOmni;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'blog_id';
    protected $_eventPrefix = 'omnipro_retoomni_reto_omni_collection';
    protected $_eventObject = 'reto_omni_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Omnipro\RetoOmni\Model\RetoOmni::class,
            \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni::class
        );
    }

    public function filterById($blog_id)
    {
        $this->addFieldToFilter('blog_id', ['eq' => $blog_id]);
    }
    public function filterByCategoria($categoria){
        $this->addFieldToFilter('categoria', ['eq' => $categoria]);
    }
}
