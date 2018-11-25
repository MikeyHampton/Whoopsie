<?php

namespace Raptor14\MoreCMDs;

use pocketmine\Plugin;
use pocketmine\command\CommandExecutor;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\server;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase implements Listener {
	public $prefix = C::YELLOW."CMDs".C::DARK_GRAY." >".C::WHITE." ";

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info("MoreCMDs Enabled!");
	}

	public function OnCommand(CommandSender $sender, Command $cmd, string $label, array $args) {
		if($cmd->getName() == "hub"){
			$sender->sendMessage(C::GREEN . "Teleporting to hub...");
			$sender->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
		}
	}
}
