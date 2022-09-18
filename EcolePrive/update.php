<?php
include("connexion.php");


if (isset($_POST['update'])) {
  $id = $_POST['id_eleve'];
  $nom= $_POST['nom'];
  $prenom= $_POST['prenom'];
  $datenaiss= $_POST['datenaissance'];
  $adresse= $_POST['adresse'];
  $telephone= $_POST['telephone'];
  $login= $_POST['login'];
  $password= $_POST['password'];



  $query = "UPDATE eleve set id_eleve = '$id', nom = 'nom',prenom = '$prenom',datenaissance = '$datenaiss',adresse = '$adresse',telephone = '$telephone' ,login = '$login',password = '$password' WHERE id_eleve=$id";
  mysqli_query($idcon, $query);
 // $_SESSION['message'] = 'Task Updated Successfully';
  //$_SESSION['message_type'] = 'warning';
 
}

?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="update.php?id_eleve=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nom" type="text" class="form-control" value="<?php echo $nom; ?>>
        </div>
        <div class="form-group">
        <input name="prenom" class="form-control" ><?php echo $prenom;?>>

        <div class="form-group">
          <input name="datenaissance" type="date" class="form-control" value="<?php echo $datenaiss; ?>  >
        </div>
        <div class="form-group">
          <input name="adresse" type="text" class="form-control" value="<?php echo $adresse; ?>>
        </div>
        <div class="form-group">
          <input name="telephone" type="text" class="form-control" value="<?php echo $telephone; ?> >
        </div>
        <div class="form-group">
          <input name="login" type="text" class="form-control" value="<?php echo $login; ?>>
        </div>
        <div class="form-group">
          <input name="password" type="password" class="form-control" value="<?php echo $password; ?>>
        </div>
        <button class="btn-success" name="update">
          Update
         </button>
      </form>
      </div>
    </div>
  </div>
</div>
