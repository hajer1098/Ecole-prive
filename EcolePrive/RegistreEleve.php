
<?php

if (isset($_POST['submit'])) 
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ne = $_POST['datenaissance'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $mdpassword = $_POST['mdpassword'];


    include('connexion.php');
    if ($password == $mdpassword) {
        
    $query = ("insert into eleve(nom, prenom, datenaissance,adresse, telephone, login, password)  values('$nom', '$prenom','$ne',' $adresse',' $telephone',' $login','$password')");
    $result = mysqli_query($idcon, $query);

    if ($result) {
         header('location:loginEle.html');
    }

       
    
  
    else {
                  echo"hajer";
        //header('location:RegistreEle.html');
    }

}


}


?>
