<?php

namespace App;

use App\User;
use DateTime;
use App\AbstractUser;

class Message{
    
    private ?int $id;
    private string $content;
    private DateTime $createdAt;
    private AbstractUser $author;

    public function __construct()
    {
        $this->createdAt = new DateTime("Europe/Paris");
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of createdAt
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @return  self
     */ 
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor(AbstractUser $author)
    {
        $this->author = $author;

        return $this;
    }

    public function sendMessage($content, $author){
        return $this->content . " by " . $this->author;
    }
    
    public function render()
    {
        return $this->content . " by " . $this->author . " at " . $this->createdAt->format("d/m/Y H:i:s");

    }
}