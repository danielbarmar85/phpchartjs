<?php

namespace Nutsy\PHPChartJS\Options;

use Nutsy\PHPChartJS\ArraySerializableInterface;
use Nutsy\PHPChartJS\Delegate\ArraySerializable;
use Nutsy\PHPChartJS\Options\Layout\Padding;
use JsonSerializable;

/**
 * Class Layout
 *
 * @package Nutsy\PHPChartJS\Options
 */
class Layout implements ArraySerializableInterface, JsonSerializable
{
    use ArraySerializable;

    /**
     * @var int|Padding
     */
    private $padding;

    /**
     * @param int $padding
     */
    public function setPadding($padding)
    {
        $this->padding = intval($padding);
    }

    /**
     * @return int|Padding
     */
    public function getPadding()
    {
        return $this->padding;
    }

    /**
     * @return Padding
     */
    public function padding()
    {
        if (is_null($this->padding)) {
            $this->padding = new Padding();
        }

        return $this->padding;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->getArrayCopy();
    }
}
