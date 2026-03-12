<?php

namespace MyProject\Country\AsianCountry;

use MyProject\Country\AsianCountry;

/**
 * Class SouthKorea
 *
 * Represents the country South Korea.
 */
class SouthKorea extends AsianCountry
{
    /**
     * Create a new South Korea object.
     *
     * @param int $population The population of South Korea
     */
    public function __construct(int $population)
    {
        parent::__construct("South Korea", "Seoul", $population, "🇰🇷");
    }
}