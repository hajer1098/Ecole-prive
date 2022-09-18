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
         background-color:#2D9403 ;

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
               src="images/imtiyez.jpg" width="70" height="70"
               alt="logo" class="pull-left">
               <a class="navbar-brand" href="#">
                  <h2 class="heading"><b>AL Imtiyez</b></h2>
               </a>
            </div>
            <ul class="nav navbar-nav">
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="lienL">EMPLOIS DES GROUPES <span
                        class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="#">BASIC</a></li>
                     <li><a href="#">BUSINESS</a></li>
                     <li><a href="#">PREMIUM</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"> About us <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="#">WEB CLIPPER</a></li>
                     <li><a href="#">SPACES</a></li>
                     <li><a href="#">TEMPLATES</a></li>
                     <li><a href="#">INTEGRATIONS</a></li>
                  </ul>
               </li>
               <li><a href="#">HELP & LEARNING</a></li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT US <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="#">ABOUT EVERNOTE</a></li>
                     <li><a href="#">PRESS</a></li>
                     <li><a href="#">INCLUSION & DIVERSITY</a></li>
                     <li><a href="#">CAREERS</a></li>
                     <li><a href="#">CONTACT US</a></li>
                  </ul>
               </li>
               <li><a href="#">CONTACTS</a></li>
            </ul>
            <div class="login-wrapper pull-right">
               <a class="sign" href="#">Sign up </a>
               or
               <button type="button" class="btn btn-default btn-md log-btn">Log In</button>
            </div>
         </div>
      </nav>
   </header>


   <center>
      <br><br>
      <h2>Se connecter</h2>

      <hr width="1200" >
      <center>
         <div class="jumbotron" >
            <h4>Choisir le type de compte:</h4>
            <br>
            <br>
            <table>
               <tr>
                  <td> <img src="images/ens.png" width="70" height="70"></td>
      
                  <td> <a class="lienL" href="loginAdmin.html">Espace Admin</a> </td>
      
               </tr>
               <tr>
                  <td> <img src="images/ens.png" width="70" height="70"></td>
      
                  <td> <a class="lienL" href="loginEnse.html">Espace Enseignant</a> </td>
      
               </tr>
               <tr>
                  <td> <img src="images/ele.png" width="70" height="70"></td>
                  <td> <a class="lienL" href="loginEle.html">Espace Eléve</a></td>
               </tr>
             
            </table>
         </div>
         </div>
      </center>
   </center>


</body>

</html>