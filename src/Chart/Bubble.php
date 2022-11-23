<?php

namespace Nutsy\PHPChartJS\Chart;

use Nutsy\PHPChartJS\Chart;
use Nutsy\PHPChartJS\DataSet\BubbleDataSet;
use Nutsy\PHPChartJS\Options\BubbleOptions;

/**
 * Class Bubble
 * @package Nutsy\PHPChartJS\Chart
 *
 * @method BubbleDataSet createDataSet
 * @method BubbleOptions options
 */
class Bubble extends Chart
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'bubble';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => BubbleDataSet::class,
        'options' => BubbleOptions::class,
    ];
}
