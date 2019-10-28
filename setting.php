<?php

// namespace 變數空間\使用者;
namespace ha\bot;


class setting
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
		// 對應資料夾，裡面會有setting.php
		$setting->User = [
			'hahaha'
		];
		
	}
	
	
	
}

