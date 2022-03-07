<?php
namespace I95dev\EmployeeForm\Model\ResourceModel\Extension;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init("I95dev\EmployeeForm\Model\DataExample","I95dev\EmployeeForm\Model\ResourceModel\DataExample");
    }
}
