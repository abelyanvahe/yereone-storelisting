<?php
namespace Yereone\StoreListing\Controller\Adminhtml\Store;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Registry;
class Save extends Action
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
            }
            $newData = $this->getRequest()->getParams();
            $store->setData($newData);
            $store->save();
            $this->messageManager->addSuccess(__("Store successfuly saved."));
        } catch (Exception $e) {
            $this->messageManager->addError(__("Store Save error:" . $e->getMessage()));
            $redirect->setUrl($this->getUrl("storelisting/store/edit", array("id" => $store->getId())));
            return $redirect;
        }
        
        $redirect->setUrl($this->getUrl("storelisting/store/edit", array("id" => $store->getId())));
        return $redirect;
    }
}