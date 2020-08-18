<html>
<?php
  include_once 'header.php';
?>

<head>
   
    </head>
    <body>
        <h1 style="top:320;left:450;position:absolute;color:white;font-family:Century Gothic;font-size:60px;text-shadow:red 2px 2px;text-align:center;">Welcome to EVENT MALL </h1>
         

          <?php
          if(isset($_SESSION['s_enroll']) || isset($_SESSION['t_id']) ){
            echo "You are logged in!";
          } ?>
    </body>
</html>