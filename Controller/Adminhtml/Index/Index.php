<?php
namespace Yereone\StoreListing\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $resultPageFactory;
    public function __construct(Action\Context $context,
                                PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        $result = $this->resultPageFactory->create();
        return $result;
    }
}