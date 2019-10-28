<?php

// namespace 變數空間\使用者\line\bot\callback;
namespace ha\hahaha\line\bot\hahaha\command;


class hahaha_command
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
			'test' => [
				'_Items' => [
					'text' => [
						'command' => 'text',
						'text' => '文字'
					],
					'image' => [
						'command' => 'image',
						'origin_url' => 'https://hahaha0417.zapto.org:8443/image/front/home/overview/OBS%20iForm%E7%A4%BA%E6%84%8F%E5%9C%96.png',
						'preview_url' => 'https://hahaha0417.zapto.org:8443/image/front/home/overview/OBS%20iForm%E7%A4%BA%E6%84%8F%E5%9C%96.png',
					],
					'video' => [
						'command' => 'video',
						'origin_url' => 'https://hahaha0417.zapto.org:8443/video/Oring.mp4',
						'preview_url' => 'https://hahaha0417.zapto.org:8443/image/front/home/overview/OBS%20iForm%E7%A4%BA%E6%84%8F%E5%9C%96.png',
					],
					'audio' => [
						'command' => 'audio',
						'origin_url' => 'https://static.rti.org.tw/assets/audio/2019/09/13/1_20190913_2005_1572.mp3',
						'time' => '10',
					],
					'location' => [
						'command' => 'location',
						'title' => 'title',
						'address' => '台北車站',
						'latitude' => '25.0478142',
						'longitude' => '121.51694880000002',
					],
					'sticker' => [
						'command' => 'sticker',
						'package_id' => '1',
						'sticker_id' => '1',
					],
					'raw' => [
						'command' => 'raw',
						'message' => [
							'abc',
							'123'
						],
					],
					'multiple' => [
						'command' => 'multiple',
						'messages' => [
							'text' => [
								'text' => 'multiple',
							],
							'image' => [
								'image' => 'https://hahaha0417.zapto.org:8443/image/front/home/overview/OBS%20iForm%E7%A4%BA%E6%84%8F%E5%9C%96.png', 						
								'preview' => 'https://hahaha0417.zapto.org:8443/image/front/home/overview/OBS%20iForm%E7%A4%BA%E6%84%8F%E5%9C%96.png',
							],
							'video' => [
								'video' => 'https://hahaha0417.zapto.org:8443/video/Oring.mp4', 						
								'preview' => 'https://hahaha0417.zapto.org:8443/image/front/home/overview/OBS%20iForm%E7%A4%BA%E6%84%8F%E5%9C%96.png',
							],
							'audio' => [
								'audio' => 'https://static.rti.org.tw/assets/audio/2019/09/13/1_20190913_2005_1572.mp3',
								'duration' => '10',						
							],
							'location' => [
								'title' => 'location',
								'address' => '台北車站',
								'latitude' => '25.0478142',
								'longitude' => '121.51694880000002',
							],	
							/*
							// 不可和location同時送
							'sticker' => [
								'package_id' => 1,
								'sticker_id' => 1, 
							],
							*/
						]
					],
					'time' => [
						'command' => 'time',
					],
				],
			],
			
		];
		
		return $this;
	}
	
	
	
}

