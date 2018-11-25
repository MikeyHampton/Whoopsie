<?php
namespace main;
use pocketmine\command\CommandExecutor;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class Main extends PluginBase implements Listener {
	public $prefix = "CMDs";

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info("MoreCMDs Enabled");
	}

	public function OnCommand(CommandSender $sender, Command $cmd, string $label, array $args) {
		if($cmd->getName() == "hub"){
			$sender->sendMessage("Teleporting To Server Hub");
			$sender->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
		}
	}
}
