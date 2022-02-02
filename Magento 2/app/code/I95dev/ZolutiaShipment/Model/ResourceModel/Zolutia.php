<?php
namespace I95Dev\ZolutiaShipment\Model\ResourceModel;

class Zolutia extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('zolutia_shipment', 'msg_id');
    }
}
?>