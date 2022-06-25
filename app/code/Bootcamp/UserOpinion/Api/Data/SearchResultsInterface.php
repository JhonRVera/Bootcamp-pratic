<?php
namespace Bootcamp\UserOpinion\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface SearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * @return \Bootcamp\UserOpinion\Api\Data\UserOpinionInterface[]
     */
    public function getItems();

    /**
     * @param \Bootcamp\UserOpinion\Api\Data\UserOpinionInterface $items
     * @return $this
     */
    public function setItems($items);
} 
