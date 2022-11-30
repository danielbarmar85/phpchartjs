<?php

namespace Nutsy\PHPChartJS;

use JsonSerializable;
use Nutsy\PHPChartJS\Delegate\ArraySerializable;
use Nutsy\PHPChartJS\Options\Fonts;
use Nutsy\PHPChartJS\Options\WaterMark;

/**
 * Class Defaults
 *
 * @package Nutsy\PHPChartJS
 */
class Defaults implements ChartOwnedInterface, ArraySerializableInterface, JsonSerializable
{

    use ChartOwned;
    use ArraySerializable;

    /**
     * @var Fonts
     */
    private $font;


    /**
     * Return Font.
     *
     * @return Font
     */
    public function getFonts()
    {
        if (isset($this->font) === false) {
            $this->font = new Fonts();
        }

        return $this->font;
    }


    /**
     * Return Watermark.
     *
     * @return Watermark
     */
    public function getWatermark()
    {
        if (isset($this->watermark) === false) {
            $this->watermark = new WaterMark();
        }

        return $this->watermark;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->getArrayCopy();
    }


}
