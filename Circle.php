<?php
include_once 'Resizeable.php';

class Circle implements Resizeable
{
    public $radius;
    public $size;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }

    function resize()
    {
        $this->size = rand(1,100)/100;
        $this->radius +=$this->radius*$this->size;
    }
}
