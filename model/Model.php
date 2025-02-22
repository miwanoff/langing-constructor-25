<?php

class Model
{
    // private $name;
    // private $blocks = [];
    private $name;

    private $blocks = [];

    public function __construct($name = "Landing page", $blocks = [])
    {
        $this->name   = $name;
        $this->blocks = $blocks;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of blocks
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * Set the value of blocks
     *
     * @return  self
     */
    public function setBlocks($blocks)
    {
        $this->blocks = $blocks;

        return $this;
    }

    public function action()
    {
        $blocks = [];
    }
}