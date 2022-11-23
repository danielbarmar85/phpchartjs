<?php

namespace Nutsy\PHPChartJS\Chart;

use Nutsy\PHPChartJS\Chart;
use Nutsy\PHPChartJS\ChartInterface;
use Nutsy\PHPChartJS\DataSet\RadarDataSet;
use Nutsy\PHPChartJS\Options\RadarOptions;

/**
 * Class Radar
 * @package Nutsy\PHPChartJS\Chart
 *
 * @method RadarDataSet createDataSet
 * @method RadarOptions options
 */
class Radar extends Chart implements ChartInterface
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'radar';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => RadarDataSet::class,
        'options' => RadarOptions::class,
    ];
}
