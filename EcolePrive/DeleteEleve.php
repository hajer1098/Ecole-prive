
    <?php

include('connexion.php');

if (isset($_GET["deleteid"])) {

    $idEl= $_GET['deleteid'];
  
    $query = "DELETE FROM eleve WHERE   id_eleve ='".$idEl."'";
    $result = mysqli_query($idcon, $query);
   
   if($result) 
 {
  echo "<script>alert(\"Suppression valider\")</script>";
 

    }
   else{
     //  header("location:ListeEleve.php");
     echo 'invalidée';
  
   }
   header("location:ListeEleve.php");
}
?>
