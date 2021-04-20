<?php

$title="welcome" ;
include_once 'fragment.php' ;
include_once 'autoLoad.php' ;

?>
<link rel="stylesheet" href="assets/styling/indexStyle.css">
<div class="container">
    <div class="row">welcome to our website</div>
</div>
<div class="container">
    <form action="processLogin.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">username</label>
            <input placeholder="username must only contain a-z ,A-Z or 0-9"  type="text" class="form-control" id="login" name="login" aria-describedby="emailHelp" size="45" required pattern="[a-zA-Z0-9]{1,100}">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input  placeholder="password must only contain a-z ,A-Z or 0-9" type="password" class="form-control" id="mdp" name="mdp" size="45" required pattern="[a-zA-Z0-9]{1,100}">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>






</div>


</body>
</html>
