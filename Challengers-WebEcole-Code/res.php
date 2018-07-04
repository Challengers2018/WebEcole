<?php
session_start();
if(isset($_SESSION['nom_utilisateur'])) {
header("refresh:1;formresul.php");
}
else if(!isset($_SESSION['nom_utilisateur'])) {
  echo"ooooooooooooooooooooooo";
      header("refresh:1;index.php");
}

?>
