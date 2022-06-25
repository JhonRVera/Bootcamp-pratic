<<<<<<< HEAD
<?php
namespace Bootcamp\Mascotas\Model\ResourceModel\Mascotas;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';
    protected $_eventPrefix = 'bootcamp_mascotas_mascotas_collection';
    protected $_eventObject = 'mascotas_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Bootcamp\Mascotas\Model\Mascotas::class,
            \Bootcamp\Mascotas\Model\ResourceModel\Mascotas::class
        );
    }

    public function filterByRaza($raza) {
        $this->addFieldToFilter('raza', ['eq' => $raza]);
    }
}
=======
<?php
namespace Bootcamp\Mascotas\Model\ResourceModel\Mascotas;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';
    protected $_eventPrefix = 'bootcamp_mascotas_mascotas_collection';
    protected $_eventObject = 'mascotas_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Bootcamp\Mascotas\Model\Mascotas::class,
            \Bootcamp\Mascotas\Model\ResourceModel\Mascotas::class
        );
    }

    public function filterByRaza($raza) {
        $this->addFieldToFilter('raza', ['eq' => $raza]);
    }
}
>>>>>>> 0076efc0cb4a3cc2adda505b9857017ff428095e
