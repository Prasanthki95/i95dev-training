<?php
namespace I95dev\EmployeeForm\Model;
 
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class DataExample extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('I95dev\EmployeeForm\Model\ResourceModel\DataExample');
    }
}
