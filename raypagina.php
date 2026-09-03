<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Portfolio van Ray, Software Development-student bij Firda.">
  <title>Ray | Software Development</title>
  <link rel="stylesheet" href="Raypagina.css">
</head>
<body id="top">
  <header class="site-header">
    <a class="brand" href="#top">Ray</a>
    <nav aria-label="Hoofdnavigatie">
      <a href="#over-mij" data-nl="Over mij" data-en="About me">Over mij</a>
      <a href="#vaardigheden" data-nl="Vaardigheden" data-en="Skills">Vaardigheden</a>
      <a href="#talen" data-nl="Talen" data-en="Languages">Talen</a>
      <a href="#contact">Contact</a>
    </nav>
    <button id="language" type="button" aria-label="Schakel naar Engels">EN</button>
  </header>

  <main>
    <section class="hero">
      <p class="label" data-nl="HALLO, IK BEN" data-en="HELLO, I AM">HALLO, IK BEN</p>
      <h1>Ray</h1>
      <h2 data-nl="Software Development-student bij Firda" data-en="Software Development student at Firda">Software Development-student bij Firda</h2>
      <p data-nl="Ik bouw websites met HTML, CSS, PHP en MySQL." data-en="I build websites with HTML, CSS, PHP and MySQL.">Ik bouw websites met HTML, CSS, PHP en MySQL.</p>
      <a class="button" href="#vaardigheden" data-nl="Bekijk mijn vaardigheden" data-en="View my skills">Bekijk mijn vaardigheden</a>
    </section>

    <section class="soft" id="over-mij">
      <div class="container narrow">
        <p class="label" data-nl="OVER MIJ" data-en="ABOUT ME">OVER MIJ</p>
        <h2 data-nl="Ik zit op Firda en doe de opleiding Software Development." data-en="I study Software Development at Firda.">Ik zit op Firda en doe de opleiding Software Development.</h2>
        <ul>
          <li data-nl="Ik werk graag met HTML, CSS, PHP en MySQL." data-en="I enjoy working with HTML, CSS, PHP and MySQL.">Ik werk graag met HTML, CSS, PHP en MySQL.</li>
          <li data-nl="Ik heb een beetje ervaring met Python." data-en="I have some experience with Python.">Ik heb een beetje ervaring met Python.</li>
          <li data-nl="Ik ben goed in problemen oplossen en nieuwe dingen uitproberen." data-en="I am good at solving problems and trying new things.">Ik ben goed in problemen oplossen en nieuwe dingen uitproberen.</li>
        </ul>
      </div>
    </section>

    <section id="vaardigheden">
      <div class="container">
        <p class="label" data-nl="VAARDIGHEDEN" data-en="SKILLS">VAARDIGHEDEN</p>
        <h2 data-nl="Mijn programmeertalen en sterke punten" data-en="My programming languages and strengths">Mijn programmeertalen en sterke punten</h2>
        <p class="intro" data-nl="Een overzicht van wat ik kan en waar ik goed in ben." data-en="An overview of my skills and strengths.">Een overzicht van wat ik kan en waar ik goed in ben.</p>

        <div class="skill-grid">
          <article class="card">
            <h3 data-nl="Programmeertalen" data-en="Programming languages">Programmeertalen</h3>
            <div class="programs">
              <div><b>H</b><span>HTML <small data-nl="Goed" data-en="Good">Goed</small></span></div>
              <div><b>C</b><span>CSS <small data-nl="Goed" data-en="Good">Goed</small></span></div>
              <div><b>P</b><span>PHP <small data-nl="Goed" data-en="Good">Goed</small></span></div>
              <div><b>M</b><span>MySQL <small data-nl="Goed" data-en="Good">Goed</small></span></div>
              <div><b>P</b><span>Python <small data-nl="Beetje ervaring" data-en="Some experience">Beetje ervaring</small></span></div>
            </div>
          </article>

          <article class="card dark">
            <h3 data-nl="Sterke punten" data-en="Strengths">Sterke punten</h3>
            <div class="tags">
              <span data-nl="Problemen oplossen" data-en="Problem solving">Problemen oplossen</span>
              <span data-nl="Nieuwe dingen uitproberen" data-en="Trying new things">Nieuwe dingen uitproberen</span>
              <span data-nl="Websites bouwen" data-en="Building websites">Websites bouwen</span>
              <span data-nl="Interactief maken" data-en="Creating interactions">Interactief maken</span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="soft" id="talen">
      <div class="container">
        <p class="label" data-nl="TALEN" data-en="LANGUAGES">TALEN</p>
        <h2 data-nl="Talen die ik spreek" data-en="Languages I speak">Talen die ik spreek</h2>
        <div class="language-list">
          <span data-nl="Nederlands" data-en="Dutch">Nederlands</span>
          <span data-nl="Engels" data-en="English">Engels</span>
          <span data-nl="Spaans" data-en="Spanish">Spaans</span>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="contact-box">
        <p class="label">CONTACT</p>
        <h2 data-nl="Laten we iets bouwen." data-en="Let's build something.">Laten we iets bouwen.</h2>
        <p data-nl="Heb je een vraag of wil je samenwerken? Stuur gerust een bericht." data-en="Have a question or want to collaborate? Feel free to send a message.">Heb je een vraag of wil je samenwerken? Stuur gerust een bericht.</p>
        <div class="contact-grid">
          <a href="mailto:519613@student.firda.nl"><small data-nl="SCHOOL E-MAIL" data-en="SCHOOL EMAIL">SCHOOL E-MAIL</small><strong>519613@student.firda.nl</strong></a>
          <a href="tel:+31641175191"><small data-nl="TELEFOON" data-en="PHONE">TELEFOON</small><strong>+31 6 41175191</strong></a>
          <a href="https://github.com/R605-beep" target="_blank" rel="noreferrer"><small>GITHUB</small><strong>github.com/R605-beep</strong></a>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>© <span id="year"></span> Ray · <span data-nl="Gemaakt voor mijn presentatie." data-en="Made for my presentation.">Gemaakt voor mijn presentatie.</span></p>
    <a href="#top" data-nl="Naar boven" data-en="Back to top">Naar boven</a>
  </footer>

  <script>
    const button = document.querySelector("#language");
    document.querySelector("#year").textContent = new Date().getFullYear();

    button.addEventListener("click", () => {
      const language = document.documentElement.lang === "nl" ? "en" : "nl";
      document.documentElement.lang = language;
      document.querySelectorAll("[data-nl]").forEach(element => {
        element.textContent = element.dataset[language];
      });
      button.textContent = language === "nl" ? "EN" : "NL";
      button.setAttribute("aria-label", language === "nl" ? "Schakel naar Engels" : "Switch to Dutch");
    });
  </script>
</body>
</html>
