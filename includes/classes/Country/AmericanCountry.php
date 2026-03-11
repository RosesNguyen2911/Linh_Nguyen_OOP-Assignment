<?php

namespace MyProject\Country;

use MyProject\Country;

// Represents a country in the Americas.

class AmericanCountry extends Country
{
    public function describe(): void
    {
        echo $this->flagEmoji . " " . $this->name . " is a country in the Americas.";
    }
}