<?php

// namespace 變數空間\使用者;
namespace ha\hahaha\line\bot\setting;


class hahaha_setting
{
	use \hahahalib\hahaha_instance_trait;

	function __construct($initial = true)
	{		
		if($initial)
		{
			$this->Initial();
		}
	}
	
	/*
	初始化設定
	*/	
	public function Initial()
	{
		// --------------------------------------------------------------------------
		$setting = $this;
		// --------------------------------------------------------------------------
		// Line
		$setting->Line = new \stdClass;
		$setting->Line->Bot = new \stdClass;
		// --------------------------------------------------------------------------
		// Hahaha
		$setting->Line->Bot->Hahaha = new \stdClass;
		// /api/1.0/line/bot/common/callback/ha[user]/ha[callback]/ha[setting]
		$setting->Line->Bot->Hahaha->Callback = "/api/1.0/line/bot/common/callback/hahaha/hahaha/hahaha";
		$setting->Line->Bot->Hahaha->Channel_Access_Token = "XZ/aRGhr5L2BL0sMqY5kQlgnZpxMMj0z4KmkN9MhmXBEg8EoNzr87YnN8gk+DloX/mOW0nO3Bt2kQrwWRrRq6KBjxGaTQj+jhiWleHfnh5BjrgDWLt531qw5DBUGtdecgLdAXZdFPYw+mzkn0WFtWAdB04t89/1O/w1cDnyilFU=";
		$setting->Line->Bot->Hahaha->Channel_Secret = "9e496a8d920ec0fefb5a937e0107e574";
		
		// --------------------------------------------------------------------------

		return $this;
	}
	
	
	
}

