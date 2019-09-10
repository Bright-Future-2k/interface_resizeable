<?php

include_once 'interface.php';
include_once 'Square.php';

class Square extends Shape implements Resizeable
{
    public $size_first;

    public function __construct($name, $size_first)
    {
        parent::__construct($name);
        $this->size_first = $size_first;
    }
    public function setRandom(){
        $this->size_first = $this->resize($this->size_first);
    }
    public function getArea(){
        return pow($this->size_first,2);
    }

    /**
     * @return mixed
     */
    public function getSize_first()
    {
        return $this->size_first;
    }
}




