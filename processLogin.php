<?php
session_start() ;
include_once 'autoLoad.php' ;
include_once  'session.php' ;

$login = $_POST["login"] ;
$mdp =$_POST["mdp"] ;
$adminBD = new adminBD("admin") ;
$authenticated = $adminBD->getAdmin($login,$mdp) ;


if($authenticated) {
   header('location: Personne.php');
   $_SESSION['user'] = $authenticated->login ;
}
else{

   include_once 'index.php' ;

    ?>
    <div class="alert alert-danger" role="alert">
        please verify your informations
    </div>


<?php  }
   ?>


