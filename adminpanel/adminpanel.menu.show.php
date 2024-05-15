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

$errorMessage = "";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get ID
    $id = trim(htmlspecialchars($_GET['id']));

    // Validate username and password (replace with your validation logic)
    if (empty($id)) {
        $errorMessage = "Please pass a valid id";
    }
    // Database connection details (replace with your actual credentials)
    $host = "localhost";
    $dbname = "coffee";
    $db_username = "root";
    $db_password = "";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare a SQL statement to prevent SQL injection (use prepared statements)
        $sql = "SELECT * FROM menu WHERE menuId = :id";
        // Prepare and execute the query
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        // Fetch all results as an associative array
        $menu = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $sql = "SELECT * FROM menuitem WHERE menuId = :id";

        // Prepare and execute the query
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        // Fetch all results as an associative array
        $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        $errorMessage = "Error: " . $e->getMessage();
    }

    $conn = null;  // Close the database connection
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
        <?php
        if (!empty($menu)) {
            $menuItem = $menu[0];
            $staticText = "Admin Panel - Gérer Menu: ";
            echo "<h1 class=\"font_2 wixui-rich-text__text\" style=\"text-align:center; font-size:60px;\">" . $staticText . $menuItem['name'] . "</h1>";

        } else {
            echo "Error: Menu data not found";
        }
        ?>
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
<script>
    const menuList = document.getElementById('menu-list');
    const menuId = <?php echo $id ?>;
    (function(){
        const data = <?php echo json_encode($menuItems); ?>;
        data.forEach(menuItem => {
            const menuElement = document.createElement("tr");
            const menuElementName = document.createElement('td');
            menuElementName.innerHTML = menuItem.name;
            menuElement.appendChild(menuElementName);
            const menuElementActionsTd = document.createElement("td");
            const menuElementActions = document.createElement("div");
            menuElementActions.style.display = 'flex';
            menuElementActions.style.justifyContent = "space-evenly";
            menuElementActions.style.width = "100%"
            const menuElementDeleteAction = document.createElement("a");
            menuElementDeleteAction.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" id="IconChangeColor" height="22" width="22"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" id="mainIconPathAttribute" fill="#000000"></path></svg>
             Supprimer`
            menuElementDeleteAction.setAttribute("href", `delete_menuitem.php?id=${menuItem.itemId}&menuId=${menuId}`)
            menuElementDeleteAction.style.color = "black";
            menuElementDeleteAction.style.textDecoration = "none";
            menuElementActions.appendChild(menuElementDeleteAction);

            const menuElementShowAction = document.createElement("a");
            menuElementShowAction.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" id="mainIconPathAttribute"></path> <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" id="mainIconPathAttribute"></path> </svg>
            Voir`
            menuElementShowAction.setAttribute("href", `adminpanel.menu.show.php?id=${menuItem.itemId}&menuId=${menuId}`)
            menuElementShowAction.style.color = "black";
            menuElementShowAction.style.textDecoration = "none";
            menuElementActions.appendChild(menuElementShowAction);


            menuElementActionsTd.appendChild(menuElementActions);
            menuElement.appendChild(menuElementActionsTd);
            menuList.appendChild(menuElement);

        });
    })()
</script>
</body>
</html>