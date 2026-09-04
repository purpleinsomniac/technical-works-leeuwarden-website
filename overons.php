
<!DOCTYPE html>
<html lang="nl">

<head>
  <!-- Zorgt dat speciale tekens goed worden weergegeven -->
  <meta charset="UTF-8">

  <!-- Zorgt dat de website goed schaalt op mobiel -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Titel die in het browsertabblad staat -->
  <title>Over ons — Technical Works Leeuwarden</title>

  <!-- Maakt alvast verbinding met Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <!-- Laadt de gebruikte lettertypes -->
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- Koppelt het CSS-bestand voor de opmaak aan de pagina -->
  <link href="./CSS/overons.css" rel="stylesheet">
</head>

<body>

  <?php
  // Geeft aan dat de huidige pagina de over-ons-pagina is
  $page = "over ons";

  // Voegt de header uit een ander PHP-bestand toe
  include 'handeling/header.php';
  ?>

  <!-- Bevat de belangrijkste inhoud van de pagina -->
  <main>

    <!-- Toont de grid-achtergrond -->
    <div class="grid-bg"></div>

    <!-- Houdt de inhoud bij elkaar en boven de achtergrond -->
    <div class="wrap" style="position:relative; z-index:2;">

      <!-- Toont de titel van de pagina -->
      <div class="page-head bracket">
        <span class="tag mono" style="text-align:center; display:block;">// OVER ONS</span>
        <h1>Over ons</h1>
      </div>

      <!-- Geeft een korte uitleg over het team -->
      <p class="team-intro">Vier mensen, een gedeelde liefde voor technisch werk dat helder, snel en betrouwbaar
        aanvoelt.</p>

      <!-- Zet de teamleden in een overzicht -->
      <div class="team-grid">

        <!-- Toont de informatie van Ruben -->
        <article class="person-card bracket">
          <span class="idx mono">01 / TEAM</span>
          <h2>Ruben</h2>
          <span class="role">github master</span>
          <p>Ruben bouwt de technische basis en zorgt dat alles soepel blijft werken.</p>

          <!-- Gaat naar het portfolio van Ruben -->
          <a class="person-link" href="rubenportfolio.php">portfolio &rarr;</a>
        </article>

        <!-- Toont de informatie van Gerben -->
        <article class="person-card bracket">
          <span class="idx mono">02 / TEAM</span>
          <h2>Gerben </h2>
          <span class="role">webdeveloper</span>
          <p>Gerben is de webdeveloper van het team en zorgt voor een goede gebruikerservaring.</p>

          <!-- Gaat naar het portfolio van Gerben -->
          <a class="person-link" href="gerbenportfolio.php">portfolio &rarr;</a>
        </article>

        <!-- Toont de informatie van Wesley -->
        <article class="person-card bracket">
          <span class="idx mono">03 / TEAM</span>
          <h2>Wesley</h2>
          <span class="role">scrum master</span>
          <p>Coachen van het team Helpen van teamleden om zelfstandig te werken en goed samen te werken.</p>

          <!-- Gaat naar het portfolio van Wesley -->
          <a class="person-link" href="wesleyportfolio.php">portfolio &rarr;</a>
        </article>

        <!-- Toont de informatie van Gilano -->
        <article class="person-card bracket">
          <span class="idx mono">04 / TEAM</span>
          <h2>Gilano</h2>
          <span class="role">webdeveloper</span>
          <p>Gilano kan goed fouten spotten in de code</p>

          <!-- Gaat naar het portfolio van Gilano -->
          <a class="person-link" href="gilano_nash.php">portfolio &rarr;</a>
        </article>

      </div>
    </div>
  </main>

  <!-- Voegt de footer uit een ander PHP-bestand toe -->
  <?php include 'handeling/footer.php'; ?>

</body>

</html>
```
