<?php

namespace MyProject;

// Provides tourism-related functionality.

trait TourismTrait
{
    // Display a tourism message for the country.
     
    public function recommendDestination(): void
    {
        echo $this->name . " is a great destination for travelers because " . $this->tourismReason . ".";
    }
}