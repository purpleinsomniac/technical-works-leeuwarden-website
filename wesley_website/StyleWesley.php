<?php header('Content-Type: text/css; charset=UTF-8'); ?>
/* Zorgt dat padding en borders meetellen in de totale breedte van elementen */
* {
  box-sizing: border-box;
}

/* Maakt klikken op navigatielinks vloeiend scrollend */
html {
  scroll-behavior: smooth;
}

/* Algemene stijl voor de hele pagina */
body {
  margin: 0;
  font-family: Inter, Arial, sans-serif;
  color: #142033;
  background: linear-gradient(180deg, #eef5fc 0, #f7f9fc 360px);
}

/* Verwijdert standaard onderstreping bij links */
a {
  color: inherit;
  text-decoration: none;
}

/* Bovenbalk die blijft staan tijdens het scrollen */
header {
  position: sticky;
  top: 0;
  z-index: 10;
  background: #071a33;
  border-bottom: 1px solid #12365f;
  box-shadow: 0 8px 24px rgba(7, 26, 51, .05);
}

/* Geeft de inhoud een vaste maximale breedte en centreert deze */
nav,
main {
  width: min(1100px, 92%);
  margin: auto;
}

/* Zet de navigatie netjes rechts in de header */
nav {
  min-height: 86px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 24px;
}

/* Stijl voor de navigatielinks */
nav div {
  display: flex;
  gap: 20px;
  color: #dcecff;
  font-size: 14px;
  font-weight: 600;
}

/* Verandert de kleur van links als je er met de muis overheen gaat */
nav a:hover {
  color: #66b7ff;
}

/* Compacte taalkeuze in de navigatie */
.language-switcher {
  align-items: center;
  gap: 7px;
  padding: 7px 10px;
  border: 1px solid #315277;
  border-radius: 8px;
  color: #8da9c7;
}

.language-switcher a {
  color: #b9cce0;
}

.language-switcher a.active {
  color: #fff;
  font-weight: 800;
}

/* Eerste grote introblok met tekst links en foto rechts */
.hero {
  min-height: calc(100vh - 86px);
  display: grid;
  grid-template-columns: 1.05fr .95fr;
  align-items: center;
  gap: 58px;
  padding: 62px 48px;
  background: linear-gradient(135deg, #e8f3ff, #ffffff 62%);
  border: 1px solid #d3e4f5;
  border-left: 6px solid #071a33;
  border-radius: 8px;
  margin-top: 34px;
}

/* Kleine blauwe tekst boven titels */
.tag {
  margin: 0 0 12px;
  color: #0a64bd;
  font-size: 13px;
  font-weight: 800;
  text-transform: uppercase;
}

/* Algemene stijl voor grote koppen */
h1,
h2 {
  margin: 0;
  color: #071a33;
  line-height: 1.05;
}

/* Grote hoofdtitel in de hero */
h1 {
  max-width: 620px;
  font-size: clamp(46px, 7vw, 82px);
}

/* Titels van de andere onderdelen */
h2 {
  font-size: clamp(30px, 4vw, 44px);
}

/* Geeft ruimte tussen sectietitels en de kaarten eronder */
section h2 {
  margin-bottom: 28px;
}

/* Algemene tekststijl voor paragrafen */
p {
  color: #52657a;
  font-size: 18px;
  line-height: 1.75;
}

/* Houdt de introductietekst in de hero mooi smal */
.hero p:not(.tag) {
  max-width: 620px;
}

/* Stijl voor de blauwe knop */
.btn {
  display: inline-block;
  margin-top: 18px;
  padding: 14px 22px;
  background: #0b5cab;
  border-radius: 8px;
  color: white;
  font-weight: 700;
}

/* Maakt de knop donkerder bij hover */
.btn:hover {
  background: #071a33;
}

/* Zet de socialmediaknoppen onder de portfolioknop */
.social-links {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-top: 12px;
}

/* Geeft de socialmediaknoppen dezelfde stijl en lijnt de logo's uit */
.social-links .btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  margin-top: 0;
  padding: 8px 12px;
  font-size: 14px;
  line-height: 1;
}

/* Formaat en kleur van de GitHub- en LinkedIn-logo's */
.social-links .btn svg {
  display: block;
  width: 13px !important;
  min-width: 13px;
  max-width: 13px;
  height: 13px !important;
  min-height: 13px;
  max-height: 13px;
  flex: 0 0 13px;
  fill: currentColor;
}

/* Stijl voor de profielfoto */
.photo {
  width: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  object-position: center top;
  border: 8px solid white;
  border-radius: 8px;
  outline: 1px solid #c8dced;
  box-shadow: 0 22px 60px rgba(7, 26, 51, .18);
}

/* Ruimte tussen alle secties */
section {
  padding: 82px 0;
  border-top: 1px solid #dbe4ef;
}

/* Maakt sommige tekstsecties iets smaller voor betere leesbaarheid */
#over,
#projecten {
  max-width: 850px;
}

/* Maakt een raster van drie kolommen voor skills en projecten */
.grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

/* Stijl voor de witte kaarten */
article {
  padding: 28px;
  background: white;
  border: 1px solid #dbe4ef;
  border-top: 4px solid #0b5cab;
  border-radius: 8px;
  box-shadow: 0 12px 32px rgba(7, 26, 51, .06);
}

/* Titels in de kaarten */
article b {
  display: block;
  margin-bottom: 10px;
  color: #071a33;
  font-size: 20px;
}

/* Tekst in de kaarten */
article p {
  margin: 0;
  font-size: 16px;
}

/* Grote blauwe projectnummers */
article span {
  display: block;
  margin-bottom: 16px;
  color: #0b5cab;
  font-size: 34px;
  font-weight: 800;
}

/* Donkerblauw blok voor mijn rol binnen het team */
#rol {
  padding: 48px;
  margin-bottom: 82px;
  background: linear-gradient(135deg, #071a33, #0b5cab);
  border: 1px solid #dbe4ef;
  border-radius: 8px;
  box-shadow: 0 18px 42px rgba(7, 26, 51, .16);
}

/* Maakt tekst in het donkere rol-blok wit */
#rol h2,
#rol p {
  color: white;
}

/* Lichtblauwe tag in het donkere rol-blok */
#rol .tag {
  color: #b9dcff;
}

/* Donkerblauwe afsluiting onderaan */
footer {
  padding: 28px;
  background: #071a33;
  color: white;
  text-align: center;
}

/* Past de layout aan voor telefoons en kleine schermen */
@media (max-width: 760px) {
  nav,
  nav div,
  .hero {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  nav {
    padding: 16px 0;
  }

  nav div {
    flex-direction: row;
    flex-wrap: wrap;
    gap: 14px;
  }

  nav .language-switcher {
    flex-direction: row;
    width: auto;
  }

  .hero {
    min-height: 0;
    padding: 34px 24px;
    margin-top: 22px;
  }

  .grid {
    grid-template-columns: 1fr;
  }

  #rol {
    padding: 30px;
  }

  p {
    font-size: 16px;
  }
}
