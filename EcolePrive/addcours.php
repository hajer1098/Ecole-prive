
<?php



if (isset($_POST['submit'])) 
{
 
  $matiere = $_POST['matiere'];
  $chapitre = $_POST['chapitre'];
  $description = $_POST['description'];
  $file = $_POST['file'];
 
  $ide= $_POST['ide'];
  include('connexion.php');

   //$query = ("insert into cours (code, matiere,chapitre,description,file,idE)
   //values('$code', '$matiere',' $chapitre','$description',' $file,'$ide')"); 

   $query = ("insert into cours(matiere, chapitre,description,file,ide) 
    values('$matiere','$chapitre',' $description',' $file',$ide)");
       
      $result = mysqli_query($idcon, $query);
  //
  echo "impo";
 //

if ($result) {
   echo "<script>alert(\"Cours Ajouter avec succés\")</script>";
  header('location:CoursEnseignant.php');
}
else {
  echo 'impossible';
  header('location:addcours.php');
}


}

?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <html>
    <head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
         
        <style type='text/css'>

 form{
  text-align: center;

 }
fieldset {
  font-size:18px;
  padding:10px;
  width:550px;


}
.navbar-default {
        
        
        margin-top: 1em;

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
               <a class="sign" href="sendMessage.php">Contact </a>
               
            </div>
            <div class="login-wrapper pull-right">
               <a class="sign" href="logout.php">Log Out </a>
               
            </div>
         </div>
      </nav>
   </header>
<body>
 
        <h2> Ajouter un cours </h2>
        <br>
 <center>
      <form  method="POST" action="addcours.php">
          <fieldset>
                  <legend> Ajout </legend>
            <table>
            <?php 
              session_start();
              $ide= $_SESSION['id'];
              ?>
            <tr>    </td><td> <input type="text" value="<?php echo $ide ?> " name="ide"  hidden ></td></tr>



                 <tr>    <td>Matiére</td><td> <input type="text" name="matiere" value="" maxlength="30" ></td></tr>
                 <tr>    <td>chapitre</td><td><input type="text" name="chapitre" value="" maxlength="30" ></td></tr>
                
                 <tr>    <td>Description</td><td>   <TEXTAREA name="description" rows=4 cols=40>Nom du champitre</TEXTAREA></td></tr>
   
               
                <tr>    <td>Fichier</td><td><input type="file" name="file" value="" maxlength="30" ></td></tr>
                
                <tr><td></td> <td> <button  name="submit"  class="btn btn-success">Ajouter</button>
            
 </td>
</tr>


         
        </table>
            

       </fieldset>

          </form>
          </center>
      <br></br>
      <a href="principaleEnseignant.php">
      <img src="images/back.png" width="50" height="50" alt="retourner " title="retourner">   </img>
      </a>

    </body>
</html>
