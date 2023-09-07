<?php

namespace HCF;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;

class Loader extends PluginBase {

    public function onEnable(): void{
        $this->getLogger()->info("Discord Command");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if ($command->getName() === "discord") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("discord.command")) {
                    $sender->sendMessage("¡Únete a nuestro servidor de Discord en: https://discord.gg/tudiscord!");
                } else {
                    $sender->sendMessage(TextFormat::RED . "No tienes permiso para ejecutar este comando.");
                }
            } else {
                $sender->sendMessage(TextFormat::RED . "Este comando solo se puede ejecutar en el juego.");
            }
            return true;
        }
        return false;
    }
}