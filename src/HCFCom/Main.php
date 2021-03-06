<?php

namespace HCFCom;

use HCFCom\command\RenameCommand;
use HCFCom\command\FeedCommand;
use HCFCom\command\EnderChestCommand;
use HCFCom\command\HealthCommand;

use pocketmine\plugin\PluginBase;
use muqsit\invmenu\InvMenuHandler;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {
  
  public function onEnable() : void {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
    # registro de comandos
    $this->getServer()->getCommandMap()->register("rename", new RenameCommand());
    $this->getServer()->getCommandMap()->register("feed", new FeedCommand());
    $this->getServer()->getCommandMap()->register("ender", new EnderChestCommand());
    $this->getServer()->getCommandMap()->register("health", new HealthCommand());
    
    $this->getLogger()->info(TextFormat::colorize("§aPlugin Activado"));

    if (!InvMenuHandler::isRegistered()) {
            InvMenuHandler::register($this);
        }
  }
  
  public function onDisable() : void {
    $this->getLogger()->info(TextFormat::colorize("§cPlugin Desactivado"));
  }
    
}
