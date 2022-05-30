<?php

namespace HCFCom\Command;

use HCFCom\Main;
use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class RenameCommand extends Command {
  
  public $prefix = "§8[§eRename§8] §7» ";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
  
  public function __construct() {
        parent::__construct("rename", "Rename your items whit this command", null, ["rm"]);
    }
    
    public function execute(CommandSender $pl, string $label, array $args){
        if(!$pl->hasPermission("rename.command.use")){
            $pl->sendMessage("§l§4! §r§7Oops Al Parecer No Tienes Permisos Para Hacer Esto");
            return;
        }
          if(!isset($args[0])) {
              $pl->sendMessage(TextFormat::colorize("§cYou need more arguments"));
              return;
          }
          $item = $pl->getInventory()->getItemInHand();
          $newName = implode(" ", $args);
          if($item->isNull()){
              return;
          }
          $item->clearCustomName();
          $item->setCustomName($newName);
          $pl->getInventory()->setItemInHand($item);
          $pl->sendMessage($this->prefix."You have been renamed your item correctly §fNew name: $newName");
    }
}
