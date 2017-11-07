<?php


class Almos_Calculation_Model_Observer
{
	public function someName(Varien_Event_Observer $observer)
	{
		$cid = $observer->getCid();
		echo $cid;
	}
}
