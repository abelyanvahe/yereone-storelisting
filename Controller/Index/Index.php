<?php
namespace Yereone\StoreListing\Controller\Index;

use Magento\Framework\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action\Action
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