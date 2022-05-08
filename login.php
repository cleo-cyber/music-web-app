<?php
session_start();
if (isset($_POST['SubmitLogin'])) {
    $_SESSION['id']=1;
    header("Location:index.php");
}

?>