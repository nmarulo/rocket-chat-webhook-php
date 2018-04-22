<?php

namespace App\Facades;

use Silver\Support\Facade;

/**
 * rocketChat event provider
 */
class RocketChat extends Facade {
    
    protected static function getClass() {
        return 'App\Helpers\RocketChat';
    }
    
}
