<?php
$server='localhost';
$user='root';
$password='';
$dbname='imageupload';

$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn){
    die("Connection error".mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $file=$_FILES['file'];
    $fileName=$_FILES['file']['name'];//getting file name
    $fileTmpName=$_FILES['file']['tmp_name'];//getting temporary file location
    $fileSize=$_FILES['file']['size'];//getting file size
    $fileError=$_FILES['file']['error'];//checking if theres an error if 0 theres no error and 1 an error
    $fileType=$_FILES['file']['type'];//file type ie image,pdf,txt etc
    
    
    $fileExt=explode('.',$fileName);//converting name to an array delimeter is the .
    $fileActualExt=strtolower(end($fileExt));//converting the last item in the extension array to lower case
    
    $allowed=array('jpg','jpeg','png','pdf');//an array of types of files allowed in the website we are creating

    if(in_array($fileActualExt,$allowed)){
        if($fileError===0){
            if($fileSize<500000){
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination='uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                header("location:index.php?uploadsuccess");
            }
            else{
                echo "your file is too big";
            }
        }else{
            echo "there was a problem uploading your file";
        }
    }
    else{
        echo "You cannot upload files of this type"; 
    }

}

?>