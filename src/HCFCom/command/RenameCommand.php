<?php

namespace HCFCom\Command;

use HCFCom\Main;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class RenameCommand extends Command {
  
  public $prefix = "§8[§eRename§8] §7» ";
  
  public function __construct() {
        parent::__construct("rename", "Rename your items whit this command", null, ["rm"]);
    }
    
	public function execute(CommandSender $pl, String $label, Array $args) : void {
	  if(!$pl->hasPermission("rename.command.use")){
            $pl->sendMessage(TextFormat::colorize("§cYou have not permissions to use this command"));
            return false;
	  }
		if(!isset($args[0])) {
			$pl->sendMessage(TextFormat::colorize("§cYou need more arguments"));
			return false;
		}
		$item = $pl->getInventory()->getItemInHand();
		$newName = implode(" ", $args);
		if($item->isNull()){
			return false;
		}
		$item->clearCustomName();
		$item->setCustomName($newName);
		$pl->getInventory()->setItemInHand($item);
		$pl->sendMessage($this->prefix."You have been renamed your item correctly §fNew name: $newName");
	}
}
