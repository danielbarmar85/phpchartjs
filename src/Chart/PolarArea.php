<?php

namespace Nutsy\PHPChartJS\Chart;

use Nutsy\PHPChartJS\Chart;
use Nutsy\PHPChartJS\ChartInterface;
use Nutsy\PHPChartJS\DataSet\PolarAreaDataSet;
use Nutsy\PHPChartJS\Options\PolarAreaOptions;

/**
 * Class PolarArea
 * @package Nutsy\PHPChartJS\Chart
 *
 * @method PolarAreaDataSet createDataSet
 * @method PolarAreaOptions options
 */
class PolarArea extends Chart implements ChartInterface
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'polarArea';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => PolarAreaDataSet::class,
        'options' => PolarAreaOptions::class,
    ];
}
