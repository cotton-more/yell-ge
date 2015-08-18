<?php

use YellGE\Canvas;
use YellGE\Canvas\Formats\GDFormat;
use YellGE\Shapes\Exception\InvalidShape;
use YellGE\Shapes\ShapeInterface;
use YellGE\Shapes\ShapeFactory;

// $shapes = isset($_POST['shapes']) ? $_POST['shapes']: [];
$shapes = [
    [
        'type' => 'circle',
        'params' => [
        ]
    ],
    [
        'type' => 'squire',
        'params' => [
        ]
    ]
];

$canvas = new Canvas(new GDFormat);

foreach ($shapes as $shapeData) {
    try {
        /** @var ShapeInterface $shape */
        $shape = ShapeFactory::create($shapeData);
        $canvas->addShape($shape);
    } catch (InvalidShape $ex) {
        // shape type is invalid
    } catch (\InvalidArgumentException $ex) {
        // shape type is not set
    }
}

$canvas->render();