<?php

namespace App\Helpers;

use Silver\Core\Bootstrap\Facades\Request;
use Silver\Core\Env;
use Silver\Http\Curl;

/**
 * rocketChat Helper
 */
class RocketChat {
    
    /** @var RocketChatRequest */
    private $request;
    
    /**
     * @param RocketChatResponse $response
     */
    public function sendResponse($response) {
        Curl::post(Env::get('rocket_chat_incoming_url'), $response->jsonSerialize());
    }
    
    public function initRequest() {
        $this->request = new RocketChatRequest(file_get_contents('php://input'));
    }
    
    /**
     * @return bool
     */
    public function checks() {
        return $this->checkOutGoingToken() && $this->checkBotName();
    }
    
    private function checkOutGoingToken() {
        $token = $this->request->getToken();
        
        return !empty($token) && $token == Env::get('rocket_chat_outgoing_token');
    }
    
    private function checkBotName() {
        return Env::get('rocket_chat_bot_name') != $this->request->getUserName();
    }
    
    /**
     * @return RocketChatRequest
     */
    public function getRequest() {
        return $this->request;
    }
    
}
