<?php

/*
  _  _____             _        ______
 (_)/ ____|           | |      |___  /
  _| (___  _ __   ___ | | _____   / /
 | |\___ \| '_ \ / _ \| |/ / _ \ / /
 | |____) | |_) | (_) |   <  __// /__
 |_|_____/| .__/ \___/|_|\_\___/_____|
          | |
          |_|
*/

namespace iSpokeZ\HelpCore\commands;

use pocketmine\plugin\PluginBase;

use pocketmine\Player;
use pocketmine\Server;

use iSpokeZ\HelpCore\Main;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class info extends Command {

  private $plugin;

  public function __construct(Main $plugin){
    parent::__construct("hc", "HelpCore info.", "/hc");
    $this->plugin = $plugin;
  }

  public function execute(CommandSender $sender, string $label, array $args){
    $player = $sender->getPlayer();

    $player->sendMessage("§8» §eHelpCore Version 1.0\n§8» §eYouTube: iSpokeZ");
  }
}


 ?>
