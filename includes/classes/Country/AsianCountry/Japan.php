<?php

namespace MyProject\Country\AsianCountry;

use MyProject\Country\AsianCountry;
use MyProject\TourismTrait;

/**
 * Class Japan
 *
 * Represents the country Japan.
 */
class Japan extends AsianCountry
{
    use TourismTrait;

    /**
     * The tourism highlight of Japan.
     *
     * @var string
     */
    public string $tourismReason = "of its blend of modern technology and traditional culture";

    /**
     * Create a new Japan object.
     *
     * @param int $population The population of Japan
     */
    public function __construct(int $population)
    {
        parent::__construct("Japan", "Tokyo", $population, "🇯🇵");
    }
}