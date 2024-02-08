<?php
session_start();

unset($_SESSION["login"]);
unset($_SESSION["firstname"]);
unset($_SESSION["lastname"]);
unset($_SESSION["user_id"]);

session_destroy();

header("Location: index.php");
exit();
?>
