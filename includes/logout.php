<?php session_start() ?>
<?php

$_SESSION["db_id_user"] = null;
$_SESSION["db_nom"] = null;
$_SESSION["db_prenom"] = null;
$_SESSION["db_email"] = null;
$_SESSION["db_telephone"] = null;
$_SESSION["db_paswored"] = null;





header("location: ../index.php")

?>