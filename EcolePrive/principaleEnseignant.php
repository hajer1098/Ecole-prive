<?php
session_start();



if ($_SESSION['login'] !== "") {

    $user = $_SESSION['login'];
    $adresse = $_SESSION['adresse'];
    $prenom = $_SESSION['prenom'];
    $telephone = $_SESSION['telephone'];
    $nom = $_SESSION['nom'];


// afficher un message







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
body{margin-top:20px;
background-color:#F3F3F3  ;
}
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
      .gere{color:#0865A7 ;}

      table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 5px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }


            </style>

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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
            <div class="card border-0 shadow">
                <img src="images/profileicon" width="350"  hight="350" alt="...">
                <div class="card-body p-1-9 p-xl-5">
                    <div class="mb-4">
                        <h3 class="h4 mb-0"><?php echo "$nom"; ?> <?php echo "$prenom"; ?></h3>
                      
                    </div>
                      
                



                    <ul class="list-unstyled mb-4">
                        <li class="mb-3"><a href="#!"><i class="far fa-envelope display-25 me-3 text-secondary"></i><?php echo "$prenom"; ?></a></li>
                        <li class="mb-3"><a href="#!"><i class="fas fa-mobile-alt display-25 me-3 text-secondary"></i><?php echo "$telephone"; ?></a></li>
                        
                       
                        <li><a href="#!"><i class="fas fa-map-marker-alt display-25 me-3 text-secondary"></i><?php echo "$adresse"; ?></a></li>
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
                    <table>
                       <tr>
                           <td><h3 style="text-align:right";> votre score : 150 </h3></td>
                        </tr>
                    </table>
              
<hr width="500" size="16"> 
<br>
<br>

<br>
<br>
   <a href="CoursEnseignant.php" > Consuler vos Cours </a>


                </div>
               
                </div>
            </div>
        </div>
    </div>
</div>
<body>
<html>