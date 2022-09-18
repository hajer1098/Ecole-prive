<!DOCTYPE html>

<head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
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

            tr:hover {background-color:#F4F4F4  ;}
            li {
                display: inline-block;


                color: #ffffff;
                font-size: 45px;
                font-family: 'Raleway', sans-serif;


            }

      
            </style>

</head>
</head>
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
               <a class="sign" href="logout.php" style="color:#0865A7">Log Out </a>
               
            </div>
         </div>
      </nav>
   </header>
</head>
<?php 
 include('connexion.php');
 
  
 $query = ' select *from message ORDER BY id  ';
 $result = mysqli_query($idcon, $query);

 if (isset($_POST["deleteid"])) {

  $id = $_POST['deleteid'];

  $query = "DELETE FROM eleve WHERE  id='".$id."'";
  $result = mysqli_query($idcon, $query);
 
 if($result) 
 {echo 'supprission validée';}
 else{
   //  header("location:ListeEleve.php");
   echo 'invalidée';

 }

}
?>


<center>
<h2> Liste des éléves inscrit dans l'école :</h2>
</center>
<table  width="100%"cellspacing="0" border="2">
 <thead><tr>


 <th> Nom</th>
 <th> email</th>
 
 <th> message</th>
 
 
 </tr></thead>
 <tbody>
 <?php 
   while($row = mysqli_fetch_assoc($result))
{
?><tr>

 <td><?php echo $row['nom']; ?></td>
 <td><?php echo $row['email']; ?></td>
 <td><?php echo $row['message']; ?></td>

 
 <td>
 <?php  echo"<button class='btn btn-warning' ><a  style='color:#FFFFFF' href='Updateeleve.php?updateid=".$row['id']." ' >  update</a></button>"?>

<?php  echo"<button class='btn btn-danger' ><a  style='color:#FFFFFF'href='DeleteEnseignant.php?deleteid=".$row['id']."'  class='texte-light' onclick='return checkDelete()'>  delete</a></button>" ?>

</td>
				
 </form>


 
</tr><?php
 }
 ?>
	  </tbody> 
	  </table>

    <center>
      <a href="principaleAd.php">
      <img src="images/back.png" width="50" height="50" alt="retourner " title="retourner">   </img>
      </a>
</center>
</html>