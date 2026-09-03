<?php
// Basis HTML metadata
$charset = "UTF-8";
$viewport = "width=device-width, initial-scale=1.0";
$title = "Technical Works Leeuwarden";
$fonts_url = "https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap";
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="<?php echo $charset; ?>">
  <meta name="viewport" content="<?php echo $viewport; ?>">
  <title><?php echo $title; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="<?php echo $fonts_url; ?>" rel="stylesheet">
  <link href="./CSS/index.css" rel="stylesheet">
</head>

<body>

  <?php
  // ===== HEADER =====
  
  include 'handeling/header.php';

  // ===== HERO SECTIE =====
  function renderHero()
  { ?>
    <section class="hero" id="home">
      <div class="grid-bg"></div>
      <div class="zig-wrap" aria-hidden="true">
        <svg viewBox="0 0 460 320">
          <path class="zig-path t" d="M30 40 L150 40 M90 40 L90 280" />
          <path class="zig-path w" d="M180 40 L220 280 L280 120 L340 280 L400 40" />
        </svg>
      </div>
      <div class="wrap">
        <div class="eyebrow"><span class="dash"></span> WEBONTWIKKELING — LEEUWARDEN</div>
        <h1>Technisch werk<br>dat gewoon <span>klopt</span>.</h1>
        <p>Technical Works bouwt websites en webapplicaties voor bedrijven in Leeuwarden en omgeving. Vakwerk, duidelijke
          afspraken, geen verrassingen.</p>
        <div class="hero-actions">
          <a href="contact.php" class="btn-primary">Neem contact op</a>
          <a href="overons.php" class="btn-secondary">Over ons</a>
        </div>
      </div>
    </section>
  <?php }

  // ===== DIENSTEN SECTIE =====
  function renderServices()
  {
    $services = [
      ['idx' => '01 / HTML', 'title' => 'HTML', 'desc' => 'De structuur: heldere, toegankelijke opbouw.'],
      ['idx' => '02 / CSS', 'title' => 'CSS', 'desc' => 'Vormgeving: strak, responsief en professioneel.'],
      ['idx' => '03 / PHP', 'title' => 'PHP', 'desc' => 'Logica: formulieren, acties en dynamische pagina\'s.'],
      ['idx' => '04 / MYSQL', 'title' => 'MySQL', 'desc' => 'Database: gegevens opslaan en beheren.']
    ]; ?>
    <section id="diensten">
      <div class="wrap">
        <div class="section-head reveal">
          <span class="tag mono">// WAAR WE GOED IN ZIJN</span>
          <h2>Waar we goed in zijn</h2>
          <p>Wij beschikken over meerdere programmeertalen </p>
        </div>
        <div class="services-grid reveal">
          <?php foreach ($services as $s) { ?>
            <div class="service-card bracket">
              <span class="idx mono"><?php echo htmlspecialchars($s['idx']); ?></span>
              <h3><?php echo htmlspecialchars($s['title']); ?></h3>
              <p><?php echo htmlspecialchars($s['desc']); ?></p>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>

  // ===== FOOTER =====
  <?php
  function renderFooter()
  { ?>

    <?php include 'handeling/footer.php'; ?>

  <?php }

  // Render alle secties
  renderHero();
  renderServices();
  renderFooter();
  ?>

  <!-- JavaScript: Scroll animatie voor zichtbaarheidselementen -->
  <script>
    const items = document.querySelectorAll('.reveal');
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
    }, { threshold: 0.15 });
    items.forEach(el => io.observe(el));
  </script>

</body>

</html>