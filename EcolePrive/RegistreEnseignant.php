
<?php

if (isset($_POST['submit'])) 
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $cin = $_POST['cin'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $mdpassword = $_POST['mdpassword'];


    include('connexion.php');
    if ($password == $mdpassword) {
        
    $query = ("insert into enseignant(nom, prenom, cin,adresse, telephone, login, password,comfpassword)  values('$nom', '$prenom','$cin',' $adresse',' $telephone',' $login','$password','$mdpassword')");
    $result = mysqli_query($idcon, $query);

    if ($result) {
         header('location:loginEnse.html');
    }

       
    }
  
    else {

        header('location:RegistreEnse.html');
    }



}


?>
