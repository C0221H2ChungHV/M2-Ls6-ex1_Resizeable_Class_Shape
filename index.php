<?php
include_once 'Circle.php';
include_once 'Square.php';
include_once 'Main.php';
$circle1 = new Circle(5, 1);
$rect1 = new Rectangle(10, 10, 1);
$square1 = new Square(8, 1);
$main = new Main($circle1, $rect1, $square1);
$main->getMain();
echo '<pre>';
foreach ($main->arr as $value) {
    echo "Perimeter Before " . $value->calculatePerimeter() . '<br/>';

    echo "Area Before " . $value->calculateArea() . '<br/>';

    echo "ty le thay doi la: " . $value->resize();

    echo $value->size . '<br/>';

    echo "Perimeter After " . $value->calculatePerimeter() . '<br/>';

    echo "Area After " . $value->calculateArea() . '<br/>';

}
