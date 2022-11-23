<?php

namespace Nutsy\PHPChartJS\Options\Scales;

use Halfpastfour\Collection\Collection\ArrayAccess;
use Nutsy\PHPChartJS\ArraySerializableInterface;
use JsonSerializable;

/**
 * Class XAxisCollection
 *
 * @package Nutsy\PHPChartJS\Collection
 */
class XAxisCollection extends ArrayAccess implements ArraySerializableInterface, JsonSerializable
{
    /**
     * @return array
     */
    public function getArrayCopy()
    {
        $rows = [];
        foreach ($this->data as $row) {
            /** @var XAxis $row */
            $rows[] = $row->getArrayCopy();
        }

        return $rows;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->getArrayCopy();
    }
}
