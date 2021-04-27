<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <title>EliteFood</title>
    <link rel="icon" href="Style/Image/EF.png"/>
    <link rel="stylesheet" href="Style/index.css"/>
  </head>
  <body>
    <div style="color:white;">
    <?php include("bandeau.php"); ?>
<table class="b2">
        <tr>
            <td>
                <br><h1>
                    Rejoignez l 'Elite grâce à la saveur de nos sandwichs !</h1>
            </td>
        </tr>
        <tr>
            <td>
                <img src="Style/Image/trait.png" alt="trait"/><br><br><br>
            </td>
        </tr>
    </table>

    <div align="center">
        <div class="conteneur_diapo">
            <a href="commande.php"><button class="btn1"><span>J'AI FAIM</span></button></a>
            <div class="conteneur_slide">
                <div class="slid_1"><img src="Style/Image/Food/s1.jpg"></div>
                <div class="slid_2"><img src="Style/Image/Food/s5.jpg"></div>
                <div class="slid_3"><img src="Style/Image/Food/s7.jpg"></div>
            </div>
        </div>
    </div>

    <br><br><br>

    <table class="b3">
      <tr>
        <td class="p1" width="50%">
            <br>
            <img src="Style/Image/user.png" alt="user" width=100px height=auto style="margin-bottom:1px"/><br><br>
            Envie de faire partie de l'Elite?
            <br><br><br>
            <a href="login.php"><button class="btn2">Rejoignez-nous !</button></a>
        </td>
        <td class="p2" width="50%">
            <br>
            <img src="Style/Image/local.png" alt="local" width=100px height=auto style="margin-bottom:10px"/><br>
            Vous nous cherchez ? On est juste ici!
            <br><br><br>
            <a href="map.php"><button class="btn3">Nous trouver !</button></a>
        </td>
      </tr>
    </table>
    <br><br><br>
  </body>
  <?php include("footer.php"); ?>
</html>
