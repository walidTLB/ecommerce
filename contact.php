<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contactez-nous || Produits Sportive</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">PRODUITS PREMUIM</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="active"><a href="about.php">nous</a></li>
          <li><a href="products.php">produits</a></li>
          <li><a href="cart.php">Ma carte</a></li>
          <li><a href="orders.php">Mes commandes</a></li>
          <li><a href="contact.php">Contactez-nous</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li class="active"><a href="account.php">Mon Profile</a></li>';
            echo '<li><a href="logout.php">se deconnecter</a></li>';
          }
          else{
            echo '<li><a href="login.php">connectez-vous</a></li>';
            echo '<li><a href="register.php">inscrirvez-vous</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">

        <p><h3>Vous voulez Rester Brancher !!</h3> Contactez-nous sur: <a href="mailto:support@PrimeSport.com">support@PrimeSport.com</a></p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy;  Produit sportive Premium. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
