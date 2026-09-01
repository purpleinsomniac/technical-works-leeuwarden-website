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
<style>
  /* Kleurvariabelen */
  :root{--ink:#0A1422;--blue:#1E559D;--blue-light:#3D7FC9;--steel:#8B93A0;--bg:#F4F5F7;--line:rgba(30,85,157,0.14);--white:#FFFFFF;}
  *{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{background:var(--bg);color:var(--ink);font-family:'Work Sans',sans-serif;line-height:1.5;overflow-x:hidden;}
  h1,h2,h3{font-family:'Oswald',sans-serif;text-transform:uppercase;letter-spacing:0.02em;}
  .mono{font-family:'JetBrains Mono',monospace;letter-spacing:0.04em;}
  a{color:inherit;text-decoration:none;}
  .wrap{max-width:1160px;margin:0 auto;padding:0 32px;}
  
  /* Achtergrond rasterpatroon */
  .grid-bg{position:absolute;inset:0;background-image:linear-gradient(var(--line) 1px,transparent 1px),linear-gradient(90deg,var(--line) 1px,transparent 1px);background-size:40px 40px;pointer-events:none;}
  
  /* Decoratieve hoeken */
  .bracket::before,.bracket::after{content:'';position:absolute;width:18px;height:18px;border-color:var(--blue);border-style:solid;opacity:0.55;}
  .bracket::before{top:-1px;left:-1px;border-width:2px 0 0 2px;}
  .bracket::after{bottom:-1px;right:-1px;border-width:0 2px 2px 0;}
  .bracket{position:relative;}
  
  /* Header navigatie */
  header{position:fixed;top:0;left:0;right:0;z-index:50;background:rgba(244,245,247,0.9);backdrop-filter:blur(8px);border-bottom:1px solid var(--line);}
  nav{display:flex;align-items:center;justify-content:space-between;padding:14px 32px;width:100%;}
  .nav-left{display:flex;align-items:center;gap:44px;}
  .brand{display:flex;align-items:center;gap:10px;}
  .brand img{height:90px;width:auto;display:block;}
  .navlinks{display:flex;gap:28px;font-size:14px;font-weight:500;}
  .navlinks a{position:relative;padding:4px 0;color:var(--ink);}
  .navlinks a.current{color:var(--blue);}
  .navlinks a::after{content:'';position:absolute;left:0;bottom:0;height:2px;width:0;background:var(--blue);transition:width .25s ease;}
  .navlinks a:hover::after,.navlinks a.current::after{width:100%;}
  .nav-cta{font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:.05em;background:var(--ink);color:var(--white);padding:11px 20px;border:1px solid var(--ink);transition:background .2s ease,color .2s ease;}
  .nav-cta:hover{background:transparent;color:var(--ink);}
  
  /* Hero sectie */
  .hero{position:relative;padding:170px 0 120px;overflow:hidden;}
  .hero .wrap{position:relative;z-index:2;}
  .eyebrow{font-size:12px;font-weight:500;color:var(--blue);display:flex;align-items:center;gap:10px;margin-bottom:22px;}
  .eyebrow .dash{width:28px;height:1px;background:var(--blue);}
  .hero h1{font-size:clamp(40px,6vw,76px);line-height:0.98;max-width:820px;color:var(--ink);}
  .hero h1 span{color:var(--blue);}
  .hero p{max-width:520px;margin-top:26px;font-size:17px;color:#3C4550;}
  .hero-actions{display:flex;gap:16px;margin-top:40px;flex-wrap:wrap;}
  
  /* Knoppen */
  .btn-primary{background:var(--blue);color:var(--white);padding:15px 28px;font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:.06em;border:1px solid var(--blue);transition:background .2s ease;cursor:pointer;}
  .btn-primary:hover{background:#164680;}
  .btn-secondary{padding:15px 28px;font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:.06em;border:1px solid var(--ink);transition:all .2s ease;cursor:pointer;}
  .btn-secondary:hover{background:var(--ink);color:var(--white);}
  
  /* Zigzag animatie */
  .zig-wrap{position:absolute;right:-20px;top:120px;width:480px;height:340px;z-index:1;opacity:0.95;}
  .zig-wrap svg{width:100%;height:100%;}
  .zig-path{fill:none;stroke-linecap:square;stroke-linejoin:miter;}
  .zig-path.t{stroke:var(--ink);stroke-width:5;opacity:.55;stroke-dasharray:420;stroke-dashoffset:420;animation:draw 1s ease forwards .3s;}
  .zig-path.w{stroke:var(--blue-light);stroke-width:4;stroke-dasharray:1050;stroke-dashoffset:1050;animation:draw 1.5s ease forwards 1.15s;}
  @keyframes draw{to{stroke-dashoffset:0;}}
  
  /* Secties */
  section{padding:110px 0;position:relative;}
  .section-head{max-width:600px;margin-bottom:64px;}
  .tag{font-size:12px;color:var(--blue);margin-bottom:14px;display:block;}
  .section-head h2{font-size:clamp(28px,3.6vw,42px);color:var(--ink);}
  .section-head p{margin-top:14px;color:#3C4550;font-size:15.5px;}
  
  /* Diensten grid */
  .services-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:2px;background:var(--line);border:1px solid var(--line);}
  .service-card{background:var(--bg);padding:38px;position:relative;}
  .service-card .idx{font-size:12px;color:var(--steel);}
  .service-card h3{font-size:22px;margin:16px 0 12px;color:var(--ink);}
  .service-card p{font-size:14.5px;color:#4A525C;}
  
  /* Contact sectie */
  .contact{background:var(--ink);color:var(--white);position:relative;overflow:hidden;}
  .contact .grid-bg{background-image:linear-gradient(rgba(255,255,255,0.05) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.05) 1px,transparent 1px);}
  .contact .wrap{position:relative;z-index:2;display:flex;align-items:flex-end;flex-wrap:wrap;gap:40px;min-height:180px;}
  .contact h2{font-size:clamp(30px,4vw,50px);max-width:520px;}
  
  /* Footer */
  footer{padding:26px 0;border-top:1px solid var(--line);}
  footer .wrap{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;font-size:12.5px;color:var(--steel);}
  
  /* Animatie inzichtbaarheid */
  .reveal{opacity:0;transform:translateY(18px);transition:opacity .6s ease,transform .6s ease;}
  .reveal.in{opacity:1;transform:none;}
  
  /* Responsief */
  @media (max-width:820px){.navlinks{display:none;}.services-grid{grid-template-columns:1fr;}.zig-wrap{display:none;}.contact .wrap{align-items:flex-start;}}
  @media (prefers-reduced-motion:reduce){.zig-path{animation:none;stroke-dashoffset:0;}.reveal{transition:none;opacity:1;transform:none;}}
</style>
</head>
<body>

<?php
  // ===== HEADER =====
  function renderHeader() { ?>
    <header>
      <nav>
        <div class="nav-left">
          <div class="brand"><img src="logo.png" alt="Technical Works logo"></div>
          <div class="navlinks">
            <a href="index.html" class="current">Home</a>
            <a href="overons.html">Over ons</a>
            <a href="contact.html">Contact</a>
          </div>
        </div>
        <a href="contact.html" class="nav-cta">Neem contact op</a>
      </nav>
    </header>
  <?php }

  // ===== HERO SECTIE =====
  function renderHero() { ?>
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
        <p>Technical Works bouwt websites en webapplicaties voor bedrijven in Leeuwarden en omgeving. Vakwerk, duidelijke afspraken, geen verrassingen.</p>
        <div class="hero-actions">
          <a href="contact.html" class="btn-primary">Neem contact op</a>
          <a href="overons.html" class="btn-secondary">Over ons</a>
        </div>
      </div>
    </section>
  <?php }

  // ===== DIENSTEN SECTIE =====
  function renderServices() {
    $services = [
      ['idx'=>'01 / HTML','title'=>'HTML','desc'=>'De structuur: heldere, toegankelijke opbouw.'],
      ['idx'=>'02 / CSS','title'=>'CSS','desc'=>'Vormgeving: strak, responsief en professioneel.'],
      ['idx'=>'03 / PHP','title'=>'PHP','desc'=>'Logica: formulieren, acties en dynamische pagina\'s.'],
      ['idx'=>'04 / MYSQL','title'=>'MySQL','desc'=>'Database: gegevens opslaan en beheren.']
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
  <?php }

  // ===== FOOTER =====
  function renderFooter() {
    $year = date('Y');
    $copyright = "© {$year} Technical Works Leeuwarden";
    $brand = "TECHNICAL WORKS — LEEUWARDEN"; ?>
    <footer>
      <div class="wrap">
        <span><?php echo htmlspecialchars($copyright); ?></span>
        <span class="mono"><?php echo htmlspecialchars($brand); ?></span>
      </div>
    </footer>
  <?php }

  // Render alle secties
  renderHeader();
  renderHero();
  renderServices();
  renderFooter();
?>

<!-- JavaScript: Scroll animatie voor zichtbaarheidselementen -->
<script>
  const items = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
  }, {threshold:0.15});
  items.forEach(el=>io.observe(el));
</script>

</body>
</html>
