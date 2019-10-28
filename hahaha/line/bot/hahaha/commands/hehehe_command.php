<?php

// namespace 變數空間\使用者\line\bot\callback;
namespace ha\hahaha\line\bot\hahaha\command;


class hehehe_command
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
	命令設定檔
	格式為 xxx!xxx!xxx:hello
	由於設計上，這邊是靜態回覆指令，因此如果要callback處理則可能另外做在專案內
	(由於我希望高QPS，因此沒必要是不走硬碟的，避免硬碟讀寫頭移動導致效能變慢，有測過壓力測試，讀取DB時(他會去讀硬碟資料)，QPS超級低)
	當然可以用SSD就解決了，但是那很花錢，且SSD很容易壞
	// 如要處理即時訊息，可能做個排程，定期將資料撈成檔案，再將檔案切換成新的(利用Server API or Redis做鎖，更新資料)
	*/	
	public function Initial()
	{
		// --------------------------------------------------------------------------
		$setting = $this;
		// --------------------------------------------------------------------------
		// Line
		$setting->Commands = [
			'_Items' => [
				// 指令
			],
			/*
			'xxx' => [
				'_Items' => [					
				],
			],
			*/
		];
		
		return $this;
	}
	
	
	
}

