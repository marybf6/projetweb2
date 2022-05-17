<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/footer.css" />
  <link rel="stylesheet" href="CSS/over-footer.css" />
  <title>I_learn</title>
</head>

<body>
  <?php

  if (isset($_GET['error'])) {
    echo '<script language="javascript">';
    echo 'alert("Vous avez tapez un message ou un email vide, inserer vos données a nouveau!")';
    echo '</script>';
  }
  ?>
  <header>
    <a href="#">
      <div class="logo">
        <img src="images/logo.png" alt="logo" width="50" height="50" /></div>
    </a>

    <nav>
      <ul>
        <a href="inscription.php">
          <li><button class="inscription" type="submit" name="ins">SIGN UP </button></li>
        </a>
        <a href="login.php">
          <li><button class="connection" type="submit" name="log">LOG IN</button></li>
        </a>
      </ul>
    </nav>
  </header>

  <div class="intro" id="images">
    <img src="images/1.jpg" alt="logo" hight="900px" class="slidshow-img" />
    <img src="images/2.jpg" alt="logo" height="900px" class="slidshow-img" />
    <img src="images/3.jpg" alt="logo" height="900px" class="slidshow-img" />
  </div>

  <div class="intro title blue-background">
    <p>
      <b> Améliorez-vous et apprenez de nouvelles choses grâce à nos tutoriels vidéos
      gratuits </b> <br />
    </p>
  </div>

  <div class="description">
    <div class="desc-white">
      <div>
        <img class="desc-img" src="images/ilearn2.png" alt="logo" height="350" />
      </div>
      <div class="desc-text">
          <li>Pas de frais d'inscription</li>
          <li>Des cours gratuits et d'autres payants </li>
          
        </ul>
      </div>
    </div>
    <div class="desc-blue">
      <div class="desc-text">
        <h3 class="desc-title">Toujours disponible pour vous !</h3>
     
      
      </div>
      <div><img class="desc-img" src="images/time.png" alt="logo" /></div>
    </div>
    <div class="desc-white">
      <div><img class="desc-img" src="images/world.png" alt="logo" /></div>
      <div class="desc-text">
        <h3 class="desc-title">Quelque soit votre pays !</h3>
        <ul class="desc-ul">
          <li>Vous pouvez acceder au site quleque soit votre pays</li>
      
        </ul>
      </div>
    </div>
    </div>
  </div>
  
        
          
        </ul>
      </div>
  <div class="center">
    <a href="inscription.php"><button class="get-started">GET STARTED</button></a>
  </div>
 

  <div class="footer">
    <div class="content-footer">
      <div class="content-sociale">
        <p href="#" style="
              font-size: 20px;
              font-weight: 300;
              font-family: Georgia, 'Times New Roman', Times, serif;
            ">
          Contacts :
        </p>
        <br />
        <p>Tel :52142937</p>
        <p>Email: mmmary0408@gmail.com</p>
        <div class="social-img">
          <p href="#" style="
                font-size: 20px;
                font-weight: 300;
                font-family: Georgia, 'Times New Roman', Times, serif;
              ">
            Abonnez nous sur:
          </p>
          <br />
          <img src="images/facebook (1).png" alt="" />
          <img src="images/ii.png" alt="" />
          <img src="images/tt.png" alt="" />
          <img src="images/ll.png" alt="" />
        </div>
      </div>
      <div class="content-about">
        <a href="#" style="
              font-size: 20px;
              font-weight: 300;
              font-family: Georgia, 'Times New Roman', Times, serif;
              color: aliceblue;
            ">Apropos</a>
        <div class="about-show">
          <p>
          ILEARN est un site web d'apprentissage et d'enseignement </br> en 
          ligne qui vous  propose plusieurs formations/cours gratuits</br> et 
           d’autres payants à ses participants.
          </p>
        </div>
        <a href="inscription.php"><button class="voir-plus">Voir plus >></button></a>
      </div>
      <div class="content-contact">
        <p href="#" style="
              font-size: 20px;
              font-weight: 300;
              font-family: Georgia, 'Times New Roman', Times, serif;
            ">
          Contactez-nous
        </p>
        <form action=" includes/sentMessage.php" method="post">
          <input type=" text" name="sentEmail" placeholder="Adresse Email" class="email" /><br />
          <input type="text" name="sentMessage" placeholder="Message..." class="message" /><br />
          <button type="submit" name="sentMsg" value=<?= basename($_SERVER['PHP_SELF']); ?> class="envoyer">Envoyer</button>
        </form>
      </div>
    </div>
    <div class="bottom">
      &copy; MERIAM BEN  FADHEL | 2BI
    </div>
  </div>

  <script src="JS/script.js"></script>
</body>

</html>