<!DOCTYPE html>
<html lang="en">
<head>
        <title>Yummy-Coffee</title>
        <link rel="stylesheet" href="cssMenu.css"/>
        <link rel="stylesheet" href="../cssCommun.css" />
        <meta charset="UTF-8">
    </head>
<body>

  <?php
  session_start();
  // Database connection details (replace with your actual credentials)
  $host = "localhost";
  $dbname = "coffee";
  $username = "root";
  $password = "";
  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to select all menus
    $sql = "SELECT * FROM menu";

    // Prepare and execute the query
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Fetch all results as an associative array
    $menus = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Query to select all menu items
    $sql = "SELECT * FROM menuitem";

    // Prepare and execute the query
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Fetch all results as an associative array
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  $conn = null; // Close the database connection
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

                <?php endif; ?>
                    
                    <li><a href="../contactez-nous/contacternous.php">Nous Contactez</a></li>

                    <li><a href="./menu.php">Menu</a></li>
                    <li><a href="../notre_identite/notreidentité.php">Notre Identité</a></li>
                    <li><a href="../acceuil/acceuil.php">Accueil</a></li>
                    
                </ul>
          </nav>
        </header>
        <section id="banniere">
            <div id="slogan">
                <h1>Notre Menu</h1>
                <p>C'est capital un bon repas et un endroit convivial pour le manger.</p>
                    <p>Passez déguster des aliments frais locaux, servis avec un sourire chaleureux.</p>
            </div>
        </section>

  <section id="menu">
    <script>
      const menuList = document.getElementById('menu');

      function createMenuElement(menu) {
        const menuElement = document.createElement("section");
        menuElement.setAttribute("class", "contenu-1");

        const menuTitleElement = document.createElement("h3");
        menuTitleElement.innerHTML = menu.name;
        menuElement.appendChild(menuTitleElement);

        menuElement.appendChild(document.createElement("hr"));

        const menuItemsListElement = document.createElement("ul");
        return { menuElement, menuItemsListElement };
      }

      function createMenuItemElement(item) {
        const menuItemElement = document.createElement("li");
        const menuItemTitle = document.createElement("span");
        menuItemTitle.setAttribute("class", "c2");
        menuItemTitle.innerHTML = item.name;
        menuItemElement.appendChild(menuItemTitle);
        menuItemElement.appendChild(document.createElement("br"));
        menuItemElement.append(item.description);
        return menuItemElement;
      }

      (function() {
        data = <?php echo json_encode($menus); ?>;
        data.forEach(menu => {
          const { menuElement, menuItemsListElement } = createMenuElement(menu);
          const menuItems = <?php echo json_encode($menuItems); ?>.filter(item => item.menuId === menu.menuId);
          menuItems.forEach(item => menuItemsListElement.appendChild(createMenuItemElement(item)));
          menuElement.appendChild(menuItemsListElement);
          menuList.appendChild(menuElement);
        });
      })();
    </script>

    </section>

    <footer>
            <table>
                <tr>
                <th>
                  Newsletter  
                </th>
                     <th>
                        Parlez-nous
                    </th>
                    <th>
                        <h1 class="c1"><a href="https://www.Instagram.com/" target="_blank">Instagram</a></h1>
                    </th>
                </tr>
                <tr>
                    <td>
                        Restez au courant de toutes les <br> nouveautés du cafe-resto 
                    </td>
                    <td>
                    01 23 45 67 89 <br> 
                    <a href= "mailto:contact@cafe-resto.tn">contact@cafe-resto.tn </a>
                    </td>
                    <td>
                        <h1 class="c1"><a href="https://www.Facebook.com/" target="_blank">Facebook</a></h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form action="#">
                            <label for="email">E-mail*
                            </label><br>
                            <input type="email" id="email" required>
                            <input type="submit" id="rejoindre" value="Rejoindre" />
                        </form>
                    </td>
                    <td>
                        1 rue des Restos
                       <br>
                        75020 Tunis, Tunisie
                    </td>
                    <td>
                        <h1 class="c1"><a href="https://www.Twitter.com/" target="_blank">Twitter</a></h1>
                    </td>
                </tr>

            </table>
  
    </footer>
    <section id="contenu-4">
        <ul>
           <li><a href="#"> termes et conditions</a></li>
           <li><a href="#"> cookies</a></li>
           <li><a href="#">légales</a></li>
           <li><a href="#">confidentialité</a></li>
        </ul>
        <p>© 2035 par Yummy-Coffee . Propulsé et sécurisé </p>
    </section>

</body>
</html>
