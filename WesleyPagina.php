<?php
// Start een sessie, zodat de gekozen taal tijdens het bezoeken van de website wordt onthouden.
session_start();

// Laadt alle Nederlandse en Engelse teksten uit het aparte vertaalbestand.
$vertalingen = require __DIR__ . '/Wesleytranslations.php';

// Maakt een lijst van de talen die in translations.php beschikbaar zijn.
$beschikbareTalen = array_keys($vertalingen);

// Controleert of via de URL een geldige taal is gekozen, bijvoorbeeld ?lang=en.
// Alleen talen uit translations.php worden geaccepteerd.
if (isset($_GET['lang']) && in_array($_GET['lang'], $beschikbareTalen, true)) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Gebruikt de eerder gekozen taal, of standaard Nederlands als er nog niets is gekozen.
$taal = $_SESSION['lang'] ?? 'nl';

// Slaat de teksten van de actieve taal op in een korte variabele voor gebruik in de pagina.
$tekst = $vertalingen[$taal];

// Maakt tekst veilig voor weergave in HTML.
// Dit voorkomt dat speciale tekens als uitvoerbare HTML-code worden behandeld.
function e(string $waarde): string
{
    return htmlspecialchars($waarde, ENT_QUOTES, 'UTF-8');
}

// Maakt één kaart. Het nummer wordt alleen getoond als het is ingevuld.
function kaart(string $titel, string $tekst, string $nummer = ''): void
{
    echo '<article>',
        $nummer ? '<span>' . e($nummer) . '</span>' : '',
        '<b>' . e($titel) . '</b><p>' . e($tekst) . '</p>',
        '</article>';
}
?>

<!DOCTYPE html>
<!-- De taal van het HTML-document verandert mee met de gekozen taal. -->
<html lang="<?= e($taal) ?>">
<head>
    <!-- Zorgt dat letters en speciale tekens correct worden weergegeven. -->
    <meta charset="UTF-8">

    <!-- Zorgt voor een goede schaal en breedte op telefoons en tablets. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio | Wesley</title>

    <!-- Laadt de eigen vormgeving. Het versienummer voorkomt dat een oude CSS-versie uit de cache komt. -->
    <link rel="stylesheet" href="StyleWesley.css?v=3">

    <!-- Maakt alvast verbinding met Google Fonts en laadt het lettertype Inter. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

<!-- Bovenste navigatie met links naar de onderdelen van de pagina en de taalkeuze. -->
<header>
    <nav>
        <div>
            <a href="#over"><?= e($tekst['nav'][0]) ?></a>
            <a href="#skills"><?= e($tekst['nav'][1]) ?></a>
            <a href="#programmeertalen"><?= e($tekst['nav'][2]) ?></a>
            <a href="#projecten"><?= e($tekst['nav'][3]) ?></a>
            <a href="#rol"><?= e($tekst['nav'][4]) ?></a>
        </div>
        <!-- Met deze links wordt ?lang=nl of ?lang=en aan de URL toegevoegd. -->
        <div class="language-switcher" aria-label="Language / Taal">
            <a href="?lang=nl" lang="nl" class="<?= $taal === 'nl' ? 'active' : '' ?>" aria-current="<?= $taal === 'nl' ? 'page' : 'false' ?>">NL</a>
            <span aria-hidden="true">/</span>
            <a href="?lang=en" lang="en" class="<?= $taal === 'en' ? 'active' : '' ?>" aria-current="<?= $taal === 'en' ? 'page' : 'false' ?>">EN</a>
        </div>
    </nav>
</header>

<main>

    <!-- Introductieblok met korte informatie, knoppen en profielfoto. -->
    <section class="hero">
        <div>
            <p class="tag"><?= e($tekst['hero_tag']) ?></p>

            <h1><?= e($tekst['hero_title']) ?></h1>

            <p>
                <?= e($tekst['hero_text']) ?>
            </p>

            <a class="btn" href="#over"><?= e($tekst['portfolio_button']) ?></a>

            <!-- Externe links openen veilig in een nieuw tabblad. -->
            <div class="social-links">
                <a class="btn" href="https://github.com/Wesley058" target="_blank" rel="noopener noreferrer">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 .7a12 12 0 0 0-3.8 23.4c.6.1.8-.3.8-.6v-2.3c-3.4.7-4.1-1.4-4.1-1.4-.6-1.4-1.4-1.8-1.4-1.8-1.1-.8.1-.8.1-.8 1.2.1 1.9 1.3 1.9 1.3 1.1 1.9 2.9 1.3 3.6 1 .1-.8.4-1.3.8-1.6-2.7-.3-5.5-1.3-5.5-5.9 0-1.3.5-2.4 1.2-3.2-.1-.3-.5-1.5.1-3.2 0 0 1-.3 3.3 1.2a11.4 11.4 0 0 1 6 0c2.3-1.5 3.3-1.2 3.3-1.2.6 1.7.2 2.9.1 3.2.8.8 1.2 1.9 1.2 3.2 0 4.6-2.8 5.6-5.5 5.9.4.4.8 1.1.8 2.2v3.3c0 .3.2.7.8.6A12 12 0 0 0 12 .7Z"/>
                    </svg>
                    GitHub
                </a>

                <a class="btn" href="https://www.linkedin.com/in/wesley-rinsma-408665383/" target="_blank" rel="noopener noreferrer">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M20.5 3h-17A2.5 2.5 0 0 0 1 5.5v13A2.5 2.5 0 0 0 3.5 21h17a2.5 2.5 0 0 0 2.5-2.5v-13A2.5 2.5 0 0 0 20.5 3ZM8 18H5V9h3v9ZM6.5 7.8A1.75 1.75 0 1 1 6.5 4.3a1.75 1.75 0 0 1 0 3.5ZM19 18h-3v-4.4c0-1.1 0-2.4-1.5-2.4s-1.7 1.1-1.7 2.3V18h-3V9h2.9v1.2h.1a3.2 3.2 0 0 1 2.8-1.5c3 0 3.4 1.9 3.4 4.5V18Z"/>
                    </svg>
                    LinkedIn
                </a>
            </div>
        </div>

        <!-- De alternatieve tekst van de foto wordt ook vertaald voor toegankelijkheid. -->
        <img class="photo" src="Wesleyfoto.png" alt="<?= e($tekst['photo_alt']) ?>">
    </section>


    <!-- Persoonlijke introductie. -->
    <section id="over">
        <p class="tag"><?= e($tekst['about_tag']) ?></p>

        <h2><?= e($tekst['about_title']) ?></h2>

        <p>
            <?= e($tekst['about_text']) ?>
        </p>
    </section>


    <!-- Uitleg over de keuze voor de opleiding Software Development. -->
    <section>
        <p class="tag"><?= e($tekst['education_tag']) ?></p>

        <h2><?= e($tekst['education_title']) ?></h2>

        <p>
            <?= e($tekst['education_text']) ?>
        </p>
    </section>


    <!-- Vaardigheden worden automatisch als kaarten uit translations.php opgebouwd. -->
    <section id="skills">
        <p class="tag"><?= e($tekst['skills_tag']) ?></p>

        <h2><?= e($tekst['skills_title']) ?></h2>

        <div class="grid">
            <?php
            // Toont alle kaarten uit de lijst.
            foreach ($tekst['skills'] as $kaart) kaart(...$kaart);
            ?>
        </div>
    </section>


    <!-- Technische kennis wordt automatisch als kaarten uit translations.php opgebouwd. -->
    <section id="programmeertalen">
        <p class="tag"><?= e($tekst['languages_tag']) ?></p>

        <h2><?= e($tekst['languages_title']) ?></h2>

        <div class="grid">
            <?php
            // Toont alle kaarten uit de lijst.
            foreach ($tekst['languages'] as $kaart) kaart(...$kaart);
            ?>
        </div>
    </section>


    <!-- Projecten worden automatisch als genummerde kaarten uit translations.php opgebouwd. -->
    <section id="projecten">
        <p class="tag"><?= e($tekst['projects_tag']) ?></p>

        <h2><?= e($tekst['projects_title']) ?></h2>

        <div class="grid">
            <?php
            // Toont alle kaarten uit de lijst.
            foreach ($tekst['projects'] as $kaart) kaart(...$kaart);
            ?>
        </div>
    </section>


    <!-- Beschrijving van de rol binnen het team. -->
    <section id="rol">
        <p class="tag"><?= e($tekst['role_tag']) ?></p>

        <h2><?= e($tekst['role_title']) ?></h2>

        <p>
            <?= e($tekst['role_text']) ?>
        </p>
    </section>

</main>


<!-- Onderste gedeelte van de website met een automatisch bijgewerkt jaartal. -->
<footer>
    <?php
    // Toont automatisch het huidige jaar.
    ?>
    &copy; <?= date('Y') ?> Wesley | Technical Works Leeuwarden
</footer>

</body>
</html>
