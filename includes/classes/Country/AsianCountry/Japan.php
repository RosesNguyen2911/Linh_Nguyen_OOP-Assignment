<?php

namespace MyProject\Country\AsianCountry;

use MyProject\Country\AsianCountry;
use MyProject\TourismTrait;

// Represents Japan.

class Japan extends AsianCountry
{
    use TourismTrait;

    public string $tourismReason = "of its blend of modern technology and traditional culture";
}