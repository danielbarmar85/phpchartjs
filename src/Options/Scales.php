<?php

namespace Nutsy\PHPChartJS\Options;

use Nutsy\PHPChartJS\ArraySerializableInterface;
use Nutsy\PHPChartJS\Delegate\ArraySerializable;
use Nutsy\PHPChartJS\Options\Scales\XAxis;
use Nutsy\PHPChartJS\Options\Scales\XAxisCollection;
use Nutsy\PHPChartJS\Options\Scales\YAxis;
use Nutsy\PHPChartJS\Options\Scales\YAxisCollection;
use JsonSerializable;

/**
 * Class Scales
 * @package Nutsy\PHPChartJS\Options
 */
class Scales implements ArraySerializableInterface, JsonSerializable
{
    use ArraySerializable;

    /**
     * @var XAxisCollection
     */
    private $x;

    /**
     * @var YAxisCollection
     */
    private $y;

    /**
     * @return XAxis
     */
    public function createX()
    {
        return new XAxis();
    }

    /**
     * @return YAxis
     */
    public function createY()
    {
        return new YAxis();
    }

    /**
     * @return XAxis
     */
    public function getX()
    {
        if (is_null($this->x)) {
            $this->x = new XAxis();
        }

        return $this->x;
    }

    /**
     * @return YAxis
     */
    public function getY()
    {
        if (is_null($this->y)) {
            $this->y = new YAxis();
        }

        return $this->y;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->getArrayCopy();
    }
}
