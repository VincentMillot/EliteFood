<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width"/>
  <title>EliteFood</title>
  <link rel="icon" href="Style/Image/EF.png"/>
  <link rel="stylesheet" href="Style/profil.css" />
  </head>
    <?php include("bandeau.php"); ?>
  <body>
    <div class="bvn">
      <h1>Bonjour <?php echo $_SESSION['username']; ?>!</h1>
      <h2>Ceci est l'historique de vos commandes sur EliteFood.</h2>
    </div>
    <div class="entete">
      <div><b>Menu</b></div>
      <div><b>Dessert</b></div>
      <div><b>Boisson</b></div>
    </div>
<?php
    include('config.php');
    $command = "SELECT * from commandes WHERE username='" . $_SESSION['username']."'";
    $result = mysqli_query($conn, $command);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
?>
  <div class="historique">
    <div><?php echo $row['menu'];?></div>
    <div><?php echo $row['dessert'];?></div>
    <div><?php echo $row['boisson'];?></div>
  </div>
  <br><div><hr></div><br>
<?php
 }
}
 else {echo"Vous n'avez jamais effectué de commandes !";}
?>
<br><a href="deco.php"><button class="logout">Deconnexion</button></a><br>
  </body>
    <?php include("footer.php"); ?>
</html>
