<?php
namespace Yereone\StoreListing\Model;

use Magento\Framework\Model\AbstractModel;

class Store extends AbstractModel
{
    public function _construct()
    {
        $this->_init("Yereone\StoreListing\Model\ResourceModel\Store");
    }
}