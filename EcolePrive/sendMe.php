<html>
    <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body{margin-top:20px;}
.icon-box.medium {
    font-size: 20px;
    width: 50px;
    height: 50px;
    line-height: 50px;
}
.icon-box {
    font-size: 30px;
    margin-bottom: 33px;
    display: inline-block;
    color: #ffffff;
    height: 65px;
    width: 65px;
    line-height: 65px;
    background-color: #59b73f;
    text-align: center;
    border-radius: 0.3rem;
}
.social-icon-style2 li a {
    display: inline-block;
    font-size: 14px;
    text-align: center;
    color: #ffffff;
    background: #59b73f;
    height: 41px;
    line-height: 41px;
    width: 41px;
}
.rounded-3 {
    border-radius: 0.3rem !important;
}

.social-icon-style2 {
    margin-bottom: 0;
    display: inline-block;
    padding-left: 10px;
    list-style: none;
}

.social-icon-style2 li {
    vertical-align: middle;
    display: inline-block;
    margin-right: 5px;
}

a, a:active, a:focus {
    color: #616161;
    text-decoration: none;
    transition-timing-function: ease-in-out;
    -ms-transition-timing-function: ease-in-out;
    -moz-transition-timing-function: ease-in-out;
    -webkit-transition-timing-function: ease-in-out;
    -o-transition-timing-function: ease-in-out;
    transition-duration: .2s;
    -ms-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -webkit-transition-duration: .2s;
    -o-transition-duration: .2s;
}

.text-secondary, .text-secondary-hover:hover {
    color: #59b73f !important;
}
.display-25 {
    font-size: 1.4rem;
}

.text-primary, .text-primary-hover:hover {
    color: #ff712a !important;
}

p {
    margin: 0 0 20px;
}

.mb-1-6, .my-1-6 {
    margin-bottom: 1.6rem;
}
.navbar-default {
        
        
         margin-top: 1em;

      }
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

</style>
</head>
<body>
<header>
      <nav class="navbar-default ">
         <div class="container-fluid">
            <div class="navbar-header logo">
               <img
                  src="https://lh3.googleusercontent.com/-k6lq2mJFWAU/W6iyXfJ6EGI/AAAAAAAAACI/VP1FFXPhG5wEV3RXIPXtZE4_y5na6HzxQCL0BGAYYCw/h68/evernote%2Blogo.PNG"
                  alt="logo" class="pull-left">
               <a class="navbar-brand" href="#">
                  <h2 class="heading"><b>Evernote</b></h2>
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
            <div class="card border-0 shadow">
                <img src="https://www.bootdey.com/img/Content/avatar/avatar6.png" alt="...">
                <div class="card-body p-1-9 p-xl-5">
                    <div class="mb-4">
                        <h3 class="h4 mb-0">Dakota Johnston</h3>
                        <span class="text-primary">CEO &amp; Founder</span>
                    </div>
                    <?php
                     
            
                     session_start();
                     
                    
     
                     if($_SESSION['login'] !== ""){
                        
                         $user = $_SESSION['login'];
 
             
                         // afficher un message
                         
                       
                    
  
               
                 
                         
                     }
                 
                     ?>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3"><a href="#!"><i class="far fa-envelope display-25 me-3 text-secondary"></i><?php echo "Bonjour $user,  vous êtes connecté";?></a></li>
                        <li class="mb-3"><a href="#!"><i class="fas fa-mobile-alt display-25 me-3 text-secondary"></i><?php echo "Bonjour ,  vous êtes connecté";?></a></li>
                        <li><a href="#!"><i class="fas fa-map-marker-alt display-25 me-3 text-secondary"></i>205 Main Street, USA</a></li>
                    </ul>
                    <ul class="social-icon-style2 ps-0">
                        <li><a href="#!" class="rounded-3"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#!" class="rounded-3"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#!" class="rounded-3"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#!" class="rounded-3"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="ps-lg-1-6 ps-xl-5">
                <div>
                
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
        echo "message envoyer";
       // header('location:principaleEnseignant.php');
    }
    else {
        echo "echec d'envois";

        //header('location:addcours.php');
    }

}

?>
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
            
                </div>
            </div>
        </div>
    </div>
</div>
<body>
<html>