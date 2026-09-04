
<?php
// Controleert of de variabele $page bestaat
if (isset($page)) {
} else {
    // Maakt $page leeg als deze nog niet bestaat
    $page = "";
}
?>

<!-- Maakt de header van de website -->
<header>

    <!-- Bevat het navigatiemenu -->
    <nav>

        <div class="nav-left">

            <!-- Toont het logo van Technical Works -->
            <div class="brand">
                <img src="image/logo.png" alt="Technical Works logo">
            </div>

            <!-- Bevat de links naar de verschillende pagina's -->
            <div class="navlinks">

                <!-- Voegt de class 'current' toe als Home de huidige pagina is -->
                <a href="index.php" <?php if ($page == "home")
                    echo "class=\"current\""; ?>>Home</a>

                <!-- Voegt de class 'current' toe als Over ons de huidige pagina is -->
                <a href="overons.php" <?php if ($page == "over ons")
                    echo "class=\"current\""; ?>>Over ons</a>

                <!-- Voegt de class 'current' toe als Contact de huidige pagina is -->
                <a href="contact.php" <?php if ($page == "contact")
                    echo "class=\"current\""; ?>>Contact</a>

            </div>
        </div>

        <!-- Knop die naar de contactpagina gaat -->
        <a href="contact.php" class="nav-cta">Neem contact op</a>

    </nav>
</header>

