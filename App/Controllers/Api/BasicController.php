<?php

namespace App\Controllers\Api;

use App\Facades\RocketChat;
use App\Helpers\RocketChatResponse;
use Silver\Core\Controller;

/**
 * api/basic controller
 */
class BasicController extends Controller {
    
    public function index() {
        $rocketChatRequest  = RocketChat::getRequest();
        $rocketChatResponse = new RocketChatResponse();
        $text               = $rocketChatRequest->getText();
        $words              = include ROOT . 'test-rocket-chat' . EXT;
        
        foreach ($words as $key => $value) {
            if (preg_match($key, $text)) {
                $rocketChatResponse->setText($value);
                RocketChat::sendResponse($rocketChatResponse);
                break;
            }
        }
    }
}
