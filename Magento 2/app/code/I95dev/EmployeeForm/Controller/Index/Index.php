<?php

namespace I95dev\EmployeeForm\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * Booking action
     *
     * @return void
     */
    protected $_dataExample;
    protected $resultRedirect;
    public function __construct(\Magento\Framework\App\Action\Context $context,
        I95dev\EmployeeForm\Model\DataExample  $dataExample,
    \Magento\Framework\Controller\ResultFactory $result){
        parent::__construct($context);
        $this->_dataExample = $dataExample;
        $this->resultRedirect = $result;
    }
    
    public function execute()
    {
        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            // Retrieve your form data
            $name   = $post['name'];
            $email   = $post['email'];
            $empid   = $post['empid'];
            $phone   = $post['phone'];
            

            // Doing-something with...
            $model = $this->_dataExample->create();
		$model->addData([
			"emp_id" => $empid,
			"name" => $name,
			"email" => $email,
			"phone" => $phone
			]);

            // Display the succes form validation message
            $this->messageManager->addSuccessMessage('Booking done !');

            // Redirect to your form page (or anywhere you want...)
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl('/EmployeeForm/Index/Index');

            return $resultRedirect;
        }
        // 2. GET request : Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
