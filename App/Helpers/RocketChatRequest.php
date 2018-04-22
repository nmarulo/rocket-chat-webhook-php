<?php

namespace App\Helpers;

/**
 * RocketChatRequest Helper
 */
class RocketChatRequest implements \JsonSerializable {
    
    /**
     * Ejemplo: "CtWwf3MW2GiEvwsEo2FgYytF"
     * @var string
     */
    private $token;
    
    /**
     * Ejemplo: false
     * @var boolean
     */
    private $bot;
    
    /**
     * Ejemplo: "okbot"
     * @var string
     */
    private $trigger_word;
    
    /**
     * Ejemplo: "GY4sz6ebAZBumFQm4"
     * @var string
     */
    private $channel_id;
    
    /**
     * Ejemplo: "test"
     * @var string
     */
    private $channel_name;
    
    /**
     * Ejemplo: "wqRw4vnLNZkCcJ9Pv"
     * @var string
     */
    private $message_id;
    
    /**
     * Ejemplo: "2018-04-21T16:37:28.725Z"
     * @var string
     */
    private $timestamp;
    
    /**
     * Ejemplo: "PhLufzj8dr8EJ29aG"
     * @var string
     */
    private $user_id;
    
    /**
     * Ejemplo: "marulo"
     * @var string
     */
    private $user_name;
    
    /**
     * Ejemplo: "okbot
     * @var string
     */
    private $text;
    
    /**
     * RocketChatRequest constructor.
     *
     * @param string $input
     */
    public function __construct($input) {
        $jsonDecode         = json_decode($input, TRUE);
        $this->token        = $jsonDecode['token'];
        $this->bot          = $jsonDecode['bot'];
        $this->trigger_word = $jsonDecode['trigger_word'];
        $this->channel_id   = $jsonDecode['channel_id'];
        $this->channel_name = $jsonDecode['channel_name'];
        $this->message_id   = $jsonDecode['message_id'];
        $this->timestamp    = $jsonDecode['timestamp'];
        $this->user_id      = $jsonDecode['user_id'];
        $this->user_name    = $jsonDecode['user_name'];
        $this->text         = $jsonDecode['text'];
    }
    
    public function jsonSerialize() {
        return [
                'token'        => $this->token,
                'bot'          => $this->bot,
                'trigger_word' => $this->trigger_word,
                'channel_id'   => $this->channel_id,
                'channel_name' => $this->channel_name,
                'message_id'   => $this->message_id,
                'timestamp'    => $this->timestamp,
                'user_id'      => $this->user_id,
                'user_name'    => $this->user_name,
                'text'         => $this->text,
        ];
    }
    
    /**
     * @return string
     */
    public function getToken() {
        return $this->token;
    }
    
    /**
     * @return bool
     */
    public function isBot() {
        return $this->bot;
    }
    
    /**
     * @return string
     */
    public function getTriggerWord() {
        return $this->trigger_word;
    }
    
    /**
     * @return string
     */
    public function getChannelId() {
        return $this->channel_id;
    }
    
    /**
     * @return string
     */
    public function getChannelName() {
        return $this->channel_name;
    }
    
    /**
     * @return string
     */
    public function getMessageId() {
        return $this->message_id;
    }
    
    /**
     * @return string
     */
    public function getTimestamp() {
        return $this->timestamp;
    }
    
    /**
     * @return string
     */
    public function getUserId() {
        return $this->user_id;
    }
    
    /**
     * @return string
     */
    public function getUserName() {
        return $this->user_name;
    }
    
    /**
     * @return string
     */
    public function getText() {
        return $this->text;
    }
    
}
