<?php

class Almos_Calculation_Model_Resource_Seo extends Mage_Core_Model_Resource_Db_Abstract
{

	public function _construct()
	{
		$this->_init('seomodel/seo', 'block_id'); //block_id это наш PRIMARY KEY в таблице, по умолчанию entity_id
	}

}