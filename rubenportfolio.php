<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Ruben — Technical Works Leeuwarden</title>
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
        <span class="tag mono">// PORTFOLIO / RUBEN</span>
        <h1>Werk van Ruben</h1>
        <p>Webdeveloper met aandacht voor een sterke basis, nette code en websites die gewoon goed werken.</p>
      </section>

      <section class="text-box bracket" aria-label="Over Ruben">
        <span class="box-label mono">01 / RUBEN</span>
        <h2>Webdeveloper met veel ideen</h2>
        <p>Ik bouw websites en webapplicaties die helder zijn voor bezoekers en prettig blijven werken voor de mensen
          die ze beheren.</p>
        <p>Mijn focus ligt op een sterke technische basis met HTML, CSS, PHP en MySQL. Van de eerste structuur tot de
          laatste controle zorg ik voor overzichtelijke code en een betrouwbare gebruikerservaring.</p>
      </section>

      <div class="portfolio-actions">
        <a href="contact.php" class="button primary">Bespreek een project</a>
        <a href="overons.php" class="button">Terug naar team</a>
        <a href="https://github.com/purpleinsomniac" class="button" target="_blank" rel="noopener noreferrer">GitHub</a>
      </div>
    </div>
  </main>

  <?php include 'handeling/footer.php'; ?>
</body>

</html>