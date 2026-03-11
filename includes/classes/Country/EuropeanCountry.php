<?php

namespace MyProject\Country;

use MyProject\Country;

// Represents a country in Europe.

class EuropeanCountry extends Country
{
    public function describe(): void
    {
        echo $this->name . " is a country in Europe.";
    }
}
