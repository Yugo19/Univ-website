<?php 
$Idmail=$_POST["idmail"];
$Serie=$_POST["serie"];

$conn = mysqli_connect("localhost","root","","studentdata");

$Idmail = stripcslashes($Idmail);
$Serie = stripcslashes($Serie);
$Idmail = mysqli_real_escape_string($conn,$Idmail);
$Serie = mysqli_real_escape_string($conn,$Serie);

if(!empty($Idmail)){
$query = "SELECT * FROM registry WHERE Email = '$Idmail' AND Series = '$Serie'";
$result = mysqli_query($conn,$query);
 if(mysqli_num_rows($result)){
    if($Serie =="GIT"|| $Serie == "git"){
        header("Location: GIT.html");
    }elseif($Serie =="IG" || $Serie =="ig"){
        header("Location: IG.html");
    }

 }else{
 echo "echec de connexion";
 }

}
?>