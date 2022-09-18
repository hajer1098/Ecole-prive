<!DOCTYPE html>
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
<!------ Include the above in your HEAD tag ---------->
<?php 
 include('connexion.php');
 
  
 $query = ' select *from cours ORDER BY code  ';
 $result = mysqli_query($idcon, $query);



?>


<center>
<h2> Liste des cours </h2>
<hr width="500" size="9"> 
<br>
<br>
<button type="button" class="btn btn-primary" href="addcours.php">Ajouter</button>
</center>
<br>
<br>
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
 
   <button class="btn btn-primary" ><a href="updatecours.php?updateid='.$row['code'].'" class="texte-light">  update</a></button>
  
   <button class="btn btn-danger" ><a href="DeleteCours.php?deleteid='.$row['code'].'"  class="texte-light">  delete</a></button>
 </td>

</td>
				
 </form>


 
</tr><?php
 }
 ?>
	  </tbody> 
	  </table>
  
</body>