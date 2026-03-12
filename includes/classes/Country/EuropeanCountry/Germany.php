<?php

namespace MyProject\Country\EuropeanCountry;

use MyProject\Country\EuropeanCountry;

/**
 * Class Germany
 *
 * Represents the country Germany.
 */
class Germany extends EuropeanCountry
{
    /**
     * Create a new Germany object.
     *
     * @param int $population The population of Germany
     */
    public function __construct(int $population)
    {
        parent::__construct("Germany", "Berlin", $population, "🇩🇪");
    }
}