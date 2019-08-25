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

namespace iSpokeZ\HelpCore;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;

use iSpokeZ\HelpCore\commands\Help;
use iSpokeZ\HelpCore\commands\info;
use iSpokeZ\HelpCore\commands\Team;
use iSpokeZ\HelpCore\commands\Rules;

use pocketmine\event\Listener;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener {

  public function onEnable(){
    $this->getLogger()->info("\n§8╔══════════════║ §aHelpCore§8 ║ ══════════════\n║ §8» §ePlugin Coding by iSpokeZ §8\n║ §8» §ePlugin Language Turkish §8\n║ §8» §ePlugin Version 1.0 §8\n╚══════════════════════════════════════════");
    $this->getServer()->getCommandMap()->register("yardim", new Help($this));
    $this->getServer()->getCommandMap()->register("hc", new info($this));
    $this->getServer()->getCommandMap()->register("ekip", new Team($this));
    $this->getServer()->getCommandMap()->register("kurallar", new Rules($this));
  }
}

 ?>
