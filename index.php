<?php
    spl_autoload_register(function ($class) {
        // var_dump($class);

        $class = str_replace('MyProject\\', '', $class);
        // var_dump($class);    
        $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
        // var_dump($class);

        $filepath = __DIR__ .  '/includes/classes/' . $class . '.php';
        $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); 
        // var_dump($filepath);
        require_once $filepath;
    });

require_once __DIR__ . '/includes/traits/TourismTrait.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Country Hierarchy</title>
</head>
<body>

<h1>Countries</h1>

<?php

// EUROPE
$france = new MyProject\Country\EuropeanCountry\France("France", "Paris", 68400000, "🇫🇷");
$germany = new MyProject\Country\EuropeanCountry\Germany("Germany", "Berlin", 84400000, "🇩🇪");
$italy = new MyProject\Country\EuropeanCountry\Italy("Italy", "Rome", 58900000, "🇮🇹");
$uk = new MyProject\Country\EuropeanCountry\UnitedKingdom("United Kingdom", "London", 67900000, "🇬🇧");

// ASIA
$vietnam = new MyProject\Country\AsianCountry\Vietnam("Vietnam", "Hanoi", 100300000, "🇻🇳");
$japan = new MyProject\Country\AsianCountry\Japan("Japan", "Tokyo", 123000000, "🇯🇵");
$korea = new MyProject\Country\AsianCountry\SouthKorea("South Korea", "Seoul", 51700000, "🇰🇷");
$china = new MyProject\Country\AsianCountry\China("China", "Beijing", 1409000000, "🇨🇳");

// AMERICAS
$canada = new MyProject\Country\AmericanCountry\Canada("Canada", "Ottawa", 41000000, "🇨🇦");
$usa = new MyProject\Country\AmericanCountry\UnitedStates("United States", "Washington D.C.", 335000000, "🇺🇸");
$mexico = new MyProject\Country\AmericanCountry\Mexico("Mexico", "Mexico City", 129000000, "🇲🇽");
$brazil = new MyProject\Country\AmericanCountry\Brazil("Brazil", "Brasilia", 203000000, "🇧🇷");

$countries = [
    $france, $germany, $italy, $uk,
    $vietnam, $japan, $korea, $china,
    $canada, $usa, $mexico, $brazil
];

foreach ($countries as $country) {

    echo "<h3>";
    $country->describe();
    echo "</h3>";

    echo "<p>";
    $country->showCapital();
    echo "</p>";

    echo "<p>";
    $country->showPopulation();
    echo "</p>";

    // Trait method (only works for some countries)
    if (method_exists($country, 'recommendDestination')) {
        echo "<p>";
        $country->recommendDestination();
        echo "</p>";
    }

    echo "<hr>";
}

?>

</body>
</html>