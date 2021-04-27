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
    <link rel="stylesheet" href="Style/commande.css" />
  </head>
  <?php include("bandeau.php"); ?>
  <body>
    <h1 align="center">Alors <?php echo $_SESSION['username']; ?> qu'est ce qui vous donne envie aujourd'hui?</h1>
    <hr><br><br>
    <form method="post" action="cible.php">
      <table>
        <tr>
          <td>
            <p>Commençons par choisir ce qui vous à donner envie de commander !</p>
          </td>
            <td rowspan=2 class="blanc" width="2px"></td>
          <td>
            <p>Maintenant votre petit pécher mignon !</p>
          </td>
            <td rowspan=2 class="blanc" width="2px"></td>
          <td>
            <p>Et enfin ce qui vous permettra de ne pas vous étouffer !</p>
          </td>
          <td>
        </tr>
        <tr>
          <td width="33%">
          <div class="choix">
            <select name="menu">
              <option value="Americain">Americain</option>
              <option value="Hamburger">Hamburger</option>
              <option value="Wrap">Wrap</option>
              <option value="Salade">Salade</option>
              <option value="Vide">Non</option>
            </select>
          </div>
          </td>
          <td width="33%">
          <div class="choix">
            <select name="dessert">
              <option value="Glace">Glace</option>
              <option value="Patisserie">Pâtisserie</option>
              <option value="Compote">Compote de fruits</option>
              <option value="Milkshake">Milkshake</option>
              <option value="Vide">Non</option>
            </select>
          </div>
          </td>
          <td width="33%">
          <div class="choix">
            <select name="boisson">
              <option value="Cafe">Café</option>
              <option value="Soda">Soda</option>
              <option value="Eau">Eau</option>
              <option value="Cocktail">Cocktails</option>
              <option value="Vide">Non</option>
            </select>
          </div>
          </td>
        </tr>
        <tr>
          <td colspan="5" valign="bottom"><br><button class="btn1" type="submit"><span>COMMANDER</span></button></td>
        </tr>
      </table>
    </form>
    <br><br>
  </body>
 <?php include("footer.php"); ?>
</html>
