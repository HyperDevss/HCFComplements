<?php

namespace HCFCom\command;

use HCFCom\Main;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;

class FeedCommand extends Command {
  
  public $prefix = "§8[§eFeed§8] §7» ";
  
    public function __construct() {
        parent::__construct("feed", "Feed yourself whit this command", null, ["food"]);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
    }

    public function execute(CommandSender $pl, string $commandLabel, array $args): void {
      if(!$pl->hasPermission("feed.command.use")) {
        $pl->sendMessage(TextFormat::colorize("§cYou don't have permission to use this command!"));
        return false;
      }
      $pl->getHungerManager()->setFood(20);
      $pl->sendMessage($this->prefix."Tu Barra de Comida Se Restauro!");
    }
}
