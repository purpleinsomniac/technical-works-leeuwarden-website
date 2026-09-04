```php
<?php
// Slaat de basisinstellingen van de pagina op
$charset = "UTF-8";
$viewport = "width=device-width, initial-scale=1.0";
$title = "Technical Works Leeuwarden";
$fonts_url = "https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap";
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <!-- Gebruikt de PHP-variabelen voor de instellingen van de pagina -->
  <meta charset="<?php echo $charset; ?>">
  <meta name="viewport" content="<?php echo $viewport; ?>">
  <title><?php echo $title; ?></title>

  <!-- Maakt verbinding met Google Fonts en laadt de lettertypes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="<?php echo $fonts_url; ?>" rel="stylesheet">

  <!-- Laadt de CSS voor de opmaak van de pagina -->
  <link href="./CSS/index.css" rel="stylesheet">
</head>

<body>

  <?php
  // Geeft aan dat de huidige pagina de homepagina is
  $page = "home";

  // Voegt de header uit header.php toe
  include 'handeling/header.php';

  // Maakt de hero-sectie bovenaan de website
  function renderHero()
  { ?>
    <section class="hero" id="home">

      <!-- Toont de grid-achtergrond -->
      <div class="grid-bg"></div>

      <!-- Tekent de T en W met SVG-lijnen -->
      <div class="zig-wrap" aria-hidden="true">
        <svg viewBox="0 0 460 320">
          <path class="zig-path t" d="M30 40 L150 40 M90 40 L90 280" />
          <path class="zig-path w" d="M180 40 L220 280 L280 120 L340 280 L400 40" />
        </svg>
      </div>

      <!-- Bevat de tekst en knoppen van de hero -->
      <div class="wrap">
        <div class="eyebrow"><span class="dash"></span> WEBONTWIKKELING — LEEUWARDEN</div>

        <h1>Technisch werk<br>dat gewoon <span>klopt</span>.</h1>

        <p>Technical Works bouwt websites en webapplicaties voor bedrijven in Leeuwarden en omgeving. Vakwerk, duidelijke
          afspraken, geen verrassingen.</p>

        <!-- Knoppen naar de contact- en over-ons-pagina -->
        <div class="hero-actions">
          <a href="contact.php" class="btn-primary">Neem contact op</a>
          <a href="overons.php" class="btn-secondary">Over ons</a>
        </div>
      </div>
    </section>
  <?php }

  // Maakt de sectie waarin de diensten worden getoond
  function renderServices()
  {
    // Slaat de diensten en hun informatie op in een array
    $services = [
      ['idx' => '01 / HTML', 'title' => 'HTML', 'desc' => 'De structuur: heldere, toegankelijke opbouw.'],
      ['idx' => '02 / CSS', 'title' => 'CSS', 'desc' => 'Vormgeving: strak, responsief en professioneel.'],
      ['idx' => '03 / PHP', 'title' => 'PHP', 'desc' => 'Logica: formulieren, acties en dynamische pagina\'s.'],
      ['idx' => '04 / MYSQL', 'title' => 'MySQL', 'desc' => 'Database: gegevens opslaan en beheren.']
    ]; ?>

    <section id="diensten">
      <div class="wrap">

        <!-- Toont de titel en uitleg van de diensten -->
        <div class="section-head reveal">
          <span class="tag mono">// WAAR WE GOED IN ZIJN</span>
          <h2>Waar we goed in zijn</h2>
          <p>Wij beschikken over meerdere programmeertalen </p>
        </div>

        <div class="services-grid reveal">

          <!-- Loopt één voor één door alle diensten -->
          <?php foreach ($services as $s) { ?>

            <!-- Maakt voor iedere dienst een aparte kaart -->
            <div class="service-card bracket">

              <!-- Toont de gegevens van de huidige dienst -->
              <span class="idx mono"><?php echo htmlspecialchars($s['idx']); ?></span>
              <h3><?php echo htmlspecialchars($s['title']); ?></h3>
              <p><?php echo htmlspecialchars($s['desc']); ?></p>

            </div>
          <?php } ?>

        </div>
      </div>
    </section>
  <?php } ?>

  <?php
  // Maakt een functie die de footer toevoegt
  function renderFooter()
  { ?>

    <!-- Voegt de footer uit footer.php toe -->
    <?php include 'handeling/footer.php'; ?>

  <?php }

  // Voert de functies uit zodat de onderdelen op de pagina verschijnen
  renderHero();
  renderServices();
  renderFooter();
  ?>

  <script>
    // Zoekt alle elementen met de class 'reveal'
    const items = document.querySelectorAll('.reveal');

    // Controleert wanneer een element zichtbaar wordt op het scherm
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {

        // Voegt de class 'in' toe wanneer het element in beeld komt
        if (e.isIntersecting) {
          e.target.classList.add('in');

          // Stopt daarna met het controleren van dit element
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.15 });

    // Laat alle gevonden elementen controleren
    items.forEach(el => io.observe(el));
  </script>

</body>

</html>
```
