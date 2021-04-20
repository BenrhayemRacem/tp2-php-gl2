<?php
$title = "Personne Liste" ;
include_once 'session.php';
include_once 'autoLoad.php' ;
include_once 'fragment.php' ;

$usersBD = new usersBD('users') ;
$personList=$usersBD->getAllUsers() ;

?>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">CIN</th>
        <th scope="col">FirstName</th>
        <th scope="col">Name</th>
        <th scope="col">Section</th>
        <th scope="col">img</th>
    </tr>
    </thead>
    <tbody>
 <?php
foreach ($personList as $key) {
    ?>
    <tr>
        <td><?= $key->cin ?></td>
        <td><?= $key->firstname ?></td>
        <td><?= $key->name ?></td>
        <td><?= $key->section ?></td>
        <td><img src=<?= $key->path_img?> alt="" class="img-thumbnail" width="50px"></td>

    </tr>
<?php
}

?>




</tbody>
</table>
<div class="row">

<div class="col-6">
    <a href="AjouterPersonne.php" class="btn btn-success btn-lg btn-block active" role="button" aria-pressed="true">ajouter personne</a>
</div>
    <div class="col-6">
<a href="SuprimerPersonne.php" class="btn btn-danger btn-lg btn-block active" role="button" aria-pressed="true">supprimer personne</a>
    </div>

    </div>
<div class="row ">
    <a href="logout.php" class="btn btn-secondary btn-lg btn-block active" role="button" aria-pressed="true">logout</a>
</div>

</body>
</html>
