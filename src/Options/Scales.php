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
    private $xAxes;

    /**
     * @var YAxisCollection
     */
    private $yAxes;

    /**
     * @return XAxis
     */
    public function createXAxis()
    {
        return new XAxis();
    }

    /**
     * @return YAxis
     */
    public function createYAxis()
    {
        return new YAxis();
    }

    /**
     * @return XAxisCollection
     */
    public function getXAxes()
    {
        if (is_null($this->xAxes)) {
            $this->xAxes = new XAxisCollection();
        }

        return $this->xAxes;
    }

    /**
     * @return YAxisCollection
     */
    public function getYAxes()
    {
        if (is_null($this->yAxes)) {
            $this->yAxes = new YAxisCollection();
        }

        return $this->yAxes;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->getArrayCopy();
    }
}
