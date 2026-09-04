
<?php
// Haalt automatisch het huidige jaar op
$year = date('Y');

// Maakt de copyrighttekst met het huidige jaar
$copyright = "© {$year} Technical Works Leeuwarden";

// Slaat de bedrijfsnaam op
$brand = "TECHNICAL WORKS — LEEUWARDEN";
?>

<!-- Maakt de footer onderaan de pagina -->
<footer>
    <div class="wrap">

        <!-- Toont de copyrighttekst veilig op de pagina -->
        <span><?php echo htmlspecialchars($copyright); ?></span>

        <!-- Toont de bedrijfsnaam veilig op de pagina -->
        <span class="mono"><?php echo htmlspecialchars($brand); ?></span>
        
    </div>
</footer>

