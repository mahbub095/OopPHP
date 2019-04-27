<?php
interface Shape
{
public function getArea();
}

class Square implements Shape{
    private $width;
    private $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(){
        return $this->width * $this->height;
    }
}

function calculateArea(Shape $shape)
{
    return $shape->getArea();
}
echo calculateArea(new Square(5, 5)) . "<br/>";

?>