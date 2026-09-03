<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Gerben — Technical Works Leeuwarden</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet">
  <link href="./CSS/portfolio.css" rel="stylesheet">
</head>

<body>
  <?php include 'handeling/header.php'; ?>

  <main>
    <div class="grid-bg"></div>
    <div class="wrap">
      <section class="portfolio-head bracket">
        <span class="tag mono">// PORTFOLIO / GERBEN</span>
        <h1>Werk van Gerben</h1>
        <p>Webdeveloper met een praktische aanpak en aandacht voor websites die duidelijk, snel en prettig werken.</p>
      </section>

      <section class="text-box bracket" aria-label="Over Gerben">
        <span class="box-label mono">02 / GERBEN</span>
        <h2>Webdeveloper met een praktische aanpak</h2>
        <p>Ik werk aan websites en webapplicaties waarin een duidelijke structuur en een goede gebruikerservaring
          centraal staan.</p>
        <p>Mijn focus ligt op nette frontend, betrouwbare functionaliteit en oplossingen die passen bij de mensen die
          ermee werken. Van idee tot uitvoering houd ik het overzichtelijk en doelgericht.</p>
      </section>

      <div class="portfolio-actions">
        <a href="contact.php" class="button primary">Bespreek een project</a>
        <a href="overons.php" class="button">Terug naar team</a>
        <a href="gerben_website/GerbenPortfolioWebsite.php" class="button">Website</a>
        <a href="https://github.com/Gurbun" class="button" target="_blank" rel="noopener noreferrer">GitHub</a>
      </div>
    </div>
  </main>

  <?php include 'handeling/footer.php'; ?>
</body>

</html>