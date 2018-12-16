<?php


namespace Redstage\Banner\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        //Your install script

        $table_redstage_banner = $setup->getConnection()->newTable($setup->getTable('redstage_banner'));

        $table_redstage_banner->addColumn(
            'banner_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,],
            'Entity ID'
        );

        $table_redstage_banner->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'name'
        );

        $table_redstage_banner->addColumn(
            'banner',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'banner'
        );

        $table_redstage_banner->addColumn(
            'status',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            [],
            'status'
        );

        $table_redstage_banner->addColumn(
            'position',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'position'
        );

        $setup->getConnection()->createTable($table_redstage_banner);
    }
}
