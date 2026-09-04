<!DOCTYPE html>
<html lang="nl">

<head>
  <!-- Zorgt dat speciale tekens goed worden weergegeven -->
  <meta charset="UTF-8">

  <!-- Zorgt dat de pagina goed schaalt op mobiel -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Titel die in het browsertabblad wordt weergegeven -->
  <title>Portfolio Gilano — Technical Works Leeuwarden</title>

  <!-- Maakt alvast verbinding met Google Fonts voor sneller laden -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <!-- Laadt de gebruikte lettertypes van Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- Koppelt het CSS-bestand voor de opmaak aan de pagina -->
  <link href="./CSS/portfolio.css" rel="stylesheet">
</head>

<body>

  <!-- Voegt de header uit een ander PHP-bestand toe -->
  <?php include 'handeling/header.php'; ?>

  <!-- Bevat de belangrijkste inhoud van de pagina -->
  <main>

    <!-- Wordt gebruikt om de grid-achtergrond te tonen -->
    <div class="grid-bg"></div>

    <!-- Houdt de inhoud van de pagina bij elkaar -->
    <div class="wrap">

      <!-- Toont de titel en korte introductie van het portfolio -->
      <section class="portfolio-head bracket">
        <span class="tag mono">// PORTFOLIO / Gilano</span>
        <h1>Werk van Gilano</h1>
        <p>webdeveloper die goed fouten kan spotten in de code</p>
      </section>

      <!-- Toont informatie over Gilano en zijn ervaring -->
      <section class="text-box bracket" aria-label="Over Wesley">
        <span class="box-label mono">05 / Gilano</span>
        <h2>Fouten spotter</h2>

        <p>Ik ben Gilano Nash en ik ben 18 jaar oud. Ik ben een software developer. Ik heb voor deze opleiding gekozen,
          omdat ik veel projecten met Scratch heb gemaakt. Scratch is een programmeertaal waarbij je blokken moet slepen
          in plaats van codes te typen. Ik vind het heel leuk om met Scratch te werken. Als software developer moet je
          ook programmeren, dus dat leek me wel een goede opleiding voor mij.</p>

        <!-- Zorgt voor ruimte tussen de teksten -->
        <br>

        <!-- Beschrijft het project voor Sing4You -->
        <P>Ik heb Samen met twee anderen een dynamische website gemaakt voor Sing4You. De website is gemaakt in HTML,
          CSS Javascript, PHP en SQL. Ik deed de backend en heb geholpen met het front-end.</P>

        <!-- Zorgt voor ruimte tussen de teksten -->
        <br>

        <!-- Beschrijft het project met de parkeersensor -->
        <p>Ik heb Samen met twee anderen een parkeer sensor gemaakt met een raspberry-pi. De sensor is geprogrammeerd in
          Python. Ik heb de logica van de sensor geprogrammeerd.</p>
      </section>

      <!-- Bevat knoppen die naar andere pagina's en websites linken -->
      <div class="portfolio-actions">

        <!-- Gaat naar de contactpagina -->
        <a href="contact.php" class="button primary">Bespreek een project</a>

        <!-- Gaat terug naar de teampagina -->
        <a href="overons.php" class="button">Terug naar team</a>

        <!-- Opent het GitHub-profiel in een nieuw tabblad -->
        <a href="https://github.com/GilanoNash" class="button" target="_blank" rel="noopener noreferrer">GitHub</a>

        <!-- Opent de persoonlijke website in een nieuw tabblad -->
        <a href="https://gilanonash.github.io/portfolio-Gilano-Nash/" class="button" target="_blank"
          rel="noopener noreferrer">persoonlijke website</a>
      </div>

    </div>
  </main>

  <!-- Voegt de footer uit een ander PHP-bestand toe -->
  <?php include 'handeling/footer.php'; ?>

</body>

</html>