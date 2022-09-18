<!DOCTYPE html>
<head>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Voulez vous vraiment supprimer cet eleve?');
}
</script>

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

            tr:hover {background-color:#F4F4F4 ;}
            li {
                display: inline-block;


                color: #ffffff;
                font-size: 45px;
                font-family: 'Raleway', sans-serif;


            }

      
            </style>

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
               <a class="sign" href="logout.php" style="color:#0865A7"> <i class="bi bi-box-arrow-in-right"></i>Log Out </a>
               
            </div>
         </div>
      </nav>
   </header>

<?php 
 include('connexion.php');
 
  
 $query = ' select *from eleve ORDER BY id_eleve ';
 $result = mysqli_query($idcon, $query);

 


?>



<h2> Liste des éléves inscrit dans l'école :</h2>
<hr height="50">


<table  width="100%"cellspacing="0" border="2">
 <thead><tr>

 <th> Nom</th>
 <th> Prenom</th>
 <th> Date naissance</th>

 <th> Adresse</th>
 <th> telephone </th>
 <th> Action </th>
 
 </tr></thead>
 <tbody>
 <?php 
   while($row = mysqli_fetch_assoc($result))
{ 
?><tr>

 <td><?php echo $row['nom']; ?></td>
 <td><?php echo $row['prenom']; ?></td>
 <td><?php echo $row['datenaissance']; ?></td>

 <td><?php echo $row['adresse']; ?></td>
 <td><?php echo $row['telephone']; ?></td>

 
 
 <td>
    
 
   <?php  echo"<button class='btn btn-warning' ><a style='color:#FFFFFF' href='Updateeleve.php?edit=".$row['id_eleve']." ' >  update</a></button>";?>
   
   
   
  
   <?php  echo"<button class='btn btn-danger' ><a style='color:#FFFFFF' href='DeleteEleve.php?deleteid=".$row['id_eleve']."'  class='texte-light' onclick='return checkDelete()'>  deleteMe</a></button>" ?>;
   

</td>
 

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
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
</html>