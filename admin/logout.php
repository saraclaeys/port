<?php require_once ("includes/login-header.php"); ?>

<?php
$session->logout();
redirect("login.php");
?>
