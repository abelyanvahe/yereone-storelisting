<?php
namespace Yereone\StoreListing\Block\Adminhtml\Store;

use Magento\Backend\Block\Widget\Form\Container;

class Edit extends Container
{
    public function _construct()
    {
        $this->_blockGroup = "Yereone_StoreListing";
        $this->_controller = "adminhtml_store";
        parent::_construct();
    }
}