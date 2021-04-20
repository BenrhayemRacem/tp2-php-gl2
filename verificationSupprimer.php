<?php
include_once 'fragment.php' ;
include_once 'autoLoad.php' ;
$usersBD = new usersBD('users') ;

$cin = htmlentities($_POST["cinSupp"]);

if($usersBD->trouver($cin)) {
    $usersBD->supprimerPersonne($cin) ;
    header('location: Personne.php');
}
else {
    include_once 'SuprimerPersonne.php';
    ?>

<div class="alert alert-danger" role="alert">
    cette personne n'existe pas
</div>

<?php
}

?>