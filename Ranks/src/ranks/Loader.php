<?php

namespace ranks;

use pocketmine\plugin\PluginBase;

class Loader extends PluginBase {
    
    public function onEnable(): void{
        $this->getLogger()->info("Rank plugin enabled");
    }
}