<?php

namespace Nutsy\PHPChartJS\Chart;

use Nutsy\PHPChartJS\Chart;
use Nutsy\PHPChartJS\DataSet\BarDataSet;
use Nutsy\PHPChartJS\Options\BarOptions;

/**
 * Class Bar
 * @package Nutsy\PHPChartJS\Chart
 *
 * @method BarDataSet createDataSet
 * @method BarOptions options
 */
class Bar extends Chart
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'bar';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => BarDataSet::class,
        'options' => BarOptions::class,
    ];
}
