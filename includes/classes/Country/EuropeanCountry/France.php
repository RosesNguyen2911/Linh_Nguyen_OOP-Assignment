<?php

namespace MyProject\Country\EuropeanCountry;

use MyProject\Country\EuropeanCountry;
use MyProject\TourismTrait;

// Represents France.

class France extends EuropeanCountry
{
    use TourismTrait;

    public string $tourismReason = "of its famous cuisine, art, and historic landmarks";
}