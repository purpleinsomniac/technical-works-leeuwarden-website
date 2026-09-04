<!DOCTYPE html>
<html lang="nl">

<head>
  <!-- Zorgt dat speciale tekens goed worden weergegeven -->
  <meta charset="UTF-8">

  <!-- Zorgt dat de pagina goed schaalt op mobiel -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Titel die in het browsertabblad wordt weergegeven -->
  <title>Portfolio Gerben — Technical Works Leeuwarden</title>

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
        <span class="tag mono">// PORTFOLIO / GERBEN</span>
        <h1>Werk van Gerben</h1>
        <p>Webdeveloper met een praktische aanpak en aandacht voor websites die duidelijk, snel en prettig werken.</p>
      </section>

      <!-- Toont informatie over Gerben en zijn manier van werken -->
      <section class="text-box bracket" aria-label="Over Gerben">
        <span class="box-label mono">02 / GERBEN</span>
        <h2>Webdeveloper met een praktische aanpak</h2>

        <p>
          Ik werk aan websites en webapplicaties waarin een duidelijke structuur en een goede gebruikerservaring
          centraal staan.
        </p>

        <p>
          Mijn focus ligt op nette frontend, betrouwbare functionaliteit en oplossingen die passen bij de mensen die
          ermee werken. Van idee tot uitvoering houd ik het overzichtelijk en doelgericht.
        </p>
      </section>

      <!-- Bevat knoppen die naar andere pagina's en websites linken -->
      <div class="portfolio-actions">

        <!-- Gaat naar de contactpagina -->
        <a href="contact.php" class="button primary">Bespreek een project</a>

        <!-- Gaat terug naar de teampagina -->
        <a href="overons.php" class="button">Terug naar team</a>

        <!-- Opent de portfolio-website van Gerben -->
        <a href="gerben_website/GerbenPortfolioWebsite.php" class="button">Website</a>

        <!-- Opent het GitHub-profiel in een nieuw tabblad -->
        <a href="https://github.com/Gurbun" class="button" target="_blank" rel="noopener noreferrer">GitHub</a>
      </div>

    </div>
  </main>

  <!-- Voegt de footer uit een ander PHP-bestand toe -->
  <?php include 'handeling/footer.php'; ?>

</body>

</html>