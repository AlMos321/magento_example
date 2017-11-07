<?php

class Almos_Calculation_Model_Resource_Seo_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{

	public function _construct()
	{
		parent::_construct();
		$this->_init('seomodel/seo');
	}
}
