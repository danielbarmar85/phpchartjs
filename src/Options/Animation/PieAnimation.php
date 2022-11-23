<?php

namespace Nutsy\PHPChartJS\Options\Animation;

use Nutsy\PHPChartJS\Options\Animation;

/**
 * Class PieAnimation
 * @package Nutsy\PHPChartJS\Options\Animation
 */
class PieAnimation extends Animation
{
    /**
     * @var bool
     */
    private $animateRotate;

    /**
     * @var bool
     */
    private $animateScale;

    /**
     * @return bool
     */
    public function isAnimateRotate()
    {
        return $this->animateRotate;
    }

    /**
     * @param bool $animateRotate
     *
     * @return PieAnimation
     */
    public function setAnimateRotate($animateRotate)
    {
        $this->animateRotate = $animateRotate;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAnimateScale()
    {
        return $this->animateScale;
    }

    /**
     * @param bool $animateScale
     *
     * @return PieAnimation
     */
    public function setAnimateScale($animateScale)
    {
        $this->animateScale = $animateScale;

        return $this;
    }
}
