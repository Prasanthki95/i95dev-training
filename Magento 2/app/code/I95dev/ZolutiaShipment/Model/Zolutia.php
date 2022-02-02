<?php
namespace I95Dev\ZolutiaShipment\Model;

class Zolutia extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('I95Dev\ZolutiaShipment\Model\ResourceModel\Zolutia');
    }
}
?>