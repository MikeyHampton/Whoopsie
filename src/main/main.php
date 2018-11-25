<?php
namespace main;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class main extends PluginBase implements Listener{

    public function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents(($this), $this);
        $this->getLogger()->info("hub command enabled");
    }
    public function onDisable(): void{
        $this->getServer()->getPluginManager()->registerEvents(($this), $this);
        $this->getLogger()->info("hub command disabled");
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args):bool{
        if($cmd->getName() == "hub"){
            if(!($sender instanceof Player)){
                $sender->sendMessage("teleporting to hub", false);
                $sender->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
                return true;
		}
	}
}
