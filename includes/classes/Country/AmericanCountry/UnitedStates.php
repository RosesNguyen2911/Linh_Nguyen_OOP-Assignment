<?php

namespace MyProject\Country\AmericanCountry;

use MyProject\Country\AmericanCountry;

/**
 * Class UnitedStates
 *
 * Represents the United States.
 */
class UnitedStates extends AmericanCountry
{
    /**
     * Create a new United States object.
     *
     * @param int $population The population of the United States
     */
    public function __construct(int $population)
    {
        parent::__construct("United States", "Washington D.C.", $population, "🇺🇸");
    }
}