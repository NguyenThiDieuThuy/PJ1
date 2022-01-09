<?php
unset($_SESSION['user']);
session_destroy();
header("Location:index.php?module=common&action=login");
?>