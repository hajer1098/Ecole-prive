



<?php

include('connexion.php');
   
   $idEl= $_GET['updateid'];

$sql="select *from cours";
$res= $result = mysqli_query($idcon, $sql);
$row = mysqli_fetch_assoc($res);
$code=$row['code'];
$matiere=$row['matiere']; 
$chapitre=$row['chapitre'];
$description=$row['description'];
$file=$row['file'];


if (isset($_POST['update'])) 
{ $code=$row['code'];
   
    $matiere= $_POST['matiere'];
    $chapitre = $_POST['chapitre'];
 
    $description = $_POST['description'];
    $file= $_POST['file'];
  
   


    include('connexion.php');


    $query = "update eleve set code='$code',matiere='$matiere',chapitre='$chapitre',description='$description',file='$file'
    where code='$idEl'";
    $result = mysqli_query($idcon, $query);
    
    echo "";
    if ($result) {
       // header('location:loginEle.html');
       echo "update avec succées";
    }
    else {

        echo "noon";
      //header('location:RegisterEle.html');
    }
}
?>


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
  font-size:10px;
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
               <a class="sign" href="logout.php">Log Out </a>
               
            </div>
         </div>
      </nav>
   </header>

<body>
    


    <form method="POST" action="updatecours.php" >
        <fieldset style="width: 500">
            <legend>
                <h2 style="color :#4682B4;"> Modifier</h2>
            </legend>
            <table>
                <tr>
                    <td>
                        <p>Matiere</p>
                    </td>
                    <td><input type="text" name="matiere" size="15" maxlength="30" value="<?php echo $matiere?>" required><br></td>
               
                    <td>
                        <p>Chapitre</p>
                    </td>
                    <td><input type="text" name="chapitre" size="15" maxlength="30"  value="<?php echo $chapitre ?>"required><br></td>
                </tr>



                </tr>
               
                <tr>
                    <td>
                        <p>Description</p>
                         </td>
                        <td><input type="text" name="description" size="15" maxlength="30" value="<?php echo $description?>" required><br></td>
                    </td>
               
                </tr>
                   
                <tr>
                    <td>
                        <p>Fichier</p>
                         </td>
                        <td><input type="file" name="file" size="15" maxlength="30" required value="<?php echo $file ?>"><br></td>
                    </td>
               
                   
                </tr>



                <tr>
                    <td><br><br></td>
                    <td><br><br><input type="submit" value="update" name="update" class="btn1"> </td>
                </tr>



             


            </table>

            </fieldset>
    </form>
  

    <a href="index.html">Retour à la page d'accueil</a>
</body>
