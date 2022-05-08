<?php
include 'connect.php';
$first=$_POST['f_irst'];
$last=$_POST['l_ast'];
$username=$_POST['uid'];
$pass=$_POST['pass'];

$sql="INSERT INTO user(f_irst,l_ast,username,p_assword) VALUES ('$first','$last','$username','$pass')";
$result=mysqli_query($conn,$sql);
$sql="SELECT *FROM  user WHERE username='$username' AND f_irst='$first'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $userid=$row['id'];
        $sql ="INSERT INTO userimg (userid,s_tatus) VALUES ('$userid',1)";
        $resultimg=mysqli_query($conn,$sql);
        header("Location:index.php");
    }
}
else{
    echo "You have an error";
}
?>