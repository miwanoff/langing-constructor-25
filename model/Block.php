<?php

abstract class Block
{
    // protected = $on;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public abstract function draw();

}