<?php

namespace Nutsy\PHPChartJS\Delegate;

use Nutsy\PHPChartJS\ArraySerializableInterface;
use JsonSerializable as JsonSerializableInterface;

/**
 * Trait JsonSerializable
 *
 * @package Nutsy\PHPChartJS\Delegate
 */
trait JsonSerializable
{
    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array_map(function ($value) {
            if ($value instanceof JsonSerializableInterface) {
                return $value->jsonSerialize();
            } elseif ($value instanceof ArraySerializableInterface) {
                return $value->getArrayCopy();
            }

            return $value;
        }, $this->getArrayCopy());
    }

    /**
     * @return array
     */
    abstract public function getArrayCopy();
}
