<?php

namespace MyProject\Country\AmericanCountry;

use MyProject\Country\AmericanCountry;

/**
 * Class Brazil
 *
 * Represents the country Brazil.
 */
class Brazil extends AmericanCountry
{
    /**
     * Create a new Brazil object.
     *
     * @param int $population The population of Brazil
     */
    public function __construct(int $population)
    {
        parent::__construct("Brazil", "Brasilia", $population, "🇧🇷");
    }
}