<?php

namespace HCFCom\command;

use pocketmine\player\Player;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class HealthCommand extends Command {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
  
  public $prefix = "§8[§cHealth§8] §7» ";
  
  public function __construct(){
    parent::__construct("health", "Rellena Tu Barra De Corazones", null, ["vida"]);
  }
  
  public function execute(CommandSender $pl, string $label, array $args){
    if($pl instanceof Player){
      if(!$pl->hasPermission("hyper.cmd.health")){
        $pl->sendMessage("§l§4! §r§7Oops Al Parecer No Tienes Permisos Para Hacer Esto");
        return;
      }
      $pl->setHealth(20);
      $pl->sendMessage($this->prefix."Tu Vida Se Ah Rellenado al Maximo");
      
    }else{
      
    }
  }
}
