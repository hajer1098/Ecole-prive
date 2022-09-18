<?php
session_start();
//if(isset($_POST['username']) && isset($_POST['password']))
if (isset($_POST['submit'])) 
{
   // connexion à la base de données
   include('connexion.php');
   // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
   // pour éliminer toute attaque de type injection SQL et XSS

   $username = $_POST['login'];
   $password =  $_POST['password'];
 
      $_SESSION['password'] = $password;
   if ($username !== "" && $password !== "") {
      $query = "SELECT count(*) FROM administrateur where 
              login = '" . $username . "'and password = '" . $password . "' ";

      $result = mysqli_query($idcon, $query);
      echo "ici";

      if (mysqli_fetch_row($result) > 0) // nom d'utilisateur et mot de passe sont correctes
      {
         $_SESSION['login'] = $username;
         $_SESSION['password'] = $password;
          
         header('Location:principaleAd.php');
      }
      else {
         header('Location: login.html?erreur=1'); // utilisateur ou mot de passe incorrect
      }
   }
   else {
      header('Location: login.html?erreur=2'); // utilisateur ou mot de passe sont vide
   }

}
else 
{
   header('Location: welcomeAdmin.html');
}
mysqli_close($idcon); // fermer la connexion
?>


</html>