<?php

namespace MyProject;

/**
 * Trait TourismTrait
 *
 * Provides tourism-related functionality for countries
 * that want to recommend themselves as travel destinations.
 */
trait TourismTrait
{
    /**
     * Displays a tourism recommendation message for the country.
     *
     * This method expects the using class to define:
     * - string $name
     * - string $tourismReason
     *
     * @return void
     */
    public function recommendDestination(): void
    {
        echo $this->name . " is a great destination for travelers because " . $this->tourismReason . ".";
    }
}