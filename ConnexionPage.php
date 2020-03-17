<?php


echo "<form action='ConnexionPage.php' method='post'>Nom : <input type='text' name='nom' value=''> 
        Prenom : <input type='text' name='prenom' value=''><br><br>
       <input type='submit' name='validation' value='valider'></form> <br>
       <a href='Main.php'>retour</a><br><br>";


setcookie("connexionCookie","valider");

echo "Vous êtes :".$_POST['nom']." ".$_POST['prenom'];

?>
