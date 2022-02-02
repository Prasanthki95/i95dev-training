<?php
namespace I95Dev\ZolutiaShipment\Block\Adminhtml\Zolutia\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('zolutia_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Zolutia Information'));
    }
}