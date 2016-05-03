<?php
namespace Yereone\StoreListing\Controller\Adminhtml\Store;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Registry;
class Edit extends Action
{
    protected $resultPageFactory;
    protected $storeFactory;
    protected $coreRegistry;
    public function __construct(Action\Context $context,
                                PageFactory $resultPageFactory,
                                \Yereone\StoreListing\Model\StoreFactory $storeFactory,
                                Registry $coreRegistry)
    {
        $this->coreRegistry = $coreRegistry;
        $this->resultPageFactory = $resultPageFactory;
        $this->storeFactory = $storeFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        $storeId = $this->getRequest()->getParam("id");
        $store = $this->storeFactory->create();
        if( $storeId ){
            $store->load($storeId);
        }
        $this->coreRegistry->register("edit_store", $store);
        $result = $this->resultPageFactory->create();
        return $result;
    }
}