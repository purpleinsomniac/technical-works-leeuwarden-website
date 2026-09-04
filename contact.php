<!DOCTYPE html>
<html lang="nl">

<head>
  <!-- Zorgt dat speciale tekens goed worden weergegeven -->
  <meta charset="UTF-8">

  <!-- Zorgt dat de website goed schaalt op mobiel -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Titel die bovenaan het browsertabblad staat -->
  <title>Contact — Technical Works Leeuwarden</title>

  <!-- Maakt alvast verbinding met Google Fonts zodat lettertypes sneller laden -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <!-- Laadt de gebruikte lettertypes van Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- Koppelt het CSS-bestand aan deze pagina -->
  <link href="./CSS/contact.css" rel="stylesheet">
</head>

<body>

  <?php
  // Geeft aan dat de huidige pagina de contactpagina is
  $page = "contact";

  // Voegt de header uit een ander bestand toe
  include 'handeling/header.php';
  ?>

  <!-- Bevat de belangrijkste inhoud van de pagina -->
  <main>

    <!-- Wordt gebruikt om de grid-achtergrond te tonen -->
    <div class="grid-bg"></div>

    <!-- Houdt de inhoud bij elkaar en zorgt dat deze boven de achtergrond staat -->
    <div class="wrap" style="position:relative; z-index:2;">

      <!-- Toont de titel van de pagina -->
      <div class="page-head bracket">
        <span class="tag mono" style="text-align:center; display:block;">// CONTACT</span>
        <h1>Contact</h1>
      </div>

      <!-- Zet de contactkaarten in een groep -->
      <section class="contact-grid" aria-label="Contactgegevens">

        <!-- Toont de gegevens van de contactpersoon -->
        <article class="contact-card bracket">
          <span class="contact-label mono">01 / CONTACTPERSOON</span>
          <h2>Wesley Rinsma</h2>
          <p>Scrummaster - Technical Works Leeuwarden</p>

          <div class="contact-details">
            <span class="contact-label">E-mail</span>

            <!-- Opent het standaard mailprogramma wanneer je op het adres klikt -->
            <a href="mailto:341884@student.firda.nl">341884@student.firda.nl</a>
          </div>
        </article>

        <!-- Toont de contactgegevens van het bedrijf -->
        <article class="contact-card bracket">
          <span class="contact-label mono">02 / BEDRIJF</span>
          <h2>ITIG</h2>
          <p>Onderdeel van ITIG</p>

          <div class="contact-details">
            <span class="contact-label">E-mail</span>

            <!-- Opent het standaard mailprogramma -->
            <a href="mailto:info@itig.nl">info@itig.nl</a>

            <span class="contact-label">Telefoon</span>

            <!-- Probeert het telefoonnummer te bellen wanneer je erop klikt -->
            <a href="tel:+31581234567">058 - 123 4567</a>
          </div>
        </article>

      </section>
    </div>
  </main>

  <!-- Voegt de footer uit een ander PHP-bestand toe -->
  <?php include 'handeling/footer.php'; ?>

</body>

</html>