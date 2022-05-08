<?php
session_start();

session_unset();//unsets all the variables in our session variable
session_destroy();
header("Location:index.php");
?>