<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <title>EliteFood</title>
    <link rel="icon" href="Style/Image/EF.png"/>
    <link rel="stylesheet" href="Style/login.css"/>
  </head>
  <?php include("bandeau.php"); ?>
  <body>
    <div style="color:white;">

  <?php
    require('config.php');
    session_start();
  if (isset($_POST['username']))
  {
      $username = stripslashes($_REQUEST['username']);
      $username = mysqli_real_escape_string($conn, $username);
      $password = stripslashes($_REQUEST['password']);
      $password = mysqli_real_escape_string($conn, $password);
      $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
      $result = mysqli_query($conn,$query) or die(mysql_error());
      $rows = mysqli_num_rows($result);
    if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: profil.php");
    }
    else{
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }
?>
<div class="limiteur">
  <div class="conteneur">
    <div class="wrap">
      <form class="taille valide-f" action="" method="post" name="login">
        <span class="titre">
          Identifiez-vous
        </span>
        <br>
        <div class="wrap-input valide" data-validate = "Entrer username">
          <input type="text" class="input" name="username" placeholder="Nom d'utilisateur" required>
        </div>
        <br>
        <div class="wrap-input valide" data-validate="Entrer password">
          <input type="password" class="input" name="password" placeholder="Mot de passe" required>
        </div>
        <br><br>
        <div class="conteneur-btn">
          <button class="login-btn">
            Connexion
          </button>
        </div>
        <br><br>
        <ul>
          <li>
            <span class="txt1">
              Vous êtes nouveau ici ?
            </span>
            <a href="inscrire.php" class="txt2">
              S'inscrire
            </a>
            <?php if (! empty($message)) { ?>
              <p class="erreur"><img src="Style/Image/croix.png" alt="erreur" height="25px" width="25px"/> <?php echo $message;?></p>
            <?php } ?>
          </li>
        </ul>
      </form>
    </div>
  </div>
</div>

  </body>
<?php include("footer.php"); ?>
</html>
