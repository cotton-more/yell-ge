<?php namespace YellGE\Canvas\Formats;


use YellGE\Shapes\ShapeInterface;

class GDFormat implements FormatInterface
{
    public function draw(ShapeInterface $shape)
    {
        $shapeData = $shape->build();
        // use $shapeData to draw shape
    }
}