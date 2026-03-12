<?php

namespace MyProject\Country\AsianCountry;

use MyProject\Country\AsianCountry;

/**
 * Class China
 *
 * Represents the country China.
 */
class China extends AsianCountry
{
    /**
     * Create a new China object.
     *
     * @param int $population The population of China
     */
    public function __construct(int $population)
    {
        parent::__construct("China", "Beijing", $population, "🇨🇳");
    }
}