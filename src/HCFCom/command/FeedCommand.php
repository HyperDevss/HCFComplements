<?php

namespace HCFCom\command;

use HCFCom\Main;
use pocketmine\player\Player;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;

class FeedCommand extends Command {
  
  public $prefix = "§8[§eFeed§8] §7» ";
  
    public function __construct() {
        parent::__construct("feed", "Feed yourself whit this command", null, ["food"]);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
    }

    public function execute(CommandSender $pl, string $commandLabel, array $args){
      if($pl instanceof Player){
        if(!$pl->hasPermission("feed.command.use")) {
        $pl->sendMessage("§l§4! §r§7Oops Al Parecer No Tienes Permisos Para Hacer Esto");
        return;
      }
        $pl->getHungerManager()->setFood(20);
        $pl->sendMessage($this->prefix."Tu Barra de Comida Se Restauro!");
      }else{

      }
    }
}
