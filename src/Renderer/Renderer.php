<?php

namespace Nutsy\PHPChartJS\Renderer;

use Nutsy\PHPChartJS\Chart;

/**
 * Class Renderer
 * @package Nutsy\PHPChartJS\Renderer
 */
abstract class Renderer implements RendererInterface
{
    /**
     * Flag used for rendering JSON in pretty mode.
     */
    const RENDER_PRETTY = 1;

    /**
     * @var Chart The chart that needs to be rendered.
     */
    protected $chart;

    /**
     * RendererInterface constructor. Expects an instance of a chart.
     *
     * @param Chart $chart The Chart that needs to be rendered.
     */
    public function __construct(Chart $chart)
    {
        $this->chart = $chart;
    }
}
