<?php
namespace MagicConstants\Vehicles\Cars\CarParts;

trait Engine {

    public function check_oil_level() {
        echo "Engine oil level good. Trait: " . __TRAIT__;
    }
}