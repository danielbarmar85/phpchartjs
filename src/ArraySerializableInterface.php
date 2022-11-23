<?php

namespace Nutsy\PHPChartJS;

/**
 * Interface ArraySerializableInterface
 * @package Nutsy\PHPChartJS
 */
interface ArraySerializableInterface
{
    /**
     * Should return an array containing all values.
     *
     * @return array
     */
    public function getArrayCopy();
}
