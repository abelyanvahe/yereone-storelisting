<?php
namespace Yereone\StoreListing\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Listing extends Template
{
    protected $storeFactory;
    public function __construct(Context $context,
                                \Yereone\StoreListing\Model\StoreFactory $storeFactory)
    {
        $this->storeFactory = $storeFactory;
        parent::__construct($context);
    }
    public function getStores()
    {
        $store = $this->storeFactory->create();
        return $store->getCollection();
    }
}