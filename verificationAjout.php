<?php
include_once 'fragment.php' ;
include_once 'autoLoad.php' ;
$usersBD = new usersBD('users') ;

$cin = htmlentities($_POST["cin"]);
$firstname = htmlentities($_POST["firstname"]);
$name = htmlentities($_POST["name"]);
$section = htmlentities($_POST["section"]);
$img =$_FILES['path_img'] ;

if($usersBD->trouver($cin)) {
    include_once 'AjouterPersonne.php';
    ?>
<div class="alert alert-danger" role="alert">
    cette personne existe
</div>
    </div>

<?php
}
else{
    $path_img = 'assets/uploads/'.uniqid() ;
    copy($img['tmp_name'] , $path_img) ;
    $usersBD->ajouterPersonne($cin , $firstname , $name , $section, $path_img);
    header('location: Personne.php');
}

?>
