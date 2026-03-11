<?php

namespace MyProject\Country;

use MyProject\Country;

// Represents a country in Asia.

class AsianCountry extends Country
{
    public function describe(): void
    {
        echo $this->name . " is an Asian country.";
    }
}