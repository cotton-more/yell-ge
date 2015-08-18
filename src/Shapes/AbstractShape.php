<?php namespace YellGE\Shapes;


class AbstractShape
{
    private $params;

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param $params
     */
    public function setParams($params)
    {
        $this->params = (array) $params;
    }

    /**
     * @param $paramName
     * @return mixed
     */
    public function getParam($paramName)
    {
        if (isset($this->params[$paramName])) {
            return $this->params[$paramName];
        } else {
            return null;
        }
    }
}