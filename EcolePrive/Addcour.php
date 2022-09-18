
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
  header('location:principaleEnseignant.php');
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
         
        <style type='text/css'>

 form{
text-align:center;

 }
fieldset {
  font-size:20px;
  padding:10px;
  width:550px;

}
button {
  background-color: white;
  color: black;
  border: 2px solid #008CBA; /* b leu */
  border-radius: 8px;
}
button:hover {
  background-color: #008CBA; /* bleu */
  color: white;
}
</style>
    </head>
    <body>
        <h2> Ajouter un cours </h2>
        <br><br>
      <form  method="POST" action="addcour.php" enctype="multipart/form-data">
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
                
                <tr><td></td> <td> <button  name="submit" class="pure-button pure-button-primary">Ajouter</button>
 </td>
</tr>


         
        </table>
            

       </fieldset>
          </form>

      <br></br>
      <a href="principaleEnseignant.php">
      <img src="images/back.png" width="50" height="50" alt="retourner " title="retourner">   </img>
      </a>
    </body>
</html>
