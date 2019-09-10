<?php
include_once 'interface.php';
include_once 'Shape.php';
class Rect extends Shape implements Resizeable
{

    public $size_third;

    public function __construct($name,$size_third)
    {
        parent::__construct($name);
        $this->size_third = $size_third;
    }
    public function setArea(){
        return $this->size_third * $this->size_third;
    }
    public function setRandom(){
        $this->size_third = $this->resize($this->size_third);
    }

    public function getSizeThird()
    {
        return $this->size_third;
    }
}