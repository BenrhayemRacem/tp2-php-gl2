<?php
$title = 'Supprimer_Personne' ;
include_once 'session.php';
include_once 'fragment.php' ;
include_once 'autoLoad.php';

?>

<div class="container">
    <div class="row justify-content-center">
        donner le cin du personne à supprimer
    </div>
    <form action="verificationSupprimer.php" method="post">
<div class="row">

        <input name="cinSupp" type="text" class="form-control" placeholder="CIN" size="45" required pattern="[0-9]{1,100}">


</div>
        <button type="submit" class="btn btn-danger btn-block">supprimer d'une maniere definitive</button>
    </form>
    <div class="row">
        <a href="Personne.php" class="btn btn-secondary btn-lg btn-block active" role="button" aria-pressed="true">retour a la liste</a>
    </div>
</div>


</body>
</html>
