<?php

namespace ftp_hahaha;

class ftp_hahaha_loader
{
	public static $ftp_hahaha_dir = NULL;

	public static $loader = NULL;

	public static $ftp_hahaha = [];

	public static $autoload_files = [];

	function __construct()
	{
	}

	public static function Class_Mapping()
	{
		self::$ftp_hahaha = [
			"ftp_hahaha" => [
				"_Items" => [
					"ftp_hahaha_loader" => 'autoload_.php',
				],
			],
			"ha" => [
				"hahaha" => [
					"line" => [
						"bot" => [
							"general" => [
								"command" => [
									"_Items" => [
										"hahaha_command" => 'line/bot/general/commands/hahaha_command.php',
										"hehehe_command" => 'line/bot/general/commands/hehehe_command.php',
									],
								],
								"setting" => [
									"_Items" => [
										"hahaha_setting" => 'line/bot/general/settings/hahaha.php',
										"hehehe_setting" => 'line/bot/general/settings/hehehe.php',
									],
								],
								"_Items" => [
								],
							],
							"hahaha" => [
								"command" => [
									"_Items" => [
										"hahaha_command" => 'line/bot/hahaha/commands/hahaha_command.php',
										"hehehe_command" => 'line/bot/hahaha/commands/hehehe_command.php',
									],
								],
								"setting" => [
									"_Items" => [
										"hahaha_setting" => 'line/bot/hahaha/settings/hahaha.php',
										"hehehe_setting" => 'line/bot/hahaha/settings/hehehe.php',
									],
								],
								"_Items" => [
								],
							],
							"_Items" => [
							],
						],
						"_Items" => [
						],
					],
					"_Items" => [
						"setting" => 'setting.php',
					],
				],
				"_Items" => [
				],
			],
			"_Items" => [
			],
		];
	}

	public static function Autoload_File_Mapping()
	{
		self::$autoload_files = [
		];
	}

	public static function Load_Class_Loader($class)
	{
		// 處理mapping
		if(empty(self::$ftp_hahaha))
		{
			self::Class_Mapping();
		}

		$nodes_ = explode("\\" , $class);

		$find_ = &self::$ftp_hahaha;

		$last_ = count($nodes_) - 1;
		$i = 0;
		foreach($nodes_ as &$node)
		{
			if($i == $last_)
			{
				$find_ = &$find_["_Items"];
				if(empty($temp_ = &$find_[$node]))
				{
					return false;
				}
				$filename_ = &$temp_;
				// 取消reference，避免$temp_ NULL時會加入'key' => NULL
				unset($temp_);

				require self::$ftp_hahaha_dir . $filename_;
			}
			else
			{
				if(empty($temp_ = &$find_[$node]))
				{
					return false;
				}
				$find_ = &$temp_;
				// 取消reference，避免$temp_ NULL時會加入'key' => NULL
				unset($temp_);
				$i++;
			}
		}

	}

	public static function Autoload()
	{
		self::$ftp_hahaha_dir = dirname(__FILE__) . '/';
		if (null !== self::$loader)
		{
			return self::$loader;
		}

		self::$loader = new \ftp_hahaha\ftp_hahaha_loader();
		spl_autoload_register(array('ftp_hahaha\ftp_hahaha_loader', 'Load_Class_Loader'), true, true);

		if(empty(self::$autoload_files))
		{
			self::Autoload_File_Mapping();
		}

		//load autoload files
		// 避免跟其他套件重複引用，這裡用require_once
		foreach (self::$autoload_files as $key => &$file)
		{
			if (empty($GLOBALS['__composer_autoload_files'][$key]))
			{
				require_once self::$ftp_hahaha_dir . $file;
				
				$GLOBALS['__composer_autoload_files'][$key] = true;
			}
		}

		return self::$loader;
	}
}

return \ftp_hahaha\ftp_hahaha_loader::Autoload();