<?php

namespace Nutsy\PHPChartJS;

/**
 * Class DataSet
 * @package Nutsy\PHPChartJS
 */
interface ChartOwnedInterface
{
    /**
     * @param ChartInterface $chart
     *
     * @return $this
     */
    public function setOwner(ChartInterface $chart);

    /**
     * @return ChartInterface
     */
    public function owner();
}
