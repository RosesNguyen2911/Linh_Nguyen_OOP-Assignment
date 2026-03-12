<?php

namespace MyProject\Country\EuropeanCountry;

use MyProject\Country\EuropeanCountry;

/**
 * Class UnitedKingdom
 *
 * Represents the United Kingdom.
 */
class UnitedKingdom extends EuropeanCountry
{
    /**
     * Create a new United Kingdom object.
     *
     * @param int $population The population of the United Kingdom
     */
    public function __construct(int $population)
    {
        parent::__construct("United Kingdom", "London", $population, "🇬🇧");
    }
}