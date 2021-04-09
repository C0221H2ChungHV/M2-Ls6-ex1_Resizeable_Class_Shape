<?php
include_once 'Resizeable.php';

class Rectangle implements Resizeable
{
    public $width;
    public $height;
    public $size;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
    function resize()
    {
        $this->size = rand(1,100)/100;
        $this->height += $this->height*$this->size;
        $this->width += $this->width*$this->size;
    }

}