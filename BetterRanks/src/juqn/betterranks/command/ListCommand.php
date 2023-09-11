<?php

declare(strict_types=1);

namespace juqn\betterranks\command;

use juqn\betterranks\BetterRanks;
use juqn\betterranks\rank\Rank;
use juqn\betterranks\rank\RankFactory;
use juqn\betterranks\session\Session;
use juqn\betterranks\session\SessionFactory;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\KnownTranslationFactory;
use pocketmine\permission\DefaultPermissionNames;
use pocketmine\utils\TextFormat;

final class ListCommand extends Command {

    public function __construct() {
        parent::__construct('list', KnownTranslationFactory::pocketmine_command_list_description());
        $this->setPermission(DefaultPermissionNames::COMMAND_LIST);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): void {
        if (!$this->testPermission($sender)) {
            return;
        }
        $ranks = RankFactory::getAll();
        $sessions = array_filter(SessionFactory::getAll(), fn(Session $session) => $session->isOnline());

        uasort($ranks, fn(Rank $firstRank, Rank $secondRank) => $firstRank->getPriority() <=> $secondRank->getPriority());
        uasort($sessions, fn(Session $firstSession, Session $secondSession) => $firstSession->getRank()->getPriority() <=> $secondSession->getRank()->getPriority());

        $sender->sendMessage(TextFormat::colorize(
            '&r&r' . PHP_EOL .
            implode('&r, ', array_map(fn(Rank $rank) => $rank->getFormat(), $ranks)) . PHP_EOL .
            '&8(&2' . count($sessions) . '/' . $sender->getServer()->getMaxPlayers() . ') &8[&r' .
            implode('&r, ', array_map(fn(Session $session) => $session->getRank()->getColorFormat() . $session->getName(), $sessions)) . '&8]' . PHP_EOL .
            '&r'
        ));
    }
}