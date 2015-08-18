<?php namespace YellGE\Shapes;


interface ShapeInterface
{
    /**
     * Set shape params
     *
     * @param $params
     * @return mixed
     */
    public function setParams($params);

    /**
     * Get shape params
     *
     * @return mixed
     */
    public function getParams();

    /**
     * Generage data for drawing
     * @return mixed
     */
    public function build();
}