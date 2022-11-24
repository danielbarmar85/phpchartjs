<?php

namespace Nutsy\PHPChartJS\Options;

use Halfpastfour\Collection\ArraySerializableInterface;
use Nutsy\PHPChartJS\Delegate\ArraySerializable;
use Nutsy\PHPChartJS\Options\Legend;
use JsonSerializable;

/**
 * Undocumented class
 */
class Plugins implements ArraySerializableInterface, JsonSerializable
{
    use ArraySerializable;


    /**
     * Return Legend.
     *
     * @return Legend
     */
    public function getLegend()
    {
        if (isset($this->legend) === false) {
            $this->legend = new Legend();
        }

        return $this->legend;
    }


    /**
     * Serialize.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->getArrayCopy();
    }


}
