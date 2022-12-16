<?php

namespace Nutsy\PHPChartJS;

use Halfpastfour\Collection\Collection\ArrayAccess;
use JsonSerializable;

/**
 * Class PluginsCollection
 *
 * @package Nutsy\PHPChartJS
 */
class PluginsCollection extends ArrayAccess implements JsonSerializable
{
    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->data;
    }
}
