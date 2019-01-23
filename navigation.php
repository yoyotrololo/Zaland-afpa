<?php if (isset($_GET['x'])) {
   if (strpos($_GET['x'], "/")) {
      $dir = substr(str_replace('..', '', $_GET['x']), 0, strpos($_GET['x'], "/")) . "/";
      $file = substr(strrchr($_GET['x'], "/"), 1);
      if (file_exists($dir.$file.".php")) {
         include($dir.$file.".php");
      } else {
         include("index2.php");
      }
   } else {
      if (file_exists(basename($_GET['x']).".php")) {
         include(basename($_GET['x']).".php");
      } else {
         include("index2.php");
      }
   }
} else {
   include("index2.php");
} ?>