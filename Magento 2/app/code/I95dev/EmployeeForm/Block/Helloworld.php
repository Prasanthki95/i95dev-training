<?php
 
namespace I95dev\EmployeeForm\Block;
 
use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
 
class Helloworld extends Template
{
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
 
    public function getFormAction()
    {
        return $this->getUrl('empform/Index/Index', ['_secure' => true]);
    }
}
