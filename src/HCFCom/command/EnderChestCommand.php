<?php

namespace HCFCom\command;

use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use muqsit\invmenu\transaction\InvMenuTransactionResult;
use muqsit\invmenu\transaction\InvMenuTransaction;
use muqsit\invmenu\type\InvMenuTypeIds;
use muqsit\invmenu\InvMenu;

class EnderChestCommand extends Command {
  
  public $prefix = "§8[§5EnderChest§8] §7» ";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
  
  public function __construct(){
    parent::__construct("ender", "Open EnderChest", null, ["enderchest", "chest", "ender"]);
  }
}
