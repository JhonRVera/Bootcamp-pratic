<?php
namespace Bootcamp\Mascotas\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface SearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * @return \Bootcamp\Mascotas\Api\Data\MascotasInterface[]
     */
    public function getItems();

    /**
     * @param \Bootcamp\Mascotas\Api\Data\MascotasInterface $items
     * @return $this
     */
    public function setItems($items);
}
