
<?php
session_start();



if ($_SESSION['login'] !== "") {

    $user = $_SESSION['login'];
    $adresse = $_SESSION['adresse'];
    $prenom = $_SESSION['prenom'];
    $telephone = $_SESSION['telephone'];
    $nom = $_SESSION['nom'];


// afficher un message







}

?>
<html>
    <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php 


include('connexion.php');


$idEnseignant = $_SESSION['id'];

$query = " select * from cours c , enseignant e where c.idE=e.id and e.id= '$idEnseignant' ORDER BY code  ";
$result = mysqli_query($idcon, $query);

if (isset($_POST["deleteid"])) {

    $id = $_POST['deleteid'];

    $query = "DELETE FROM eleve WHERE  id_eleve ='" . $id . "'";
    $resu = mysqli_query($idcon, $query);

    if ($resu) {
        echo 'supprission validée';
    }
    else {
        //  header("location:ListeEleve.php");
        echo 'invalidée';

    }

}
?>
<body>
<header>
      <nav class="navbar-default ">
         <div class="container-fluid">
            <div class="navbar-header logo">
               <img
                  src="images/imtiyez.jpg" width="70" height="70"
                  alt="logo" class="pull-left">
               <a class="navbar-brand" href="#">
                  <h2 class="heading"><b>AL Imtiyez</b></h2>
               </a>
            </div>
            <ul class="nav navbar-nav">
            <li class="dropdown">
                
             
               <li><a href="#"></a></li>
              
               <li><a href="#"></a></li>
            </ul>
            <div class="login-wrapper pull-right">
               <a class="sign" href="sendMessage.php">Contact </a>
               
            </div>
            <div class="login-wrapper pull-right">
               <a class="sign" href="logout.php">Log Out </a>
               
            </div>
         </div>
      </nav>
   </header>
   <head>
   <style type="text/css">

table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            tr:hover {background-color:#F4F4F4 ;}
            li {
                display: inline-block;


                color: #ffffff;
                font-size: 45px;
                font-family: 'Raleway', sans-serif;


            }

      
            </style>
</head>
<h2 > Gérer vos cours</h2>
<hr>
<center>
<a class="btn btn-primary"href="addcours.php" role="button">Ajouter</a>

</center>
<table  width="100%"cellspacing="0" border="2">
 <thead><tr>

 <th> matiere</th>
 <th> chapitre</th>
 <th> description</th>
 <th> file</th>
 <th> Action</th>


 
 
 </tr></thead>
 <tbody>
 <?php
while ($row = mysqli_fetch_assoc($result)) 
{
?><tr>

 <td><?php echo $row['matiere']; ?></td>
 <td><?php echo $row['chapitre']; ?></td>
 <td><?php echo $row['description']; ?></td>

 <td><?php echo $row['file']; ?></td>

 

 <td>
 <button type="button" class="btn btn-warning">Update</button>
 <button type="button" class="btn btn-danger">delete</button>

  
</td>

</td>
				
 </form>


 
</tr><?php
}
?>
            