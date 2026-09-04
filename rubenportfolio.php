
<!DOCTYPE html>
<html lang="nl">

<head>
  <!-- Zorgt dat speciale tekens goed worden weergegeven -->
  <meta charset="UTF-8">

  <!-- Zorgt dat de website goed schaalt op mobiel -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Titel die in het browsertabblad staat -->
  <title>Portfolio Ruben — Technical Works Leeuwarden</title>

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
        <span class="tag mono">// PORTFOLIO / RUBEN</span>
        <h1>Werk van Ruben</h1>
        <p>Webdeveloper met aandacht voor een sterke basis, nette code en websites die gewoon goed werken.</p>
      </section>

      <!-- Toont informatie over Ruben en zijn werkzaamheden -->
      <section class="text-box bracket" aria-label="Over Ruben">
        <span class="box-label mono">01 / RUBEN</span>
        <h2>Webdeveloper met veel ideen</h2>

        <p>Ik bouw websites en webapplicaties die helder zijn voor bezoekers en prettig blijven werken voor de mensen
          die ze beheren.</p>

        <p>Mijn focus ligt op een sterke technische basis met HTML, CSS, PHP en MySQL. Van de eerste structuur tot de
          laatste controle zorg ik voor overzichtelijke code en een betrouwbare gebruikerservaring.</p>
      </section>

      <!-- Bevat de knoppen naar andere pagina's en websites -->
      <div class="portfolio-actions">

        <!-- Gaat naar de contactpagina -->
        <a href="contact.php" class="button primary">Bespreek een project</a>

        <!-- Gaat terug naar de pagina met het team -->
        <a href="overons.php" class="button">Terug naar team</a>

        <!-- Opent het GitHub-profiel in een nieuw tabblad -->
        <a href="https://github.com/purpleinsomniac" class="button" target="_blank" rel="noopener noreferrer">GitHub</a>

      </div>
    </div>
  </main>

  <!-- Voegt de footer uit een ander PHP-bestand toe -->
  <?php include 'handeling/footer.php'; ?>

</body>

</html>
```
