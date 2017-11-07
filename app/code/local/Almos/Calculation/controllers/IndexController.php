<?php

class Almos_Calculation_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		//Null coalescing operator (php7)
		$username = $this->getRequest()->get('user') ?? 'nobody';

		if ($this->getRequest()->isGet()) {
			$method = $this->getRequest()->get('method');
		} else {
			die(500);
		}

		switch ($method) {
			case "add":
				echo Mage::helper('calculation/calculate')->add(1, 2);
				break;
			case "subtract":
				echo Mage::helper('calculation/calculate')->subtract(5, 3);
				break;
			case "multiply":
				echo Mage::helper('calculation/calculate')->multiply(10, 5);
				break;
			case "divide":
				echo Mage::helper('calculation/calculate')->divide(30, 6);
				break;
		}
	}

	public function modelAction(){
		$model = Mage::getModel('siteblocks/block')->load(1);
		//$collections = Mage::getModel('siteblocks/block')->getCollection();
	}

	public function eventAction(){
		$event_data_array  =  ['cid' => '123'];
		Mage::dispatchEvent('almos_calculation_something', $event_data_array);
	}
}