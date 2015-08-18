<?php namespace YellGE;


use YellGE\Canvas\Formats\FormatInterface;
use YellGE\Shapes\ShapeInterface;

class Canvas
{
    /**
     * @var array
     */
    protected $shapes;

    /**
     * @var FormatInterface
     */
    private $format;

    public function __construct(FormatInterface $format)
    {
        $this->format = $format;
    }

    public function addShape(ShapeInterface $shape)
    {
        $this->shapes[] = $shape;
    }

    /**
     * @return FormatInterface
     */
    public function render()
    {
        foreach ($this->shapes as $shape) {
            $this->format->draw($shape);
        }

        return $this->format;
    }
}