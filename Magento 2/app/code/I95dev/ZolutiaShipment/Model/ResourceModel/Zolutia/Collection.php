<?php

namespace I95Dev\ZolutiaShipment\Model\ResourceModel\Zolutia;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('I95Dev\ZolutiaShipment\Model\Zolutia', 'I95Dev\ZolutiaShipment\Model\ResourceModel\Zolutia');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>