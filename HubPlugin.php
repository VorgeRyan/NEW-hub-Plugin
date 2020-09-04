<?php
namespace VorgeRyan\Hub;
use pocketmine\plugin\PluginBase;
use pocketmine\{Server, Player};
use pocketmine\command\{Command, CommandSender};
use pocketmine\event\Listener;
class Main extends PluginBase implements Listener{
	
	public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
		switch($cmd->getName()){
			case "hub":
				if($sender instanceof Player){
					$sender->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
				} else {}
			break;
		}return true;
    }
}