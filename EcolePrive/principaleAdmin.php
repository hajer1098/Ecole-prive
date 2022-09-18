

<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <style>
        body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
        </style>
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
         <td><img src="images/enseignants.png" width="50" height="50"></td> <td><p><a href="listeTouscours.php">Gerer les cours</a></p></td>
         
          

         </tr>
     </table>
        </center>
           

        </div>


        
            
        </div>
    </body>
</html>