<?php

namespace Nutsy\PHPChartJS\Options;

use Nutsy\PHPChartJS\ArraySerializableInterface;
use Nutsy\PHPChartJS\Delegate\ArraySerializable;
use Nutsy\PHPChartJS\LabelsCollection;
use JsonSerializable;
use Laminas\Json\Expr;

/**
 * Class Legend
 *
 * @package Nutsy\PHPChartJS\Options
 */
class Legend implements ArraySerializableInterface, JsonSerializable
{
    use ArraySerializable;

    /**
     * @var bool
     */
    private $display;

    /**
     * @var string
     */
    private $position;

    /**
     * @var bool
     */
    private $fullWidth;

    /**
     * @var Expr
     */
    private $onClick;

    /**
     * @var Expr
     */
    private $onHover;

    /**
     * @var LabelsCollection
     */
    private $labels;

    /**
     * @var bool
     */
    private $reverse;

    /**
     * @return bool
     */
    public function isDisplay()
    {
        return $this->display;
    }

    /**
     * @param bool $display
     *
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->display = boolval($display);

        return $this;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = strval($position);

        return $this;
    }

    /**
     * @return bool
     */
    public function isFullWidth()
    {
        return $this->fullWidth;
    }

    /**
     * @param bool $fullWidth
     *
     * @return $this
     */
    public function setFullWidth($fullWidth)
    {
        $this->fullWidth = boolval($fullWidth);

        return $this;
    }

    /**
     * @return Expr
     */
    public function getOnClick()
    {
        return $this->onClick;
    }

    /**
     * @param string $onClick
     *
     * @return $this
     */
    public function setOnClick($onClick)
    {
        $this->onClick = new Expr(strval($onClick));

        return $this;
    }

    /**
     * @return Expr
     */
    public function getOnHover()
    {
        return $this->onHover;
    }

    /**
     * @param string $onHover
     *
     * @return $this
     */
    public function setOnHover($onHover)
    {
        $this->onHover = new Expr(strval($onHover));

        return $this;
    }

    /**
     * @return LabelsCollection
     */
    public function labels()
    {
        if (is_null($this->labels)) {
            $this->labels = new LabelsCollection();
        }

        return $this->labels;
    }

    /**
     * @return bool
     */
    public function isReverse()
    {
        return $this->reverse;
    }

    /**
     * @param bool $reverse
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        $this->reverse = boolval($reverse);

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
