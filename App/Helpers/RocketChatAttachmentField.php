<?php

namespace App\Helpers;

/**
 * RocketChatAttachmentField Helper
 */
class RocketChatAttachmentField implements \JsonSerializable {
    
    /**
     * Ejemplo: "Priority"
     * @var string
     */
    private $title;
    
    /**
     * Ejemplo: "High"
     * @var string
     */
    private $value;
    
    /**
     * Ejemplo: false
     * @var boolean
     */
    private $short;
    
    /**
     * RocketChatAttachmentField constructor.
     */
    public function __construct() {
    }
    
    public function jsonSerialize() {
        return [
                'title' => $this->title,
                'value' => $this->value,
                'short' => $this->short,
        ];
    }
    
    /**
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }
    
    /**
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }
    
    /**
     * @return string
     */
    public function getValue() {
        return $this->value;
    }
    
    /**
     * @param string $value
     */
    public function setValue($value) {
        $this->value = $value;
    }
    
    /**
     * @return bool
     */
    public function isShort() {
        return $this->short;
    }
    
    /**
     * @param bool $short
     */
    public function setShort($short) {
        $this->short = $short;
    }
    
}
