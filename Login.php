<?php 
$Idmail=$_POST["idmail"];
$Serie=$_POST["serie"];
session_start();
$conn = mysqli_connect("localhost","root","","studentdata");

$Idmail = stripcslashes($Idmail);
$Serie = stripcslashes($Serie);
$Idmail = mysqli_real_escape_string($conn,$Idmail);
$Serie = mysqli_real_escape_string($conn,$Serie);

if(!empty($Idmail)){
$query = "SELECT * FROM registry WHERE Email = '$Idmail' AND Series = '$Serie'";
$result = mysqli_query($conn,$query);
 if(mysqli_num_rows($result)){
        header("Location: GIT.php?user_id=".$Idmail);
    }
$_SESSION['Email'] = $Idmail;
 }else{
     echo "echec de connexion";
 }
?>