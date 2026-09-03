<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Over ons — Technical Works Leeuwarden</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet">
  <link href="./CSS/overons.css" rel="stylesheet">
</head>

<body>

  <?php
  $page = "over ons";
  include 'handeling/header.php';
  ?>

  <main>
    <div class="grid-bg"></div>
    <div class="wrap" style="position:relative; z-index:2;">
      <div class="page-head bracket">
        <span class="tag mono" style="text-align:center; display:block;">// OVER ONS</span>
        <h1>Over ons</h1>
      </div>
      <p class="team-intro">Vier mensen, een gedeelde liefde voor technisch werk dat helder, snel en betrouwbaar
        aanvoelt.</p>
      <div class="team-grid">
        <article class="person-card bracket">
          <span class="idx mono">01 / TEAM</span>
          <h2>Ruben</h2>
          <span class="role">github master</span>
          <p>Ruben bouwt de technische basis en zorgt dat alles soepel blijft werken.</p>
          <a class="person-link" href="rubenportfolio.php">portfolio &rarr;</a>
        </article>
        <article class="person-card bracket">
          <span class="idx mono">02 / TEAM</span>
          <h2>Gerben </h2>
          <span class="role">webdeveloper</span>
          <p>Gerben is de webdeveloper van het team en zorgt voor een goede gebruikerservaring.</p>
          <a class="person-link" href="gerbenportfolio.php">portfolio &rarr;</a>
        </article>
        <article class="person-card bracket">
          <span class="idx mono">03 / TEAM</span>
          <h2>Wesley</h2>
          <span class="role">scrum master</span>
          <p>Coachen van het team Helpen van teamleden om zelfstandig te werken en goed samen te werken.</p>
          <a class="person-link" href="wesleyportfolio.php">portfolio &rarr;</a>
        </article>
        <article class="person-card bracket">
          <span class="idx mono">04 / TEAM</span>
          <h2>Gilano</h2>
          <span class="role">webdeveloper</span>
          <p>Gilano kan goed fouten spotten in de code</p>
          <a class="person-link" href="gilano_nash.php">portfolio &rarr;</a>
        </article>
      </div>
    </div>
  </main>


  <!-- // ===== FOOTER ===== -->


  <?php include 'handeling/footer.php'; ?>


</body>

</html>