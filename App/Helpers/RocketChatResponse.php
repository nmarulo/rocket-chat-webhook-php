<?php

namespace App\Helpers;

/**
 * RocketChatResponse Helper
 */
class RocketChatResponse implements \JsonSerializable {
    
    /** @var string */
    private $text;
    
    /** @var array */
    private $attachments;
    
    /**
     * RocketChatResponse constructor.
     */
    public function __construct() {
    }
    
    public function jsonSerialize() {
        return [
                'text'        => $this->text,
                'attachments' => $this->attachments,
        ];
    }
    
    /**
     * @return string
     */
    public function getText() {
        return $this->text;
    }
    
    /**
     * @param string $text
     */
    public function setText($text) {
        $this->text = $text;
    }
    
    /**
     * @return array
     */
    public function getAttachments() {
        return $this->attachments;
    }
    
    /**
     * @param array $attachments
     */
    public function setAttachments($attachments) {
        $this->attachments = $attachments;
    }
    
}
