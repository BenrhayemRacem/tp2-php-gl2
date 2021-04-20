<?php
$title = 'Ajouter_Personne' ;
include_once 'session.php' ;
include_once 'fragment.php' ;
include_once 'autoLoad.php';

?>

<div class="container">
<form action="verificationAjout.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <input name="cin" type="text" class="form-control" placeholder="CIN" required  size="45" pattern="[a-zA-Z0-9]{1,100}">
        </div>

    </div>
    <div class="row">
        <div class="col">
            <input name="firstname" type="text" class="form-control" placeholder="FirstName" size="45" required pattern="[a-zA-Z]{1,100}">
        </div>
        <div class="col">
            <input  name="name" type="text" class="form-control" placeholder="Name" size="45" required pattern="[a-zA-Z]{1,100}">
        </div>

    </div>
    <div class="row">
        <div class="col">
            <input name="section" type="text" class="form-control" placeholder="Section"size="45" required pattern="[a-zA-Z0-9]{1,100}">
        </div>
        <div class="col">
        <input  name="path_img" type="file" class="form-control" placeholder="img" required>
        </div>
    </div>
    <button type="submit" class="btn btn-success btn-block">ajouter</button>
</form>

        <a href="Personne.php" class="btn btn-secondary btn-lg btn-block active" role="button" aria-pressed="true">retour a la liste</a>

</div>


</body>
</html>
