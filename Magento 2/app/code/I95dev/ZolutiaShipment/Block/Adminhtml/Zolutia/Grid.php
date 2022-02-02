<?php
namespace I95Dev\ZolutiaShipment\Block\Adminhtml\Zolutia;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \Magento\Framework\Module\Manager
     */
    protected $moduleManager;

    /**
     * @var \I95Dev\ZolutiaShipment\Model\zolutiaFactory
     */
    protected $_zolutiaFactory;

    /**
     * @var \I95Dev\ZolutiaShipment\Model\Status
     */
    protected $_status;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \I95Dev\ZolutiaShipment\Model\zolutiaFactory $zolutiaFactory
     * @param \I95Dev\ZolutiaShipment\Model\Status $status
     * @param \Magento\Framework\Module\Manager $moduleManager
     * @param array $data
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \I95Dev\ZolutiaShipment\Model\ZolutiaFactory $ZolutiaFactory,
        \I95Dev\ZolutiaShipment\Model\Status $status,
        \Magento\Framework\Module\Manager $moduleManager,
        array $data = []
    ) {
        $this->_zolutiaFactory = $ZolutiaFactory;
        $this->_status = $status;
        $this->moduleManager = $moduleManager;
        parent::__construct($context, $backendHelper, $data);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('postGrid');
        $this->setDefaultSort('msg_id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(false);
        $this->setVarNameFilter('post_filter');
    }

    /**
     * @return $this
     */
    protected function _prepareCollection()
    {
        $collection = $this->_zolutiaFactory->create()->getCollection();
        $this->setCollection($collection);

        parent::_prepareCollection();

        return $this;
    }

    /**
     * @return $this
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareColumns()
    {
        $this->addColumn(
            'msg_id',
            [
                'header' => __('ID'),
                'type' => 'number',
                'index' => 'msg_id',
                'header_css_class' => 'col-id',
                'column_css_class' => 'col-id'
            ]
        );


		
				$this->addColumn(
					'shipment_id',
					[
						'header' => __('Shipment ID'),
						'index' => 'shipment_id',
					]
				);
				
				$this->addColumn(
					'status',
					[
						'header' => __('Status'),
						'index' => 'status',
					]
				);
				
				$this->addColumn(
					'error_msg',
					[
						'header' => __('Error Message'),
						'index' => 'error_msg',
					]
				);
				


		

		

        $block = $this->getLayout()->getBlock('grid.bottom.links');
        if ($block) {
            $this->setChild('grid.bottom.links', $block);
        }

        return parent::_prepareColumns();
    }

	

    /**
     * @return string
     */
    public function getGridUrl()
    {
        return $this->getUrl('zolutiashipment/*/index', ['_current' => true]);
    }

    /**
     * @param \I95Dev\ZolutiaShipment\Model\zolutia|\Magento\Framework\Object $row
     * @return string
     */
    public function getRowUrl($row)
    {
		return '#';
    }

	

}