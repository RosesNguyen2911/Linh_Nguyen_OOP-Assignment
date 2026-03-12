<?php

namespace MyProject;

/**
 * Represents a generic country object.
 *
 * This class defines common properties and methods shared by all countries.
 */
class Country
{
    /**
     * The name of the country.
     *
     * @var string
     */
    public string $name;

    /**
     * The capital city of the country.
     *
     * @var string
     */
    public string $capital;

    /**
     * The total population of the country.
     *
     * @var int
     */
    public int $population;

    /**
     * The flag emoji representing the country.
     *
     * @var string
     */
    public string $flagEmoji;

    /**
     * Creates a new country object with its main properties.
     *
     * @param string $name The name of the country
     * @param string $capital The capital city of the country
     * @param int $population The population size of the country
     * @param string $flagEmoji The emoji flag representing the country
     */
    public function __construct(string $name, string $capital, int $population, string $flagEmoji)
    {
        $this->name = $name;
        $this->capital = $capital;
        $this->population = $population;
        $this->flagEmoji = $flagEmoji;
    }

    /**
     * Displays a basic description of the country.
     *
     * @return void
     */
    public function describe(): void
    {
        echo $this->name . " is a country.";
    }

    /**
     * Displays the capital city of the country.
     *
     * @return void
     */
    public function showCapital(): void
    {
        echo "The capital of " . $this->name . " is " . $this->capital . ".";
    }

    /**
     * Displays the population of the country.
     *
     * @return void
     */
    public function showPopulation(): void
    {
        echo $this->name . " has a population of " . number_format($this->population) . ".";
    }
}