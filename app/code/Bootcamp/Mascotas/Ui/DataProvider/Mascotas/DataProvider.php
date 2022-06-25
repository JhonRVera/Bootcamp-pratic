<?php
namespace Bootcamp\Mascotas\Ui\DataProvider\Mascotas;

use Magento\Ui\DataProvider\Modifier\PoolInterface;
use \Bootcamp\Mascotas\Model\ResourceModel\Mascotas\CollectionFactory;

class DataProvider extends \Magento\Ui\DataProvider\ModifierPoolDataProvider
{

public function __construct(
    $name,
    $primaryFieldName,
    $requestFieldName,
    CollectionFactory $mascotasCollectionFactory,
    array $meta = [],
    array $data = [],
    PoolInterface $pool = null
)
{
    $this->collection = $mascotasCollectionFactory->create();
    parent::__construct($name,$primaryFieldName,$requestFieldName,$meta,$data,$pool);

}


}
