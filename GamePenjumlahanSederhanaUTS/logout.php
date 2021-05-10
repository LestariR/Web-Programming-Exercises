<?php
session_start();
setcookie("nama", null, time()-1, '/');
setcookie("email", null, time()-1, '/');
session_destroy();
header("Location: index.php");

?>