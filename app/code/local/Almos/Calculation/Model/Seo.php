<?php

class Almos_Calculation_Model_Seo extends Mage_Core_Model_Abstract
{

	public function _construct()
	{
		parent::_construct();
		$this->_init('seomodel/seo'); //Все в соотвествии с указанными в config.xml параметрами
	}
}