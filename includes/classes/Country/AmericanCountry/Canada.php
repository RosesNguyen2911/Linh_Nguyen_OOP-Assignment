<?php

namespace MyProject\Country\AmericanCountry;

use MyProject\Country\AmericanCountry;
use MyProject\TourismTrait;

// Represents Canada.

class Canada extends AmericanCountry
{
    use TourismTrait;

    public string $tourismReason = "of its vast national parks, mountains, and lakes";
}