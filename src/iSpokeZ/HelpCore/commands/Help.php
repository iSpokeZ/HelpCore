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
use pocketmine\plugin\Plugin;
use pocketmine\Server;
use pocketmine\Player;

use iSpokeZ\HelpCore\Main;
use iSpokeZ\HelpCore\forms\Form;
use iSpokeZ\HelpCore\forms\SimpleForm;
use iSpokeZ\HelpCore\forms\CustomForm;
use iSpokeZ\HelpCore\forms\ModalForm;
use iSpokeZ\HelpCore\forms\FormAPI;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Help extends Command {

  private $plugin;

  public function __construct(Main $plugin){
    parent::__construct("yardim", "Help command.", "/yardim");
    $this->plugin = $plugin;
  }

  public function execute(CommandSender $sender, string $label, array $args){
    $form = new SimpleForm (function (Player $event, $data){

      if($data === null){
        return;
      }
      switch($data){
        case 0:
        break;
      }
    });
    $player = $sender->getPlayer();
    $form->setTitle("Yardım Menüsü");
    $form->setContent("Yazılacak...\nYazılacak...");
    $form->addButton("Tamam");
    $form->sendToPlayer($player);
  }
}

 ?>
