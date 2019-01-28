<!DOCTYPE html">
<html lang="fr">
  <head>
    <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="./css/main_css.css">
      <link rel="stylesheet" href="./lib/bootstrap-4.2.1-dist/css/bootstrap.min.css" />
       <link rel="stylesheet" href="./lib/bootstrap-social-gh-pages/assets/css/font-awesome.css" />
      <link rel="stylesheet" href="./lib/bootstrap-social-gh-pages/assets/css/font-awesome-5.6.3.css" />
      
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="./lib/bootstrap-4.2.1-dist/css/bootstrap-grid.min.css" />
      <link rel="stylesheet" href="./lib/bootstrap-4.2.1-dist/css/bootstrap-reboot.min.css" />
      <link rel="stylesheet" href="./lib/bootstrap-social-gh-pages/bootstrap-social.css"/>
      <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
      

    <title>Zaland'AFPA | Site de vêtements en ligne</title>
  </head>
  <body>
 
    <?php
      session_start();
      
        include('./vue/vue_header.php');
        include('./vue/vue_menu.php');
      
      //Corps de la page, récupération en $_GET
       include('./back/navigation.php');
       
        include('./vue/vue_footer.php');
    ?>
      
      
  </body>
  </html>