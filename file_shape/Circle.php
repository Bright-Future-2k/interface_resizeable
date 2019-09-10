<?php
include_once 'interface.php';
include_once 'Shape.php';

class Circle extends Shape implements Resizeable
{
    public $size_second;

    public function __construct($name,$size_second)
    {
        parent::__construct($name);
        $this->name = $size_second;
    }

    public function setRandom (){
        $this->size_second = $this->resize($this->size_second);
    }
    public function area (){
        return $this->size_second * $this->size_second *pi();
    }
    public function getRadius(){
        return $this->size_second;
    }
}