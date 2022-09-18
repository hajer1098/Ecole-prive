<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>

<head>
   <title>EVERNOTE PAGE</title>
   <meta charset="UTF-8">
   <meta name="application-name" content="evernote">
   <meta name="description" content="best note taking app">
   <meta name="keywords" content="notetaking,evernote">
   <meta name="author" content="veena shree">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <style>
      @import url('https://fonts.googleapis.com/css?family=Lato');

      body {
         font-family: 'Lato', sans-serif;
         background-color: #ffffff;
      }

      header {
         max-height: 130px;
      }

      .heading {
         padding: 0px;
         margin-top: 0px;
      }

      .home {
         margin-left: 71px;
      }

      .navbar-header.logo {
         margin-top: 30px;
      }

      ul.nav.navbar-nav {
         margin-top: 40px;
      }

      a:hover {
         color: #E7C809;
      }

      a {
         color: #ffffff;
         text-decoration: none;
         font-weight: bold;
      }

      .login-wrapper {

         margin-top: 46px;
      }

      .sign {

         color: green;
         margin-right: 15px;
         font-weight: 100;
         font-size: 16;
      }

      .btn-default {
         color: #fff;;
         background-color: #fff;
      }

      .log-btn {
         margin-right: 50px;
         margin-left: 20px;
         width: 121px;
         border: solid green 2px;
         color: green;
      }

      .bg-color {
         background-image: url("https://evernote.com/img/backgrounds/patterns/main-green.png");
         background-repeat: repeat;
      }

      .bg-color.green {
         background-color: #098b2c;
      }

      .content-wrapper {
         height: 618px;
      }

      .font {

         display: block;
         font-size: 56px;
         line-height: 72px;
         color: white;
      }

      .description {

         font-size: 24px;
         line-height: 40px;
         margin-bottom: 35px;
         color: white;
      }

      .arrange-content {
         padding-top: 128px;
      }

      .left-pad {
         padding-left: 65px;
      }

      .laptop {
         width: 91.7%;
      }

      .image {
         display: inline-block;
      }

      .design {
         color: rgb(7, 73, 7);
         width: 242px;
         height: 57px;
         font-weight: bold;
      }

      .navbar-default {
         background-color: #02b611;

      }

      @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) {
         .font {
            font-family: 'Lato', sans-serif;
            display: block;
            font-size: 25px;
            line-height: 36px;
            color: white;
         }

         .laptop {
            display: none;
         }
      }

      h2 {
         font-family: Aharoni;
         color: #D65163;
      }

      .jumbotron {
         height: 400px;

         width: 600px;
         margin-left: 30px;
      }

      h4 {
         color: #000000;
      }

      .lienL {
         color: #000000;
      }

      .lienL:hover {
         color: #0f9e2e;
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

            <div class="login-wrapper pull-right">
              
               <button type="button" class="btn btn-default btn-md log-btn">Log out</button>
            </div>
         </div>
      </nav>
   </header>

<body>
<body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
            
                session_start();
                
               

                if($_SESSION['login'] !== ""){
                   
                    $user = $_SESSION['login'];
                    $h=  $_SESSION['password'];
        
                    // afficher un message
                    
                    echo "Bonjour $user,  vous êtes connecté";
                    echo "Bonjour $h,  vous êtes connecté";
          

                    
                }
            ?>
         <br> 
         photo 
         <center>
     <table> 
         <tr>
         <td><img src="images/eleves.png" width="50" height="50"></td> <td><p><a href="ListeEleve.php">Gerer les eleves</p></td>
         <td><img src="images/enseignants.png" width="50" height="50"></td> <td><p><a href="ListeEnseignant.php">Gerer les enseignants</a></p></td>
         
          

         </tr>
     </table>
        </center>
           

        </div>


        
            
        </div>
   

</body>

</html>