<?php


class Almos_Calculation_Model_Observer
{
	public function someName(Varien_Event_Observer $observer)
	{
		$cid = $observer->getCid();
		echo $cid;
	}

	public function loginEvent(Varien_Event_Observer $observer)
	{
		$botToken = "377789587:AAHpNXDJ-oj0Iet7hfqnleoIrEPwZOh_QNE";
		$chatId = 226843018;
		$website = "https://api.telegram.org/bot" . $botToken;
		$params = [
			'chat_id' => $chatId,
			'text' => "Вход в админку. Ip: " . $this->getRealIpAddr(),
		];
		$ch = curl_init($website . '/sendMessage');
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);
	}

	public function getRealIpAddr()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

}
