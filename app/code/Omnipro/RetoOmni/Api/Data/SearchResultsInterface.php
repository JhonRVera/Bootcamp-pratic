<<<<<<< HEAD
<?php
namespace Omnipro\RetoOmni\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface SearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * @return \Omnipro\RetoOmni\Api\Data\RetoOmniInterface[]
     */
    public function getItems();

    /**
     * @param \Omnipro\RetoOmni\Api\Data\RetoOmniInterface $items
     * @return $this
     */
    public function setItems($items);
}
=======
<?php
namespace Omnipro\RetoOmni\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface SearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * @return \Omnipro\RetoOmni\Api\Data\RetoOmniInterface[]
     */
    public function getItems();

    /**
     * @param \Omnipro\RetoOmni\Api\Data\RetoOmniInterface $items
     * @return $this
     */
    public function setItems($items);
}
>>>>>>> 0076efc0cb4a3cc2adda505b9857017ff428095e
 