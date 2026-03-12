<?php

/**
 * Autoload project classes.
 */
spl_autoload_register(function ($class) {
    $class = str_replace('MyProject\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    $filepath = str_replace('/', DIRECTORY_SEPARATOR, $filepath);

    require_once $filepath;
});

require_once __DIR__ . '/includes/traits/TourismTrait.php';

/**
 * Create country objects grouped by region.
 */

// EUROPE
$france = new MyProject\Country\EuropeanCountry\France(68400000);
$germany = new MyProject\Country\EuropeanCountry\Germany(84400000);
$italy = new MyProject\Country\EuropeanCountry\Italy(58900000);
$uk = new MyProject\Country\EuropeanCountry\UnitedKingdom(67900000);

// ASIA
$vietnam = new MyProject\Country\AsianCountry\Vietnam(100300000);
$japan = new MyProject\Country\AsianCountry\Japan(123000000);
$korea = new MyProject\Country\AsianCountry\SouthKorea(51700000);
$china = new MyProject\Country\AsianCountry\China(1409000000);

// AMERICAS
$canada = new MyProject\Country\AmericanCountry\Canada(41000000);
$usa = new MyProject\Country\AmericanCountry\UnitedStates(335000000);
$mexico = new MyProject\Country\AmericanCountry\Mexico(129000000);
$brazil = new MyProject\Country\AmericanCountry\Brazil(203000000);

/**
 * Store all country objects in an array for display.
 */
$countries = [
    $france, $germany, $italy, $uk,
    $vietnam, $japan, $korea, $china,
    $canada, $usa, $mexico, $brazil
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Hierarchy</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- Header -->
<header class="site-header">
    <div class="container header-wrap">
        <a href="#home" class="brand">
            <img src="images/world_logo.png" alt="Country Hierarchy Logo" class="logo">
            <span class="brand-text">Country Hierarchy</span>
        </a>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="hamburger" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <nav class="site-nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Introduction</a></li>
                <li><a href="#oop">OOP Concepts</a></li>
                <li><a href="#countries">Countries</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <div class="hero-text">
                <p class="eyebrow">Object Oriented Programming Assignment</p>
                <h1>Explore the Country Hierarchy Project</h1>
                <p>
                    This project demonstrates how Object Oriented Programming can be used to organize
                    related objects into a clear and reusable class hierarchy. Each country belongs to
                    a parent region class and inherits shared properties and behaviors.
                </p>
                <div class="hero-actions">
                    <a href="#countries" class="btn btn-primary">View Countries</a>
                    <a href="#oop" class="btn btn-secondary">Learn OOP</a>
                </div>
            </div>

            <div class="hero-card">
                <h2>Project Highlights</h2>
                <ul>
                    <li>3-level class hierarchy</li>
                    <li>Shared properties and methods</li>
                    <li>Trait for tourism functionality</li>
                    <li>Responsive mobile-first layout</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section class="intro section" id="about">
        <div class="container">
            <div class="section-heading">
                <p class="section-label">Introduction</p>
                <h2>About This Project</h2>
            </div>

            <div class="info-grid">
                <article class="info-box">
                    <h3>What is Country Hierarchy?</h3>
                    <p>
                        Country Hierarchy is a PHP project built to show how countries can be grouped
                        through inheritance. The root class is <strong>Country</strong>, followed by
                        regional classes such as <strong>AmericanCountry</strong>,
                        <strong>AsianCountry</strong>, and <strong>EuropeanCountry</strong>.
                    </p>
                </article>

                <article class="info-box">
                    <h3>Why use this topic?</h3>
                    <p>
                        Countries are easy to understand and compare. They all share common data such as
                        name, capital, population, and flag, which makes them a strong example for OOP design.
                    </p>
                </article>

                <article class="info-box">
                    <h3>What does the page show?</h3>
                    <p>
                        This page introduces the assignment idea, explains how OOP is applied,
                        and displays each country inside responsive cards for a cleaner and more complete interface.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- OOP Section -->
    <section class="oop section" id="oop">
        <div class="container">
            <div class="section-heading">
                <p class="section-label">OOP Concepts</p>
                <h2>How Object Oriented Programming Is Applied</h2>
            </div>

            <div class="oop-grid">
                <article class="oop-card">
                    <h3>Inheritance</h3>
                    <p>
                        The <strong>Country</strong> class acts as the root parent. Regional classes inherit
                        from it, and individual countries inherit from those regional classes.
                    </p>
                </article>

                <article class="oop-card">
                    <h3>Properties</h3>
                    <p>
                        Each country object includes shared properties such as
                        <strong>name</strong>, <strong>capital</strong>, <strong>population</strong>,
                        and <strong>flagEmoji</strong>.
                    </p>
                </article>

                <article class="oop-card">
                    <h3>Methods</h3>
                    <p>
                        Shared methods like <strong>describe()</strong>, <strong>showCapital()</strong>,
                        and <strong>showPopulation()</strong> define common behavior across all countries.
                    </p>
                </article>

                <article class="oop-card">
                    <h3>Method Overriding</h3>
                    <p>
                        Regional classes can override the <strong>describe()</strong> method to provide
                        more specific messages, such as identifying a country as part of Asia, Europe,
                        or the Americas.
                    </p>
                </article>

                <article class="oop-card">
                    <h3>Trait Reuse</h3>
                    <p>
                        The <strong>TourismTrait</strong> is used to share tourism-related functionality
                        between selected classes without changing the inheritance chain.
                    </p>
                </article>

                <article class="oop-card">
                    <h3>Autoloading</h3>
                    <p>
                        The project uses <strong>spl_autoload_register</strong> in <strong>index.php</strong>
                        to automatically load class files when needed.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- Countries Section -->
    <section class="countries section" id="countries">
        <div class="container">
            <div class="section-heading">
                <p class="section-label">Country Collection</p>
                <h2>Country Boxes</h2>
            </div>

            <div class="country-grid">
                <?php foreach ($countries as $country): ?>
                    <article class="country-card">
                        <div class="country-card-header">
                            <div class="country-flag">
                                <?php echo $country->flagEmoji; ?>
                            </div>
                            <h3 class="country-name"><?php echo $country->name; ?></h3>
                        </div>

                        <div class="country-card-body">
                            <p><?php $country->describe(); ?></p>
                            <p><?php $country->showCapital(); ?></p>
                            <p><?php $country->showPopulation(); ?></p>

                            <?php if (method_exists($country, 'recommendDestination')): ?>
                                <p class="tourism-note">
                                    <?php $country->recommendDestination(); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="site-footer">
    <div class="container footer-wrap">
        <div>
            <h3>Country Hierarchy</h3>
            <p>
                A responsive PHP OOP project demonstrating inheritance, traits, methods,
                and object hierarchy through countries and regions.
            </p>
        </div>

        <div>
            <p><strong>Student Project</strong></p>
            <p>Assignment Two - Object Oriented Programming</p>
        </div>
    </div>
</footer>

</body>
</html>