<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact — Technical Works Leeuwarden</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet">
  <link href="./CSS/contact.css" rel="stylesheet">
</head>

<body>

  <?php
  $page = "contact";
  include 'handeling/header.php';
  ?>

  <main>
    <div class="grid-bg"></div>
    <div class="wrap" style="position:relative; z-index:2;">
      <div class="page-head bracket">
        <span class="tag mono" style="text-align:center; display:block;">// CONTACT</span>
        <h1>Contact</h1>
      </div>
      <section class="contact-grid" aria-label="Contactgegevens">
        <article class="contact-card bracket">
          <span class="contact-label mono">01 / CONTACTPERSOON</span>
          <h2>Wesley Rinsma</h2>
          <p>Scrummaster - Technical Works Leeuwarden</p>
          <div class="contact-details">
            <span class="contact-label">E-mail</span>
            <a href="mailto:341884@student.firda.nl">341884@student.firda.nl</a>
          </div>
        </article>
        <article class="contact-card bracket">
          <span class="contact-label mono">02 / BEDRIJF</span>
          <h2>ITIG</h2>
          <p>Onderdeel van ITIG</p>
          <div class="contact-details">
            <span class="contact-label">E-mail</span>
            <a href="mailto:info@itig.nl">info@itig.nl</a>
            <span class="contact-label">Telefoon</span>
            <a href="tel:+31581234567">058 - 123 4567</a>
          </div>
        </article>
      </section>
    </div>
  </main>

  <!-- ===== FOOTER ===== -->



  <?php include 'handeling/footer.php'; ?>



</body>

</html>