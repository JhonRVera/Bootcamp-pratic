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
 