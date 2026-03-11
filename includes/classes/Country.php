<?php

namespace MyProject;

//Represents a generic country.

class Country
{
    public string $name;
    public string $capital;
    public int $population;
    public string $flagEmoji;

    // Create a new Country instance.

    public function __construct(string $name, string $capital, int $population, string $flagEmoji)
    {
        $this->name = $name;
        $this->capital = $capital;
        $this->population = $population;
        $this->flagEmoji = $flagEmoji;
    }

    // Display each flag belonging to each country.
    public function describe(): void
    {
        echo $this->flagEmoji . " " . $this->name . " is a country.";
    }

    // Display the capital city of the country.
    public function showCapital(): void
    {
        echo "The capital of " . $this->name . " is " . $this->capital . ".";
    }

    // Display the population of the country.
    public function showPopulation(): void
    {
        echo $this->name . " has a population of " . $this->population . ".";
    }
}