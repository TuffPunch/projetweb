<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../cssCommun.css" />
    <link rel="stylesheet" href="./style.css" />
    <style>
        td, th{
            border: #333333 solid 2px;
        }
    </style>
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
            <li><a href="./Commanderenligne.php">Commander En Ligne</a></li>
            <li><a href="../menu/menu.php">Menu</a></li>
            <li><a href="../notre_identite/notreidentité.php">Notre Identité</a></li>
            <li><a href="../acceuil/acceuil.php">Accueil</a></li>
        </ul>
    </nav>
    <div id="banniere">
        <h1 class="font_2 wixui-rich-text__text" style="text-align:center; font-size:60px;">Admin Panel - Gérer Ton Menu</h1>
    </div>
    <section style="display: flex; justify-content: space-between" class="contenu-1">
        <div style="width: 50%; display: flex; flex-direction: row; justify-content: center">

            <table id="menu-list" style="border-collapse: collapse; border: #333333 solid 2px; width: 80%">
                <title>Menus</title>

                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
                </thead>
            </table>
        </div>
        <div style="width: 50%; text-align: center; border: black solid 1px">
            <div id="container">
                <form id="form" method="post" action="add_menu.php">
                    <h1>Ajouter un Menu</h1>
                    <br>
                    <label><b>Nom</b></label>
                    <input type="text" placeholder="Entrer le nom du menu" name="name" id="username" required>
                    <br> <br>

                    <input type="submit" id='submit' value='Ajouter' >

                </form>
            </div>

        </div>
    </section>

</header>
<script src="script.menu.js" ></script>
</body>
</html>