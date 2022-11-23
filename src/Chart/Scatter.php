<?php

namespace Nutsy\PHPChartJS\Chart;

use Nutsy\PHPChartJS\Chart;
use Nutsy\PHPChartJS\DataSet\ScatterDataSet;
use Nutsy\PHPChartJS\Options\ScatterOptions;

/**
 * Class Scatter
 *
 * @package Nutsy\PHPChartJS\Chart
 *
 * @method ScatterDataSet createDataSet
 * @method ScatterOptions options
 */
class Scatter extends Chart
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'scatter';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => ScatterDataSet::class,
        'options' => ScatterOptions::class,
    ];
}
