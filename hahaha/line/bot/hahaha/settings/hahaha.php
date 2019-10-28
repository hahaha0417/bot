<?php

// namespace 變數空間\使用者\line\bot\callback;
namespace ha\hahaha\line\bot\hahaha\setting;


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
	Callback設定檔
	*/	
	public function Initial()
	{
		// --------------------------------------------------------------------------
		$setting = $this;
		// --------------------------------------------------------------------------
		// Line
		$setting->Initial = [
			'command' => [
				// 指令
				'hahaha_command',
				'hehehe_command',
			],
			'fsm' => [
				// 有限狀態機
			],
		];
		
		return $this;
		
	}
	
	
	
}

