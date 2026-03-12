<?php

namespace MyProject\Country\AmericanCountry;

use MyProject\Country\AmericanCountry;
use MyProject\TourismTrait;

/**
 * Class Canada
 *
 * Represents the country Canada.
 */
class Canada extends AmericanCountry
{
    use TourismTrait;

    /**
     * The tourism highlight of Canada.
     *
     * @var string
     */
    public string $tourismReason = "of its vast national parks, mountains, and lakes";

    /**
     * Create a new Canada object.
     *
     * @param int $population The population of Canada
     */
    public function __construct(int $population)
    {
        parent::__construct("Canada", "Ottawa", $population, "🇨🇦");
    }
}