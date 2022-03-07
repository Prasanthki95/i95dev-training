<?php
namespace I95dev\EmployeeForm\Model\ResourceModel;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class DataExample extends AbstractDb
{
    protected function _construct()
    {
        $this->_init("emp_form","emp_id");
    }
}
