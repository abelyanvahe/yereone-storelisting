<?php
namespace Yereone\StoreListing\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Store extends AbstractDb
{
    public function _construct()
    {
        $this->_init("yereone_storelisting_store", "id");
    }
}