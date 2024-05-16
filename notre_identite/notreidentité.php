<!DOCTYPE html>
<html>
    <head>
        <Title>Yummy-Coffee</Title>
        <link rel="stylesheet" href="notreidentite.css" />
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

                <li><a href="../menu/menu.php">Menu</a></li>
                <li><a href="./notreidentité.php">Notre Identité</a></li>
                <li><a href="../acceuil/acceuil.php">Accueil</a></li>
                
                </ul>
          </nav>
        </header>
        <section id="banniere">
            <div id="slogan">
                <h1>Notre Identité</h1>
                <p>C'est capital un bon repas et un endroit convivial pour le manger.</p>

                    <p>Passez déguster des aliments frais locaux, servis avec un sourire chaleureux.</p>
            </div>
            
        </section>
        <section id="contenu-1">
            <img src="images/c837a6_45216043ba6541838c690ad89cdeb432~mv2.jpg" alt="">
            <div>
                <h1>
                    Le meilleur resto dans le quartier
                </h1>

                <p>
                    Bienvenue chez  yummy-coffe ! Notre établissement est un véritable hymne 
                    à la gastronomie et à la convivialité. Chaque plat que nous 
                    servons est une déclaration d'amour à la qualité 
                    et à la créativité culinaires. 
                    Que ce soit pour un café matinal revigorant,
                     un déjeuner raffiné ou une soirée décontractée entre amis, 
                     notre café-resto vous offre une expérience unique.
                      Venez partager des moments délicieux avec nous
                       et découvrez l'harmonie parfaite entre une cuisine exceptionnelle 
                       et une atmosphère chaleureuse. Chez Café-Resto, 
                       chaque repas est une célébration. Bienvenue à notre table !
                </p>

                <span>
                    <a href="../menu/menu.php">Voir le Menu </a>
                </span>
            </div>
        </section>
        <section id="contenu-2">
                <p>
                    De vrais aliments. Pas d'ingrédients secrets.
                </p>
        </section>
        <section id="contenu-3">

            <div>
                <h1> 
                    De nos cœurs à votre assiette
                </h1>
                <p>
                    Notre équipe de chefs talentueux 
                    sélectionne soigneusement les ingrédients
                    les plus frais et de la plus haute qualité
                    pour créer des plats qui éveilleront vos 
                    papilles. Chaque bouchée est une fusion de
                    saveurs exquises, une véritable célébration
                    de la gastronomie. Nous croyons que la nourriture
                    est plus qu'une simple nécessité, c'est une expression 
                    d'amour et de créativité. Lorsque vous vous attablez 
                    chez nous, vous pouvez être assuré que chaque plat est 
                    préparé avec soin et servi avec le sourire, car chez nous, 
                    la satisfaction de nos clients est notre plus grande
                    récompense. Venez vivre une expérience culinaire inoubliable,
                    où chaque mets est une déclaration d'affection 
                    "De nos cœurs à votre assiette"
                </p>

                <span ><a href="../acceuil/acceuil.php">
                    Visitez-nous </a>
                </span>
            </div>
            <img src="images/1703414962805.jpeg" alt="">
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