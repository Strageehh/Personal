<?php

declare(strict_types=1);

namespace juqn\betterranks\rank;

use juqn\betterranks\BetterRanks;
use pocketmine\utils\Config;

final class RankFactory {

    /** @var Rank[] */
    private static array $ranks = [];

    public static function getAll(): array {
        return self::$ranks;
    }

    public static function get(string $name): ?Rank {
        return self::$ranks[$name] ?? null;
    }

    public static function loadAll(): void {
        $config = new Config(BetterRanks::getInstance()->getDataFolder() . 'ranks.yml', Config::YAML);
        $data = $config->getAll();
        $priority = 0;

        foreach ($data as $name => $rank) {
            self::$ranks[$name] = new Rank($name, $rank['rank-format'], $rank['nametag-format'], $rank['chat-format'], $rank['color-format'], $priority++, $rank['permissions'] ?? []);
        }
        BetterRanks::getInstance()->getLogger()->info('Ranks loaded ' . count(self::$ranks));
    }
}