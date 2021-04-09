<?php
include_once 'Circle.php';
include_once 'Square.php';

class Main
{
    public $circle;
    public $rectangle;
    public $square;
    public $arr = [];

    public function __construct($circle, $rectangle, $square)
    {
        $this->circle = $circle;
        $this->rectangle = $rectangle;
        $this->square = $square;
    }

    public function getMain()
    {
        array_push($this->arr, $this->circle, $this->rectangle, $this->square);
        return $this->arr;
    }

}
