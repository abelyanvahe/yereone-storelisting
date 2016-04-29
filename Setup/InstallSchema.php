<?php
namespace Yereone\StoreListing\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        
        $table = $setup->getConnection()->newTable("yereone_storelisting_store")
                ->addColumn("id",
                        \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                        12,
                        ["identity" => true, "primary" => true, "nullable" => false],
                        "Store Id"
                )
                ->addColumn("name",
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        256,
                        [],
                        "Store Name"
                )
                ->addColumn("description",
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        65556,
                        [],
                        "Store Description"
                        )
                ->addColumn("address",
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        65556,
                        [],
                        "Store Address"
                )
                ->addColumn("hours",
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        65556,
                        [],
                        "Store Hours"
                )
                ->addColumn("telephone",
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        256,
                        [],
                        "Store Telephone"
                )
                ->addColumn("social",
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        65556,
                        [],
                        "Store Social Media"
                )
                ->addColumn("images",
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        65556,
                        [],
                        "Store Images"
                );
        $setup->getConnection()->createTable($table);
         
        $setup->endSetup();
    }
}