<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../cssCommun.css" />
</head>
<body>
<?php
session_start();
if (!(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true)) {
    header("Location: /projetweb/connexion/connexion.php");
}
?>
<header>
    <nav>
        <ul>
            <img src="../logo.png" width="70" />
            <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true): ?>
                <li id="admin"><a href="../Connexion/logout.php">Logout</a></li>
                <li id="admin"><a href="../adminpanel/adminpanel.php">Admin Panel</a></li>
            <?php else: ?>
                <li id="connexion"><a href="../Connexion/connexion.php"><img style="vertical-align: middle;" src="../login-icon.png" width="26px"/> Connexion</a></li>

            <?php endif; ?><li><a href="../contactez-nous/contacternous.php">Nous Contactez</a></li>
            <li><a href="../commanderenligne/Commanderenligne.php">Commander En Ligne</a></li>
            <li><a href="../menu/menu.php">Menu</a></li>
            <li><a href="../notre_identite/notreidentité.php">Notre Identité</a></li>
            <li><a href="../acceuil/acceuil.php">Accueil</a></li>
        </ul>
    </nav>
    <div id="banniere">
        <h1 class="font_2 wixui-rich-text__text" style="text-align:center; font-size:60px;">Admin Panel</h1>
        <h2 style="font-family:playfairdisplay-bold,'playfair display', Tahoma, Geneva, Verdana, sans-serif; text-align: center; font-size: 15px;">
            <a style="padding: 20px;border: solid black 2px; text-decoration: none; color: black" href="./adminpanel.menu.php">Gérer Menu</a>
        </h2>
    </div>

</header>
</body>
</html>