
<?php

if (isset($_POST['Inscription'])) 
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $genre = $_POST['genre'];
    $pays = $_POST['pays'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];



    include('connexion.php');
    if ($nom & $prenom & $genre & $pays & $email & $login & $password)
    {
        $query = " insert into data values('$nom', '$prenom', '$genre','$pays','$email','$login','$password')";
    $result = mysqli_query($idcon, $query);

    if ($result) {
        echo "connexion valideé ";
    }
    else {

        echo "invalid";
    }

    }

}

?>
