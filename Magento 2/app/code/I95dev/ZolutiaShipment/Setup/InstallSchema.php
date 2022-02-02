<?php

namespace I95Dev\ZolutiaShipment\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Adapter\AdapterInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        if (version_compare($context->getVersion(), '1.0.0') < 0){

		$installer->run('create table zolutia_shipment(msg_id int not null auto_increment, shipment_id varchar(100),status smallint(6),error_msg varchar(100), primary key(msg_id ))');


		

		}

        $installer->endSetup();

    }
}