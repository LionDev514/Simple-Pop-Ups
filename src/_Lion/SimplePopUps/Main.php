<?php
namespace _Lion\SimplePopUps;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getLogger()->info("Loading...");
                $this->getLogger()->info("Done!");		
	}

	public function onDisable(){
		$this->getLogger()->info("Disabling..");
                $this->getLogger()->info("Disabled!");
	}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
            if(count($args)<1){
                $sender->sendMessage(TextFormat::RED."Usage: ".$command->getUsage());
                return true;
            }
            
		switch($command->getName()){
			case "pop-up":
                            $msg=implode(" ", $args);                         
                            $this->popup($msg);
                            $sender->sendMessage(TextFormat::GREEN."Done!");
                            return true;
                        case "tip":
                            $msg=implode(" ", $args);                            
                            $this->tip($msg); 
                            $sender->sendMessage(TextFormat::GREEN."Done!");
                            return true;
		}
	}
        public function popup($ms){
              $this->getServer()->broadcastPopup($ms);
        }
        public function tip($ms){            
                $this->getServer()->broadcastTip($ms);
        }

}
