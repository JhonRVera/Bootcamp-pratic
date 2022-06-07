<?php
namespace Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'opinion_id';
    protected $_eventPrefix = 'bootcamp_useropinion_user_opinion_collection';
    protected $_eventObject = 'user_opinion_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Bootcamp\UserOpinion\Model\UserOpinion::class, 
            \Bootcamp\UserOpinion\Model\ResourceModel\UserOpinion::class
        );
    }

    public function filterBySku($sku) {
        $this->addFieldToFilter('sku', ['eq' => $sku]);
    }
}
