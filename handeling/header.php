<?php if (isset($page)) {
} else {
    $page = "";
} ?>

<header>
    <nav>
        <div class="nav-left">
            <div class="brand"><img src="image/logo.png" alt="Technical Works logo"></div>
            <div class="navlinks">
                <a href="index.php" <?php if ($page == "home")
                    echo "class=\"current\""; ?>>Home</a>
                <a href="overons.php" <?php if ($page == "over ons")
                    echo "class=\"current\""; ?>>Over ons</a>
                <a href="contact.php" <?php if ($page == "contact")
                    echo "class=\"current\""; ?>>Contact</a>
            </div>
        </div>
        <a href="contact.php" class="nav-cta">Neem contact op</a>
    </nav>
</header>