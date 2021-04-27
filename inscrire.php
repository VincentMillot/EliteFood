<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width"/>
<title>EliteFood</title>
<link rel="stylesheet" href="Style/login.css" />
<link rel="icon" href="Style/Image/EF.png"/>
</head>
<body>
<?php include("bandeau.php"); ?>
<?php
require('config.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password']))
{
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username);

  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);

  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);

  $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '".hash('sha256', $password)."')";
  $res = mysqli_query($conn, $query);
  if($res){header("Location: profil.php");}
}
else{
?>
<div class="limiteur">
  <div class="conteneur">
    <div class="wrap">
      <form class="taille valide-f" action="" method="post" name="inscrire">
        <span class="titre">
          Inscrivez-vous
        </span>
        <br>
        <div class="wrap-input valide" data-validate = "Entrer username">
          <input type="text" class="input" name="username" placeholder="Nom d'utilisateur" required />
        </div>
        <div class="wrap-input valide" data-validate="Entrer email">
          <input type="text" class="input" name="email" placeholder="Email" required />
        </div>
        <div class="wrap-input valide" data-validate="Entrer password">
          <input type="password" class="input" name="password" placeholder="Mot de passe" required />
        </div>
        <br><br>
        <div class="conteneur-btn">
          <button class="login-btn">
            Inscription
          </button>
        </div>
        <br><br>
        <ul>
          <li>
            <span class="txt1">
              Vous avez déja un compte ?
            </span>
            <a href="login.php" class="txt2">
              Se connecter
            </a>
          </li>
        </ul>
      </form>
    </div>
  </div>
</div>
<?php } ?>
<?php include("footer.php"); ?>
</body>
</html>
