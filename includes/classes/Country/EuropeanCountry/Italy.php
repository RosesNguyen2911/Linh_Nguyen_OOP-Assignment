<?php

namespace MyProject\Country\EuropeanCountry;

use MyProject\Country\EuropeanCountry;

/**
 * Class Italy
 *
 * Represents the country Italy.
 */
class Italy extends EuropeanCountry
{
    /**
     * Create a new Italy object.
     *
     * @param int $population The population of Italy
     */
    public function __construct(int $population)
    {
        parent::__construct("Italy", "Rome", $population, "🇮🇹");
    }
}