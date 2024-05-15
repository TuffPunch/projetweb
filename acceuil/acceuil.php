<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="acceuil.css" />
        <link rel="stylesheet" href="../cssCommun.css" />
        <Title>Yummy-coffee</Title>
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

                <?php endif; ?>               
                    <li><a href="../contactez-nous/contacternous.php">Nous Contactez</a></li>
                    <li><a href="../commanderenligne/Commanderenligne.php">Commander En Ligne</a></li>
                    <li><a href="../menu/menu.php">Menu</a></li>
                    <li><a href="../notre_identite/notreidentité.php">Notre Identité</a></li>
                    <li><a href="./acceuil.php">Accueil</a></li>
                    
                </ul>
          </nav>
        </header>
        <section id="banniere">
            <div id="slogan2">
                <table id="tabhaut1">
                    <tr><td>
                        <h1>Yummy coffee</h1>
                        <h2>Votre lieu préféré pour des repas délicieux et du café</h2>
                    </td></tr>
                </table>
                <br>
                <table id="tabhaut2">
                    <tr><td colspan="2"> </td></tr>
                    <tr>
                       <td><span><a href="../commanderenligne/Commanderenligne.php" style="text-decoration: none;color: white;"> Commander</a> </span></td> 
                       <td><span><a href="../menu/menu.php"> Notre Menu </a> </span></td> 
                    </tr>
                </table>
            </div>
        </section>
    </section>

    <section id="contenu-3">
            <p>
                Brunch du week-end     |     Samedi 9 h - 14 h
            </p>
    </section>

        <table>
            <tr>
            <td>
            <section class="contenu-1">
            <img src="breakfast.jpg" alt="idée Petit-déjeuner healthy">
            <div>
                <h1>
                    Mangez.
                </h1>
                <p>
                    Petit-déjeuner, déjeuner et pâtisseries artisanales <br>
                   Checker ce que notre chef offre pour vous en cliquant sur le button ci-dessous.
                </p>
                <span><a href="../menu/menu.php" style="text-decoration: none; color: black;">voir plus</a></span>
            </div>
        </section>
    </td>
    </tr>

        <tr><td>
            <section id="contenu-2">
                <img src="nescafe.jpg" alt="votre dose de nescafe">
                   <div>
                    <h1>
                      Buvez.
                    </h1>
                    <p>
                      La tasse la plus fraîche de la ville <br>
                     Checker ce que notre chef offre pour vous en cliquant sur le button ci-dessous.
                    </p>
                    <span><a href="../menu/menu.php" style="text-decoration: none;color: black;">voir plus</a></span>
                  </div>
            </section>
        </td></tr>

        <tr><td>
    <section class="contenu-1">
    <img src="amis.jpg" alt="passez les bons moments dans le bon endroit">
    <div>
        <h1>
            Savourez.
        </h1>
        <p>
            Faites comme chez vous <br>
           Checker ce que notre chef offre pour vous en cliquant sur le button ci-dessous.
        </p>
        <span>Visitez-nous</span>
    </div>
    </section>
</td></tr>

<table><tr><td>
    <section id="horaire">
        <div id="slogan">
            <h1>Prenez une bouchée</h1>
            <br><br>
            <table id="adrhor">
                <tr>
                    <th>Adresse</th>
                    <th>Heures d'ouverture</th>
                </tr>
                <tr>
                <td>
                    <p>1 rue des Restos</p>
                    <p>75020 Tunis, Tunisie</p>
                </td>
                <td>
                    <p>Lun. - Ven. : 9 h - 18 h <br>
                       ​​Samedi : 10 h - 14 h <br>
                       Dimanche : Fermé</p>
                </td>
                </tr>
            </table>
        </div>
        
    </section>
</td></tr>
</table>

<table>
<td><tr>
    <section id="photos">
        <img src="cafe.jpg" alt="">
        <img src="femme.jpg" alt="Photo 2">
        <img src="salade.jpg" alt="Photo 3">
        <img src="vue.webp" alt="Photo 4">
        <img src="dog.jpg" alt="Photo 5">
    </section>
</tr></td>
</table>


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


