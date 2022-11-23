<?php

namespace Nutsy\PHPChartJS\Collection;

use Halfpastfour\Collection\Collection\ArrayAccess;
use Nutsy\PHPChartJS\Delegate;
use JsonSerializable as JsonSerializableInterface;

/**
 * Class Data
 *
 * @package Nutsy\PHPChartJS\Collection
 */
class Data extends ArrayAccess implements JsonSerializableInterface
{
    use Delegate\JsonSerializable;
}
