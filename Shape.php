<?php
class Shape implements Resizeable
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function resize($size)
    {
        return $size + rand(1,100);
        // TODO: Implement resize() method.
    }
    public function getSize()
    {
        return $this;
        // TODO: Implement getSize() method.
    }
}