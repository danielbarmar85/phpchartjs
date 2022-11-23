<?php

namespace Nutsy\PHPChartJS\Chart;

use Nutsy\PHPChartJS\Chart;
use Nutsy\PHPChartJS\DataSet\LineDataSet;
use Nutsy\PHPChartJS\Options\LineOptions;

/**
 * Class Line
 * @package Nutsy\PHPChartJS\Chart
 * @method LineDataSet createDataSet()
 */
class Line extends Chart
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'line';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => LineDataSet::class,
        'options' => LineOptions::class,
    ];
}
