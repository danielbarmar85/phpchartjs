<?php

namespace Nutsy\PHPChartJS\Options;

use Nutsy\PHPChartJS\ArraySerializableInterface;
use Nutsy\PHPChartJS\Delegate\ArraySerializable;
use JsonSerializable;

/**
 * Class Fonts
 *
 * @package Nutsy\PHPChartJS\Options
 */
class Fonts implements ArraySerializableInterface, JsonSerializable
{
    use ArraySerializable;

    /**
     * @var integer
     */
    private $size;

    /**
     * @var string
     */
    private $family;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $style;


    /**
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }


    /**
     * @param integer $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = intval($size);

        return $this;
    }


    /**
     * @return string
     */
    public function getFamily()
    {
        return $this->family;
    }


    /**
     * @param string $family
     *
     * @return $this
     */
    public function setFamily($family)
    {
        $this->family = strval($family);

        return $this;
    }


    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }


    /**
     * @param string $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = strval($color);

        return $this;
    }


    /**
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }


    /**
     * @param string $style
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->style = strval($style);

        return $this;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->getArrayCopy();
    }


}
