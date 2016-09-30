<?php
//session_start();
unset($_SESSION['login']);
//session_destroy();
header("Location: cms_login.php");
?>