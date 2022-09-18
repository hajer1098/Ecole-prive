 <?php
 
 if (isset($_POST['submit'])) 
{
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  
    include('connexion.php');


    $query = ("insert into message ( nom,email,message)values('$nom', '$email',' $message')");
    $result = mysqli_query($idcon, $query);
     
  
    if ($result) {
  
        echo "<script>alert(\"Message envoyé avec succés\")</script>";
     
    }
    else {
        echo "echec d'envois";

      header('location:addcours.php');
    }

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
        <style>
    /* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 500px;
}
.navbar-default {
        
        
        margin-top: 1em;

     }
    </style>
    </head>
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
  
    <center>
<div class="container">
  <form  method="POST" action="sendMessage.php">

    <label for="fname">Nom</label> 
    <input type="text"  name="nom" id="fname" name="firstname" placeholder="Your name.." required&>

   
  
    <label for="lname">Email</label>
    <input type="text"  name="email" id="lname" name="lastname" placeholder="exemple@gmail.com" required>

    
    <label for="subject">Message</label>
    <textarea id="subject" name="message" placeholder="ecrire quelque chose..."style="height:200px" required></textarea>

    <input type="submit" value="Submit" name="submit">

  </form>
</div>
<a href="principaleEnseignant.php">
      <img src="images/back.png" width="20" height="20" alt="retourner " title="retourner">   </img>
      </a>
    </center>
    
</body>
</html>