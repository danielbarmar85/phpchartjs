<?php

namespace Nutsy\PHPChartJS\Chart;

use Nutsy\PHPChartJS\Chart;
use Nutsy\PHPChartJS\ChartInterface;
use Nutsy\PHPChartJS\DataSet\PieDataSet;
use Nutsy\PHPChartJS\Options\PieOptions;

/**
 * Class Pie
 * @package Nutsy\PHPChartJS\Chart
 *
 * @method PieDataSet createDataSet
 * @method PieOptions options
 */
class Pie extends Chart implements ChartInterface
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'pie';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => PieDataSet::class,
        'options' => PieOptions::class,
    ];
}
