<?php
namespace Omnipro\RetoOmni\Ui\DataProvider\RetoOmni;
use Magento\Ui\DataProvider\Modifier\PoolInterface;



class DataProvider extends \Magento\Ui\DataProvider\ModifierPoolDataProvider
{

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Omnipro\RetoOmni\Model\ResourceModel\RetoOmni\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = [],
        PoolInterface $pool = null
    )
    {
        $this->collection = $collectionFactory->create();
        parent::__construct($name,$primaryFieldName,$requestFieldName,$meta,$data,$pool);
    
    } 
      /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        if (!$this->getCollection()->isLoaded()) {
            $this->getCollection()->load();
        }
        $items = $this->getCollection()->toArray();
        $this->data['totalRecords'] = $this->getCollection()->getSize();
        $this->data['items'] = $items['items'];
       
        return parent::getData();
    }
}    
