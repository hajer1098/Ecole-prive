



<?php

include('connexion.php');

   $idEn= $_GET['updateid'];
$sql="select *from enseigant";
$res= $result = mysqli_query($idcon, $sql);
$row = mysqli_fetch_assoc($res);
$name=$row['nom'];
$pre=$row['prenom']; 
$cin=$row['cin'];
$adr=$row['adresse'];
$tel=$row['telephone'];
$log=$row['login'];
$pass=$row['password'];

if (isset($_POST['update'])) 
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naiss = $_POST['cin'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $login = $_POST['login'];
    $password = $_POST['password'];
   


    include('connexion.php');


    $query = "update eleve set id_eleve= ' $idEl',nom='$nom',prenom='$prenom',cin='$cin',adresse='$adresse' ,
    telephone='$telephone',login='$login',password='$password'
    where id='$idEn'";
    $result = mysqli_query($idcon, $query);
    
    echo "";
    if ($result) {
       // header('location:loginEle.html');
       echo "update avec succées";
    }
    else {

        echo "nonnn";
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
    


    <form method="POST" action="Updateeleve">
        <fieldset style="width: 500">
            <legend>
                <h2 style="color :#4682B4;"> Modifier</h2>
            </legend>
            <table>
                <tr>
                    <td>
                        <p>Nom *:</p>
                    </td>
                    <td><input type="text" name="nom" size="15" maxlength="30" value="<?php echo $name?>" required><br></td>
               
                    <td>
                        <p>Prénom :</p>
                    </td>
                    <td><input type="text" name="prenom" size="15" maxlength="30"  value="<?php echo $pre?>"required><br></td>
                </tr>



                </tr>
               
                <tr>
                    <td>
                        <p>Date Naissance</p>
                         </td>
                        <td><input type="date" name="datenaissance" size="15" maxlength="30" value="<?php echo $cin?>" required><br></td>
                    </td>
               
                </tr>
                   
                <tr>
                    <td>
                        <p>Adresse</p>
                         </td>
                        <td><input type="text" name="adresse" size="15" maxlength="30" required value="<?php echo $adr?>"><br></td>
                    </td>
               
                    <td><p>Télephone du parent</p></td>
                    <td><input type="text" name="telephone" size="15" maxlength="30"  value="<?php echo $tel?>"required><br></td>
                </tr>



                <tr>
                    <td>
                        <p>login :</p>
                    </td>
                    <td><input type="text" name="login" size="15" maxlength="30" value="<?php echo $log?>"required><br></td>

                    <td>
                        <p>Mot de passe * :</p>
                    </td>
                    <td><input type="password" name="password" size="15" maxlength="30" value="<?php echo $pass?>" required><br></td>
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
