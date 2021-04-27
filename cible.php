<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
  }
    if (isset($_POST['menu'])) {
      require('config.php');
      $conn->set_charset('utf8');
      $requete='INSERT INTO commandes VALUES(NULL,"'.$_SESSION['username'].'","'.$_POST['menu'].'","'.$_POST['dessert'].'","'.$_POST['boisson'].'")';
      $resultat = $conn->query($requete);
      if ($resultat)
        header("Location:profil.php");
      else
        echo 'Erreur : '.$e->getMessage();
    }
    ?>
