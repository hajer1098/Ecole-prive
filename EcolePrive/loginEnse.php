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
   
 
     
   if ($username !== "" && $password !== "") {
      $query = "SELECT * FROM enseignant where 
              login = '" . $username . "'and password = '" . $password . "' ";

      $result = mysqli_query($idcon, $query);

      $row = mysqli_fetch_assoc($result);


      if ($result) // nom d'utilisateur et mot de passe sont correctes
      {  $_SESSION['id'] =$row['id'];

         
         $_SESSION['login'] = $username;
         $_SESSION['password'] = $password;
         $_SESSION['nom']=$row['nom']; 
         $_SESSION['prenom']=$row['prenom']; 
         $_SESSION['adresse']=$row['adresse']; 
         $_SESSION['telephone']=$row['telephone']; 
       
        
        header('Location: principaleEnseignant.php');
      }
      else {
         echo" utilisateur ou mot de passe incorrect";
         echo "<script>alert(\"utilisateur ou mot de passe incorrect\")</script>";
         header('Location: login.html?erreur=1'); // utilisateur ou mot de passe incorrect
         echo "<script>alert(\"utilisateur ou mot de passe incorrect\")</script>";

      }
   }
   else {
      echo" utilisateur ou mot de passe sont vide";
      echo "<script>alert(\"utilisateur ou mot de passe sont vide\")</script>";
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