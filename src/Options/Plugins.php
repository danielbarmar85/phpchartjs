<?php

namespace Nutsy\PHPChartJS\Options;

use Nutsy\PHPChartJS\ArraySerializableInterface;
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
     * Return Title.
     *
     * @return Title
     */
    public function getTitle()
    {
        if (isset($this->title) === false) {
            $this->title = new Title();
        }

        return $this->title;
    }


    /**
     * Return Data label.
     *
     * @return DataLabel
     */
    public function getDataLabel()
    {
        if (isset($this->datalabels) === false) {
            $this->datalabels = new DataLabel();
        }

        return $this->datalabels;
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
