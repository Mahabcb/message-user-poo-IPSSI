<?php

namespace App;

abstract class AbstractUser{

    protected ?int $id;
    protected string $name;
    protected string $location;
    protected array $roles = [];

    /**
     * Get the value of id
     */ 
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id) : self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName() : ?string 
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name) : self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of location
     */ 
    public function getLocation() : ?string
    {
        return $this->location;
    }

    /**
     * Set the value of location
     *
     * @return  self
     */ 
    public function setLocation(string $location) : self
    {
        $this->location = $location;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
 
}