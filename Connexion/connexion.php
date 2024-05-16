<?php

// Start the session
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Connexion.css" />
        <link rel="stylesheet" href="../cssCommun.css" />
        <Title> Yummy-coffee</Title>
    </head>
    <body>
        
        <header>
            <nav>
                <ul>
                    <img src="../logo.png" width="70" />
                    <li id="connexion"><a href="./connexion.php"><img style="vertical-align: middle;" src="../login-icon.png" width="26px"/> Connexion</a></li>
                    <li><a href="../contactez-nous/contacternous.php">Nous Contactez</a></li>

                    <li><a href="../menu/menu.php">Menu</a></li>
                    <li><a href="../notre_identite/notreidentité.php">Notre Identité</a></li>
                    <li><a href="../acceuil/acceuil.php">Accueil</a></li>
                </ul>
          </nav>
        </header>

            <!-- zone de connexion -->
<section>
 <div id="container">
    <form id="form" method="post" action="auth.php">
    <h1>Connexion</h1>
    <br>
    <?php if (isset($_SESSION['login_failed']) && $_SESSION['login_failed'] === true): ?>
    <p style="color: red;"><?php echo $_SESSION['error_message']; ?></p>
  <?php endif; ?>
    <label><b>Nom d'utilisateur</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" id="username" required>
    <br> <br>
    <label><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer le mot de passe" name="password" id="password" required>
   
    <input type="submit" id='submit' value='LOGIN' >
    
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
    <script src="script.js"></script>
    </body>
</html>
