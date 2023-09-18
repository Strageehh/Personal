<?php

namespace UI;

use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use FormAPI\SimpleForm;

class Main extends PluginBase
{
  if ($player instanceof Player) {
    $form->setTitle("Example UI");
  }
}