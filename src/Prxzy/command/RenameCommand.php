<?php

namespace Prxzy\Command;

use Prxzy\Main;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class RenameCommand extends Command {
  public function __construct() {
        parent::__construct("rename", "Rename your items whit this command");
    }
    
	public function execute(CommandSender $sender, String $label, Array $args) : void {
	  if(!$sender->hasPermission("rename.command.use")){
            $sender->sendMessage(TextFormat::colorize("§cYou have not permissions to use this command"));
            return;
	  }
		if(!isset($args[0])) {
			$sender->sendMessage(TextFormat::colorize("§cYou need more arguments"));
			return;
		}
		$item = $sender->getInventory()->getItemInHand();
		$newName = implode(" ", $args);
		if($item->isNull()){
			return;
		}
		$item->clearCustomName();
		$item->setCustomName($newName);
		$sender->getInventory()->setItemInHand($item);
		$sender->sendMessage(TextFormat::colorize("§aYou have been renamed your item correctly\n§fNew name: $newName"));
	}
}
