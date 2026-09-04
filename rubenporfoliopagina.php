<?php
/**
 * ---------------------------------------------------------
 * PAS HIER AAN: alle inhoud staat in dit configuratieblok.
 * Onder "// === HIER BEGINT DE HTML ===" hoeft niets te worden aangepast,
 * tenzij je een project of onderdeel wilt toevoegen of verwijderen.
 * ---------------------------------------------------------
 */

// Persoonlijke gegevens die op meerdere plaatsen op de pagina worden gebruikt.
$name    = "Ruben Huizenga";
$role    = "Student softwareontwikkelaar";
$tagline = "Overdag werken aan schoolopdrachten, 's avonds eigen projecten bouwen.";

// Korte introductie die in het onderdeel 'Over mij' wordt getoond.
$about = "Ik ben een student informatica en besteed ongeveer net zoveel tijd aan het debuggen van code als aan het verbeteren van mijn uitrusting in het spel dat ik die week speel. Die twee blijken eigenlijk niet zo verschillend te zijn: voor beide zijn geduld, patroonherkenning en een frisse blik nodig. Ik zoek mogelijkheden om die instelling om te zetten in echte software.";

// Motivatie voor het volgen van de opleiding.
$motivation = "Ik doe deze opleiding omdat code mij interesseert en ik het leuk vind om met code oplossingen te bedenken en te bouwen. Daarnaast doet mijn vader dit werk ook, waardoor ik al vroeg kennis heb gemaakt met deze richting en enthousiast ben geworden om er zelf verder in te groeien.";

// Programmeertalen en hulpmiddelen die als losse labels worden weergegeven.
$skills = ["Java", "Python", "JavaScript", "PHP", "Git", "SQL", "en meer..."];

// Projectgegevens voor de kaarten in het projectoverzicht.
$projects = [
    [
        "title" => "FNV-website",
        "stack" => "PHP, html, CSS",
        "description" => "ik heb gewerkt aan een website voor FNV.",
        "link" => "#",
    ],
    [
        "title" => "Technical Works-website",
        "stack" => "PHP, html, CSS",
        "description" => "ik heb gewerkt aan een website voor Technical Works.",
        "link" => "#",
    ],
    
];

// Contactgegevens voor de links onderaan de pagina.
$email    = "huizenga.ruben@gmail.com";
$github   = "https://github.com/purpleinsomniac";

// === HIER BEGINT DE HTML ===
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<!-- Metadata en lettertypen voor een correcte weergave van de pagina. -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($name); ?> — <?php echo htmlspecialchars($role); ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
  /* Centrale kleur- en lettertypevariabelen voor de hele pagina. */
  :root {
    --bg: #14161c;
    --panel: #1c1f28;
    --panel-border: #2a2e3a;
    --text: #e8e6e1;
    --text-dim: #9a9dab;
    --accent: #8b5cf6;
    --accent-2: #ffb86b;
    --mono: 'JetBrains Mono', monospace;
  }

  /* Voorkomt dat padding en randen de berekende breedte vergroten. */
  * { box-sizing: border-box; }

  /* Laat interne links vloeiend naar hun doel scrollen. */
  html { scroll-behavior: smooth; }

  /* Algemene basisstijl voor de pagina. */
  body {
    margin: 0;
    background: var(--bg);
    color: var(--text);
    font-family: 'Inter', sans-serif;
    line-height: 1.6;
  }

  /* Gebruikt een opvallend lettertype voor alle koppen. */
  h1, h2, h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    margin: 0;
  }

  /* Algemene stijl en hoverstijl voor links. */
  a { color: var(--accent); text-decoration: none; }
  a:hover { text-decoration: underline; }

  /* Maakt toetsenbordfocus zichtbaar voor betere toegankelijkheid. */
  a:focus-visible,
  button:focus-visible {
    outline: 2px solid var(--accent-2);
    outline-offset: 3px;
  }

  /* Beperkt de inhoud en centreert die op brede schermen. */
  .wrap {
    max-width: 760px;
    margin: 0 auto;
    padding: 0 24px;
  }

  /* Ruimte en scheidingslijn voor het introductieblok. */
  header.hero {
    padding: 96px 0 72px;
    border-bottom: 1px solid var(--panel-border);
  }

  /* Klein label boven de naam. */
  .hero .kicker {
    font-family: var(--mono);
    color: var(--accent-2);
    font-size: 0.9rem;
    margin-bottom: 14px;
  }

  /* Responsieve grootte van de hoofdtitel. */
  .hero h1 {
    font-size: clamp(2.2rem, 5vw, 3.4rem);
    line-height: 1.1;
    margin-bottom: 10px;
  }

  /* Ondertitel met de rol van Ruben. */
  .hero .role {
    color: var(--text-dim);
    font-size: 1.15rem;
    margin-bottom: 20px;
  }

  /* Beperkt de leeslengte van de korte introductie. */
  .hero p.tagline {
    max-width: 52ch;
    color: var(--text-dim);
  }

  /* Algemene opmaak en scheiding tussen inhoudelijke onderdelen. */
  section { padding: 64px 0; border-bottom: 1px solid var(--panel-border); }
  section:last-of-type { border-bottom: none; }

  /* Opmaak van de titels van de onderdelen. */
  section h2 {
    font-size: 1.6rem;
    margin-bottom: 24px;
  }

  /* Houdt de introductietekst prettig leesbaar. */
  .about p { max-width: 62ch; color: var(--text-dim); }

  /* Zet de vaardigheden naast elkaar en laat ze afbreken op kleine schermen. */
  .skills {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 24px;
  }

  /* Vormgeving van ieder vaardigheidslabel. */
  .skills span {
    font-family: var(--mono);
    font-size: 0.85rem;
    padding: 6px 12px;
    border: 1px solid var(--panel-border);
    border-radius: 4px;
    color: var(--text-dim);
  }

  /* Kaartstijl voor ieder project. */
  .project {
    background: var(--panel);
    border: 1px solid var(--panel-border);
    border-left: 3px solid var(--accent);
    padding: 24px;
    margin-bottom: 18px;
  }

  /* Verwijdert extra ruimte onder de laatste projectkaart. */
  .project:last-child { margin-bottom: 0; }

  /* Plaatst de projecttitel en gebruikte technieken tegenover elkaar. */
  .project-head {
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 8px;
  }

  /* Houdt projecttitels compact binnen de kaarten. */
  .project h3 { font-size: 1.15rem; }

  /* Toont de gebruikte programmeertalen in een monospaced lettertype. */
  .project .stack {
    font-family: var(--mono);
    font-size: 0.78rem;
    color: var(--accent-2);
  }

  /* Stijl van de projectbeschrijving. */
  .project p {
    color: var(--text-dim);
    margin: 0 0 12px;
  }

  /* Maakt de projectlink iets kleiner dan de gewone tekst. */
  .project a { font-size: 0.9rem; }

  /* Beperkt de breedte van de contactintroductie. */
  .contact p { color: var(--text-dim); margin-bottom: 20px; max-width: 50ch; }

  /* Plaatst de contactlinks met ruimte ertussen. */
  .contact-links {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
  }

  /* Vormgeving van de contactknoppen. */
  .contact-links a {
    font-family: var(--mono);
    font-size: 0.95rem;
    color: var(--text);
    border: 1px solid var(--panel-border);
    padding: 10px 16px;
    border-radius: 4px;
  }

  /* Verandert de rand en tekstkleur wanneer een link wordt aangewezen. */
  .contact-links a:hover {
    border-color: var(--accent);
    color: var(--accent);
    text-decoration: none;
  }

  /* Rustige afsluiting met auteursrechtinformatie. */
  footer {
    padding: 32px 0 48px;
    color: var(--text-dim);
    font-size: 0.85rem;
  }

  /* Vermindert beweging voor bezoekers die dit in hun systeem instellen. */
  @media (prefers-reduced-motion: reduce) {
    html { scroll-behavior: auto; }
  }

  /* Past de afstanden aan voor telefoons en smalle vensters. */
  @media (max-width: 600px) {
    header.hero { padding: 64px 0 48px; }
    section { padding: 48px 0; }
  }
</style>
</head>
<body>

<div class="wrap">

  <!-- Introductie met Ruben zijn naam, rol en korte omschrijving. -->
  <header class="hero">
    <div class="kicker">// portfolio</div>
    <h1><?php echo htmlspecialchars($name); ?></h1>
    <div class="role"><?php echo htmlspecialchars($role); ?></div>
    <p class="tagline"><?php echo htmlspecialchars($tagline); ?></p>
  </header>

  <!-- Overzicht van Ruben zijn achtergrond en programmeertalen. -->
  <section class="about">
    <h2>Over mij</h2>
    <p><?php echo htmlspecialchars($about); ?></p>
    <div class="skills">
      <?php foreach ($skills as $skill): ?>
        <!-- Elke vaardigheid wordt veilig als afzonderlijk label weergegeven. -->
        <span><?php echo htmlspecialchars($skill); ?></span>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Reden waarom Ruben deze opleiding volgt. -->
  <section class="motivation">
    <h2>Waarom doe ik deze opleiding?</h2>
    <p><?php echo htmlspecialchars($motivation); ?></p>
  </section>

  <!-- Overzicht van de projecten waaraan Ruben heeft gewerkt. -->
  <section class="projects">
    <h2>Projecten</h2>
    <?php foreach ($projects as $project): ?>
      <!-- Elke projectkaart wordt automatisch opgebouwd uit de projectgegevens. -->
      <div class="project">
        <div class="project-head">
          <h3><?php echo htmlspecialchars($project['title']); ?></h3>
          <span class="stack"><?php echo htmlspecialchars($project['stack']); ?></span>
        </div>
        <p><?php echo htmlspecialchars($project['description']); ?></p>
        <!-- htmlspecialchars voorkomt dat projectgegevens HTML kunnen uitvoeren. -->
        <a href="<?php echo htmlspecialchars($project['link']); ?>">Bekijk project →</a>
      </div>
    <?php endforeach; ?>
  </section>

  <!-- Contactgegevens en links naar externe profielen. -->
  <section class="contact">
    <h2>Contact</h2>
    <p>Ik sta open voor stages en functies als juniorontwikkelaar. Neem gerust contact op.</p>
    <div class="contact-links">
      <!-- De e-mail- en profielgegevens worden uit het configuratieblok gehaald. -->
      <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
      <a href="<?php echo htmlspecialchars($github); ?>" target="_blank" rel="noopener">GitHub</a>
    </div>
  </section>

  <!-- Automatisch bijgewerkt jaartal onderaan de pagina. -->
  <footer>
    &copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($name); ?>
  </footer>

</div>

</body>
</html>