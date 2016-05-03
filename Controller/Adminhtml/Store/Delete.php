<?php
namespace Yereone\StoreListing\Controller\Adminhtml\Store;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Registry;
class Delete extends Action
{
    protected $storeFactory;
    protected $redirectFactory;
    public function __construct(Action\Context $context,
                                \Yereone\StoreListing\Model\StoreFactory $storeFactory,
                                Registry $coreRegistry,
                                RedirectFactory $redirectFactory)
    {
        $this->storeFactory = $storeFactory;
        $this->redirectFactory = $redirectFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        $storeId = $this->getRequest()->getParam("id");
        $redirect = $this->redirectFactory->create();
        try {
            $store = $this->storeFactory->create();
            if( $storeId ){
                $store->load($storeId);
            }
            $store->delete();
            $this->messageManager->addSuccess(__("Store successfuly deleted."));
        } catch (Exception $e) {
            $this->messageManager->addError(__("Store Delete error:" . $e->getMessage()));
            $redirect->setUrl($this->getUrl("storelisting", array("id" => $store->getId())));
            return $redirect;
        }
        
        $redirect->setUrl($this->getUrl("storelisting", array("id" => $store->getId())));
        return $redirect;
    }
}