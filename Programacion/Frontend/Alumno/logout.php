<?php
session_start();
session_destroy();
header("Location: paginaprincipal.php");
?>