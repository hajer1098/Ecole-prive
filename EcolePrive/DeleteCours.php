<body>
    <?php

include('connexion.php');

if (isset($_GET["deleteid"])) {

    $id= $_GET['deleteid'];
  
    $query = "DELETE FROM eleve WHERE   code ='".$code."'";
    $result = mysqli_query($idcon, $query);
   
   if($result) 
 {
       echo 'supprission validée';
    }
   else{
     //  header("location:ListeEleve.php");
     echo 'invalidée';
  
   }
}
?>
