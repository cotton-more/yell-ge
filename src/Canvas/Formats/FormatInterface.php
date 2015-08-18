<?php namespace YellGE\Canvas\Formats;


use YellGE\Shapes\ShapeInterface;

interface FormatInterface
{
    /**
     * Draw a shape
     * @param ShapeInterface $shape
     * @return mixed
     */
    public function draw(ShapeInterface $shape);
}