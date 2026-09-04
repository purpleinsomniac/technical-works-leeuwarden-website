
<!DOCTYPE html>
<html lang="nl">

<head>
  <!-- Zorgt dat speciale tekens goed worden weergegeven -->
  <meta charset="UTF-8">

  <!-- Zorgt dat de website goed schaalt op mobiel -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Titel die in het browsertabblad staat -->
  <title>Portfolio Wesley — Technical Works Leeuwarden</title>

  <!-- Maakt alvast verbinding met Google Fonts -->
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

    <!-- Toont de grid-achtergrond -->
    <div class="grid-bg"></div>

    <!-- Houdt de inhoud van de pagina bij elkaar -->
    <div class="wrap">

      <!-- Toont de titel en korte introductie van het portfolio -->
      <section class="portfolio-head bracket">
        <span class="tag mono">// PORTFOLIO / WESLEY</span>
        <h1>Werk van Wesley</h1>
        <p>Scrum Master met aandacht voor samenwerking, overzicht en teams die samen goed resultaat leveren.</p>
      </section>

      <!-- Toont informatie over Wesley en zijn werkzaamheden -->
      <section class="text-box bracket" aria-label="Over Wesley">
        <span class="box-label mono">03 / WESLEY</span>
        <h2>Scrum Master met oog voor samenwerking</h2>

        <p>Ik help teams om overzicht te houden, helder samen te werken en stap voor stap sterke digitale projecten op
          te leveren.</p>

        <p>Door doelen duidelijk te maken en obstakels snel zichtbaar te maken, zorg ik voor een rustige werkwijze
          waarin iedereen zijn bijdrage kan leveren.</p>
      </section>

      <!-- Bevat knoppen naar andere pagina's en websites -->
      <div class="portfolio-actions">

        <!-- Gaat naar de contactpagina -->
        <a href="contact.php" class="button primary">Bespreek een project</a>

        <!-- Gaat terug naar de pagina met het team -->
        <a href="overons.php" class="button">Terug naar team</a>

        <!-- Opent het GitHub-profiel van Wesley in een nieuw tabblad -->
        <a href="https://github.com/Wesley058" class="button" target="_blank" rel="noopener noreferrer">GitHub</a>

        <!-- Opent de persoonlijke website van Wesley in een nieuw tabblad -->
        <a href="wesley_website/WesleyPagina.php" class="button" target="_blank" rel="noopener noreferrer">persoonlijke
          website</a>

      </div>
    </div>
  </main>

  <!-- Voegt de footer uit een ander PHP-bestand toe -->
  <?php include 'handeling/footer.php'; ?>

</body>

</html>

