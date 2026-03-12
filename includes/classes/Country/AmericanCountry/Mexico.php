<?php

namespace MyProject\Country\AmericanCountry;

use MyProject\Country\AmericanCountry;

/**
 * Class Mexico
 *
 * Represents the country Mexico.
 */
class Mexico extends AmericanCountry
{
    /**
     * Create a new Mexico object.
     *
     * @param int $population The population of Mexico
     */
    public function __construct(int $population)
    {
        parent::__construct("Mexico", "Mexico City", $population, "🇲🇽");
    }
}