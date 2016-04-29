<?php
namespace Yereone\StoreListing\Model\ResourceModel\Store;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init("Yereone\StoreListing\Model\Store", "Yereone\StoreListing\Model\ResourceModel\Store");
    }
}