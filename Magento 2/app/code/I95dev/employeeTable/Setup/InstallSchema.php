<?php

namespace I95dev\employeeTable\Setup;

use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

/**
 * Class InstallSchema
 *
 * @package Thecoachsmb\Mymodule\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * Install Articles table
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('emp_table');

        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table = $setup->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'emp_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ],
                    'Emp ID'
                )
                ->addColumn(
                    'first_name',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'First Name'
                )
                ->addColumn(
                    'last_name',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Last Name'
                )
                ->addColumn(
                    'email',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Email'
                )
                ->addColumn(
                    'phone',
                    Table::TYPE_INTEGER,
                    null,
                    ['nullable' => false],
                    'Phone Number'
                )
                ->addColumn(
                    'created_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                    'Created At'
                )
                ->setComment('Thecoachsmb - Article');
            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();
    }
}
