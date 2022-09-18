<!DOCTYPE html>
<head><style type="text/css">

table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            tr:hover {background-color: #F4F4F4 ;}
            li {
                display: inline-block;


                color: #ffffff;
                font-size: 45px;
                font-family: 'Raleway', sans-serif;


            }
            </style></head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    hr {
  height:4px;
  margin: -0.5em 0;
  padding: 0;
  color: #F00;
  background-color: #F00;
  border: 0;
}
</style>
<?php 
 include('connexion.php');
 
  
 $query = ' select *from cours ORDER BY code  ';
 $result = mysqli_query($idcon, $query);

 if (isset($_POST["deleteid"])) {

  $id = $_POST['deleteid'];

  $query = "DELETE FROM eleve WHERE  id_eleve ='".$id."'";
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
<h2> Liste des cours </h2>
<hr width="500" size="9"> 
<br>
<br>
<button type="button" class="btn btn-primary" href="addcours.php">Ajouter</button>
</center>
<table  width="100%"cellspacing="0" border="2">
 <thead><tr>
 <th> code</th>
 <th> matiere</th>
 <th> chapitre</th>
 <th> description</th>
 <th> file</th>

 
 
 </tr></thead>
 <tbody>
 <?php 
   while($row = mysqli_fetch_assoc($result))
{
?><tr>
<td><?php echo $row['code']; ?></td>
 <td><?php echo $row['matiere']; ?></td>
 <td><?php echo $row['chapitre']; ?></td>
 <td><?php echo $row['description']; ?></td>

 <td><?php echo $row['file']; ?></td>
 

 <td>
 <?php  echo"<button class='btn btn-warning' ><a  style='color:#FFFFFF' href='Updateeleve.php?updateid=".$row['code']." ' >  update</a></button>"?>

<?php  echo"<button class='btn btn-danger' ><a  style='color:#FFFFFF'href='DeleteEnseignant.php?deleteid=".$row['code']."'  class='texte-light' onclick='return checkDelete()'>  delete</a></button>" ?>

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
      </center
      </html>