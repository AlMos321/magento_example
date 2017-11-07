<?php

/**
 * Magento
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
	->newTable($installer->getTable('seomodel/seo'))
	->addColumn('block_id',Varien_Db_Ddl_Table::TYPE_INTEGER,null,array(
		'identity' => true,
		'unsigned' => true,
		'nullable' => false,
		'primary'  => true
	))
	->addColumn('type', Varien_Db_Ddl_Table::TYPE_TEXT, 32, array(
		'nullable'  => false,
		'primary'   => true,
	), 'Type')
	->addColumn('value', Varien_Db_Ddl_Table::TYPE_TEXT, 32, array(
		'nullable'  => false,
		'unsigned'  => true,
		'primary'   => true,
	), 'Value')
	->addColumn('count', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
		'unsigned'  => true,
		'nullable'  => false,
		'default'   => '0',
	), 'Count')
	->addColumn('updated_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(), 'Update Time')
	->setComment('Count Login Attempts');
$installer->getConnection()->createTable($table);

$installer->endSetup();
