<?php
namespace Yereone\StoreListing\Controller\Adminhtml\Store;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\ForwardFactory;
use Magento\Framework\Registry;
class NewAction extends Action
{
    protected $storeFactory;
    protected $forwardFactory;
    public function __construct(Action\Context $context,
                                \Yereone\StoreListing\Model\StoreFactory $storeFactory,
                                Registry $coreRegistry,
                                ForwardFactory $forwardFactory)
    {
        $this->storeFactory = $storeFactory;
        $this->forwardFactory = $forwardFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        $forward = $this->forwardFactory->create();
        return $forward->forward("edit");
    }
}