<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bwana chief</title>
</head>
<body>

<?php

$sql="SELECT * FROM user";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $sqlimg="SELECT * FROM userimg where userid='$id'";
        $resultimg=mysqli_query($conn,$sqlimg);
        while ($rowImg=mysqli_fetch_assoc($resultimg)) {
            echo "<div>";
            if($rowImg['s_tatus']==0){
                echo "<img src='uploads/profile".$id.".jpg'>";
            }
            else{
                echo "<img src='uploads/profiledefault.png'>";
            }
            echo $row['username'];
            echo "</div>";
        }
    }
}
else{
    echo "there are no  users inside the database";
}
if(isset($_SESSION['id'])){
   if($_SESSION['id']==1){
    echo "You are logged in as user #1";
   }
   echo ' <form action="connect.php" method="post" enctype="multipart/form-data">
   <input type="file" name="file" id="">
   <button type="submit" name="submit">Upload </button>

</form>';}
else{
    echo "you are logged out";
    echo '<form action="signup.php" method="POST">
    <input type="text" name="first" placeholder="Firsname">
    <input type="text " name="last" placeholder="lastname">
    <input type="text" name="uid" placeholder="username">
    <input type="password" name="pass" placeholder="password">
    <button type="submit" name="SubmitSignup">Signup</button>
</form>';
}

?>
    
    <p>Login as user</p>
    <form action="login.php" method="POST">
        <button type="submit" name="SubmitLogin">Login</button>
    </form>
    <p>Log out as user</p>
    <form action="logout.php" method="POST">
        <button type="submit" name="SubmitLogout">Logout</button>
    </form>
</body>
</html>