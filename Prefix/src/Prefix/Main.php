<?php

namespace Prefix;

use pocketmine\event\player\PlayerChatEvent;
use pocketmine\player\Player;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener {

    public function onEnable(): void{
        $this->getLogger()->info("Prefixes On");
  }

  public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
    if ($command->getName() === "setprefix") {
        if ($sender instanceof Player) {
            if ($sender->haspermission("prefix.command")) {
                $sender->sendMessage("Uso Incorrecto /setprefix (jugador)");
            }
        }
    }
  }
  {
     
  }
}