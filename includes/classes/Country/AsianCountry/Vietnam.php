<?php

namespace MyProject\Country\AsianCountry;

use MyProject\Country\AsianCountry;
use MyProject\TourismTrait;

/**
 * Class Vietnam
 *
 * Represents the country Vietnam.
 */
class Vietnam extends AsianCountry
{
    use TourismTrait;

    /**
     * The tourism highlight of Vietnam.
     *
     * @var string
     */
    public string $tourismReason = "of its beautiful landscapes, street food, and rich culture";

    /**
     * Create a new Vietnam object.
     *
     * @param int $population The population of Vietnam
     */
    public function __construct(int $population)
    {
        parent::__construct("Vietnam", "Hanoi", $population, "🇻🇳");
    }
}