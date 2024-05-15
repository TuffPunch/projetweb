<!DOCTYPE html>
<html>
<head>
    <title>Commander en ligne</title>
    <link rel="stylesheet" href="Commanderenligne.css" />
    <link rel="stylesheet" href="../cssCommun.css" />
</head>
<body>
<?php
  session_start();
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
            <h1 class="font_2 wixui-rich-text__text" style="text-align:center; font-size:60px;">Commander en ligne</h1>
            <h2 style="font-family:playfairdisplay-bold,'playfair display', Tahoma, Geneva, Verdana, sans-serif; text-align: center; font-size: 15px;"> Commandez facilement vos favoris, et savourez l'excellence du café livré directement à votre porte. L'expérience du café parfaite commence ici.</h2>
        </div>
    </header>
    <div class="cadre">
        <p>à emporter, dès que possible (Dans 15 min)</p>
    </div>
    <div class="liste-mouvante">
        <ul>
            <li class="Patisserie">
                <a href="#contenu-choix1">Patisserie</a>
                <div class="contenu-choix" id="contenu-choix1">
                    <div class="sous-choix">
                        <h3>Croissant (nature/chocolat)</h3>
                        <h6>  La version nature est souvent saupoudrée de sucre glace, ajoutant une touche subtilement sucrée à sa saveur beurrée</h6>
                        <h5> 6,00 €</h5>
                    </div>
                    <div class="sous-choix">
                        <h3>Muffin quotidien</h3>
                       <h6> nous mélangeons une pâte légère et moelleuse avec des pépites de chocolat riches et fondantes. </h6>
                        <h5> 6,00 €</h5>
                    </div>
                    <div class="sous-choix">
                        <h3>Gâteau au fromage</h3>
                        <h6> Cette combinaison crée une harmonie de saveurs, avec des notes légèrement sucrées et une pointe de vanille ajoutant une profondeur de goût exquise.</h6>
                        <h5> 6,00 €</h5>
                    </div>
                </div>
            </li> </br>
            <li>
                <a href="#contenu-choix2">Petit-déjeuner toute la journée</a>
                <div class="contenu-choix" id="contenu-choix2">
                    <div class="sous-choix">
                        <h3>Granola et yaourt grec</h3>
                        <h6>Le granola, composé d'un mélange de flocons d'avoine, de noix croquantes, de graines et de doux édulcorants naturels</h6>
                        <h5> 12,00 € </h5>
                    </div>
                    <div class="sous-choix">
                        <h3>Pouding de chia</h3>
                        <h6>Le Pouding de Chia est souvent agrémenté de fruits frais, de baies, de noix ou de graines pour ajouter une dimension croquante et fraîche à chaque cuillère.</h6>
                        <h5> 12,00 € </h5>
                    </div>
                    <div class="sous-choix">
                        <h3>Bol d'açai, superaliment</h3>
                        <h6>La pulpe d'açaï est souvent mélangée à d'autres fruits, tels que des bananes, des baies, ou des mangues, pour ajouter une variété de saveurs et de textures au bol.</h6>
                        <h5> 12,00 € </h5>
                    </div>
                    <div class="sous-choix">
                        <h3>Toast à l'avocat</h3>
                        <h6>le Toast à l'Avocat est bien plus qu'une simple tranche de pain garnie.</h6>
                        <h5> 12,00 € </h5>
                    </div>
                    <div class="sous-choix">
                        <h3>Œufs et bacon sur pain de seigle</h3>
                        <h6>Les notes fumées et salées du bacon viennent compléter le plat en ajoutant une dimension de saveur intensément délicieuse.</h6>
                        <h5> 12,00 € </h5>
                    </div>
                    <div class="sous-choix">
                        <h3>Brioche aux épinards et au saumon</h3>
                        <h6>Ce mariage de saveurs est souvent complété par une touche de crème fraîche citronnée, de ciboulette ou d'aneth, ajoutant une fraîcheur vive qui équilibre parfaitement les éléments plus riches.</h6>
                        <h5> 12,00 € </h5>
                    </div>
                    <div class="sous-choix">
                        <h3>Bagel au saumon fumé </h3>
                        <h6> un bagel tendre, à la fois moelleux à l'intérieur et légèrement croustillant à l'extérieur.</h6>
                        <h5> 12,00 € </h5>
                    </div>
                    <div class="sous-choix">
                        <h3>Shakshuka verte</h3>
                        <h6> La Shakshuka Verte est souvent enrichie de haricots verts ou d'asperges croquantes, ajoutant une texture tendre et des notes végétales à l'ensemble. </h6>
                        <h5> 12,00 € </h5>
                    </div>
                </div>
            </li>
        </ul>
    </div>

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
                    <h1 class="c1"><a href="https://www.instagram.com/" target="_blank">Instagram</a></h1>
                </th>
            </tr>
            <tr>
                <td>
                    Restez au courant de toutes les <br> nouveautés du yummy-coffe 
                </td>
                <td>
                01 23 45 67 89 <br> 
                <a href="mailto:contact@yummy-coffe.tn">contact@yummy-coffe.tn </a>
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
    <p>© 2035 par yummy-coffe. Propulsé et sécurisé </p>
    </section>
</body>
</html>
