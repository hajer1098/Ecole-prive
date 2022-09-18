
<?php

if (isset($_POST['Inscription'])) 
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
  
    $pays = $_POST['pays'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];



    include('connexion.php');

    $query =( " insert into registre values('$nom', '$prenom','$pays','$email','$login','$password')");
    $result = mysqli_query($idcon, $query);

    if ($result) {
        echo "connexion valideé ";
    }
    else {

        echo "invalid";
    }



}


?>
