<?php

namespace MyProject\Country\EuropeanCountry;

use MyProject\Country\EuropeanCountry;
use MyProject\TourismTrait;

/**
 * Class France
 *
 * Represents the country France.
 */
class France extends EuropeanCountry
{
    use TourismTrait;

    /**
     * The tourism highlight of France.
     *
     * @var string
     */
    public string $tourismReason = "of its famous cuisine, art, and historic landmarks";

    /**
     * Create a new France object.
     *
     * @param int $population The population of France
     */
    public function __construct(int $population)
    {
        parent::__construct("France", "Paris", $population, "🇫🇷");
    }
}