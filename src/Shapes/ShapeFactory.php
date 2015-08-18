<?php namespace YellGE\Shapes;


use InvalidArgumentException;
use YellGE\Shapes\Exception\InvalidShape;

class ShapeFactory
{
    /**
     * @param $shapeData
     * @return ShapeInterface
     * @throws InvalidShape
     * @throws InvalidArgumentException
     */
    public static function create($shapeData)
    {
        if (isset($shapeData['type']) && $shapeData['type']) {
            $shapeType = $shapeData['type'];
            $className = __NAMESPACE__ . '\\' . ucfirst(strtolower($shapeType));
        } else {
            throw new InvalidArgumentException('Shape type is not set');
        }

        $shapeParams = isset($shapeData['params']) ? $shapeData['params'] : [];

        /** @var ShapeInterface $shape */
        $shape = new $className;
        if ($shape instanceof ShapeInterface) {
            $shape->setParams($shapeParams);

            return $shape;
        } else {
            throw new InvalidShape('Invalid shape type: '.$shapeType);
        }
    }
}