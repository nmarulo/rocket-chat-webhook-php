<?php

namespace App\Helpers;

/**
 * RocketChatAttachment Helper
 */
class RocketChatAttachment implements \JsonSerializable {
    
    /**
     * Ejemplo: "#FF0000"
     * @var string
     */
    private $color;
    
    /**
     * Ejemplo: "Rocket.Cat"
     * @var string
     */
    private $author_name;
    
    /**
     * Ejemplo: "https://open.rocket.chat/direct/rocket.cat"
     * @var string
     */
    private $author_link;
    
    /**
     * Ejemplo: "https://open.rocket.chat/avatar/rocket.cat.jpg"
     * @var string
     */
    private $author_icon;
    
    /**
     * Ejemplo: "Rocket.Chat"
     * @var string
     */
    private $title;
    
    /**
     * Ejemplo: "https://rocket.chat"
     * @var string
     */
    private $title_link;
    
    /**
     * Ejemplo: "Rocket.Chat, the best open source chat"
     * @var string
     */
    private $text;
    
    /**
     * @var array
     */
    private $fields;
    
    /**
     * Ejemplo: "https://rocket.chat/images/mockup.png"
     * @var string
     */
    private $image_url;
    
    /**
     * Ejemplo: "https://rocket.chat/images/mockup.png"
     * @var string
     */
    private $thumb_url;
    
    /**
     * RocketChatAttachment constructor.
     */
    public function __construct() {
    }
    
    public function jsonSerialize() {
        return [
                'color'       => $this->color,
                'author_name' => $this->author_name,
                'author_link' => $this->author_link,
                'author_icon' => $this->author_icon,
                'title'       => $this->title,
                'title_link'  => $this->title_link,
                'text'        => $this->text,
                'fields'      => $this->fields,
                'image_url'   => $this->image_url,
                'thumb_url'   => $this->thumb_url,
        ];
    }
    
    /**
     * @return string
     */
    public function getColor() {
        return $this->color;
    }
    
    /**
     * @param string $color
     */
    public function setColor($color) {
        $this->color = $color;
    }
    
    /**
     * @return string
     */
    public function getAuthorName() {
        return $this->author_name;
    }
    
    /**
     * @param string $author_name
     */
    public function setAuthorName($author_name) {
        $this->author_name = $author_name;
    }
    
    /**
     * @return string
     */
    public function getAuthorLink() {
        return $this->author_link;
    }
    
    /**
     * @param string $author_link
     */
    public function setAuthorLink($author_link) {
        $this->author_link = $author_link;
    }
    
    /**
     * @return string
     */
    public function getAuthorIcon() {
        return $this->author_icon;
    }
    
    /**
     * @param string $author_icon
     */
    public function setAuthorIcon($author_icon) {
        $this->author_icon = $author_icon;
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
    public function getTitleLink() {
        return $this->title_link;
    }
    
    /**
     * @param string $title_link
     */
    public function setTitleLink($title_link) {
        $this->title_link = $title_link;
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
    public function getFields() {
        return $this->fields;
    }
    
    /**
     * @param array $fields
     */
    public function setFields($fields) {
        $this->fields = $fields;
    }
    
    /**
     * @return string
     */
    public function getImageUrl() {
        return $this->image_url;
    }
    
    /**
     * @param string $image_url
     */
    public function setImageUrl($image_url) {
        $this->image_url = $image_url;
    }
    
    /**
     * @return string
     */
    public function getThumbUrl() {
        return $this->thumb_url;
    }
    
    /**
     * @param string $thumb_url
     */
    public function setThumbUrl($thumb_url) {
        $this->thumb_url = $thumb_url;
    }
    
}
