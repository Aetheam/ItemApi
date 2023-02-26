<?php

namespace Mentagess\Api;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

use Mentagess\Api\ItemApi;

class Main extends PluginBase{

	public function onEnable() : void{
		$this->getLogger()->info(TextFormat::DARK_GREEN . "Plugin enabled !");
		ItemApi::init;
	}

	public function onDisable() : void{
		$this->getLogger()->info(TextFormat::DARK_RED . "Plugin disabled! ");
	}

}
