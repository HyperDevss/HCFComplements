<?php

namespace HCFCom\command;

use HCFCom\Main;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;

class FeedCommand extends Command {

    public function __construct() {
        parent::__construct("feed", "Feed yourself whit this command");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): void {
      if(!$sender->hasPermission("feed.command.use")) {
        $sender->sendMessage(TextFormat::colorize("§cYou don't have permission to use this command!"));
        return false;
      }
      $sender->getHungerManager()->setFood(20);
      $sender->sendMessage(TextFormat::colorize("§aYou have been feeded!"));
    }
}
