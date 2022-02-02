<?php

namespace I95Dev\ZolutiaShipment\Controller\Adminhtml\zolutia;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPagee;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('I95Dev_ZolutiaShipment::zolutia');
        $resultPage->addBreadcrumb(__('I95Dev'), __('I95Dev'));
        $resultPage->addBreadcrumb(__('Manage item'), __('Manage Zolutia'));
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Zolutia'));

        return $resultPage;
    }
}
?>