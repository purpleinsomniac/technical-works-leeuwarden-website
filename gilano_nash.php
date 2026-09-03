<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Wesley — Technical Works Leeuwarden</title>
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
        <span class="tag mono">// PORTFOLIO / Gilano</span>
        <h1>Werk van Gilano</h1>
        <p>webdeveloper die goed fouten kan spotten in de code</p>
      </section>

      <section class="text-box bracket" aria-label="Over Wesley">
        <span class="box-label mono">05 / Gilano</span>
        <h2>Fouten spotter</h2>
        <p>Ik ben Gilano Nash en ik ben 18 jaar oud. Ik ben een software developer. Ik heb voor deze opleiding gekozen,
          omdat ik veel projecten met Scratch heb gemaakt. Scratch is een programmeertaal waarbij je blokken moet slepen
          in plaats van codes te typen. Ik vind het heel leuk om met Scratch te werken. Als software developer moet je
          ook programmeren, dus dat leek me wel een goede opleiding voor mij.</p>
        <br>
        <P>Ik heb Samen met twee anderen een dynamische website gemaakt voor Sing4You. De website is gemaakt in HTML,
          CSS Javascript, PHP en SQL. Ik deed de backend en heb geholpen met het front-end.</P>
        <br>
        <p>Ik heb Samen met twee anderen een parkeer sensor gemaakt met een raspberry-pi. De sensor is geprogrammeerd in
          Python. Ik heb de logica van de sensor geprogrammeerd.</p>
      </section>

      <div class="portfolio-actions">
        <a href="contact.php" class="button primary">Bespreek een project</a>
        <a href="overons.php" class="button">Terug naar team</a>
        <a href="https://github.com/GilanoNash" class="button" target="_blank" rel="noopener noreferrer">GitHub</a>
        <a href="https://gilanonash.github.io/portfolio-Gilano-Nash/" class="button" target="_blank"
          rel="noopener noreferrer">persoonlijke website</a>
      </div>
    </div>
  </main>

  <?php include 'handeling/footer.php'; ?>
</body>

</html>