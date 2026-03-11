<?php

namespace MyProject\Country\AsianCountry;

use MyProject\Country\AsianCountry;
use MyProject\TourismTrait;

// Represents Vietnam.

class Vietnam extends AsianCountry
{
    use TourismTrait;

    public string $tourismReason = "of its beautiful landscapes, street food, and rich culture";
}