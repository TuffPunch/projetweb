<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="contacternous.css" />
        <link rel="stylesheet" href="../cssCommun.css" />
        <Title>Yummy coffee</Title>
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

                <?php endif; ?><li><a href="./contacternous.php">Nous Contactez</a></li>

                    <li><a href="../menu/menu.php">Menu</a></li>
                    <li><a href="../notre_identite/notreidentité.php">Notre Identité</a></li>
                    <li><a href="../acceuil/acceuil.php">Accueil</a></li>
                </ul>
          </nav>
        </header>


        <div id="banniere">
            <h1 class="font_2 wixui-rich-text__text" style="text-align:center; font-size:60px;">Connectons-nous</h1>
            <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align: center; font-size: 15px;"> Rejoignez notre communauté caféinée ! Connectons-nous pour partager des moments gourmands et découvrir les saveurs uniques de notre café en ligne.</h2>
        </div>

    
            <!-- zone de connexion -->
<section>
 <div id="container">
    <form id="form">
    <h1>Connexion</h1>
    <br>
    <label><b>Prénom</b></label>
    <input type="text" placeholder="Entrer votre prénom" name="username" required>
    <br> <br>
    <label><b>Nom de famille</b></label>
    <input type="password" placeholder="Entrer votre nom de famille" name="password" required>
    <label><b>Email</b></label>
    <input type="text" placeholder="Entrer votre Email" name="username" required>
    <br><br>
    <label><b>Message</b></label>
    <input type="text" placeholder="Ecrire un message" name="username" required>
    <br><br>
    <input type="submit" id='submit' value='Envoyer' >
    
    </form>
 </div>

                  <!-- c est la zone footer --> 


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