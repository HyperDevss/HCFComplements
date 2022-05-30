<?php

namespace HCFCom;

use HCFCom\command\RenameCommand;
use HCFCom\command\FeedCommand;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {
  
  public function onEnable() : void {
    # registro de comandos
    $this->getServer()->getCommandMap()->register("rename", new RenameCommand());
    $this->getServer()->getCommandMap()->register("feed", new FeedCommand());
    
    $this->getLogger()->info(TextFormat::colorize("§aPlugin Activado"));
  }
  
  public function onDisable() : void {
    $this->getLogger()->info(TextFormat::colorize("§cPlugin Desactivado"));
  }
    
}
