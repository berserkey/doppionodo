<!DOCTYPE html>
<html lang="it" dir="ltr">
  
  <head>

    <title> Not Found Page </title>

    <?php
      include 'header/common_header.php';
    ?>
      
    <link rel="stylesheet" href="css/style_registration.css">
    <link rel="stylesheet" href="css/style_404.css">

  </head>

  <body>

    <?php
      include 'navbar.php';
    ?>

<div class="main-content">
  <img class="error_404" src="../images/not_found.jpg" alt="404 Not Found Quel che cercavi è andato perduto o forse no? Torna a casa...">
  <div class="content-wrapper">
    <h1>404</h1>
    <h2>Quel che cercavi è andato perduto<br>o forse no?<br>Torna a casa...</h2>
    <a href="index.php" class="button">HOME</a>
  </div>
</div>
    
    <?php    
      include 'footer.php';
    ?>



  </body>
</html>