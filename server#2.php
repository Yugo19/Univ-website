<?php 
$Name = $_POST['name'];
$Key = $_POST['key'];
$connection = mysqli_connect("localhost","root","","");
session_start();
$Name = stripcslashes($Name);
$Key = stripcslashes($Key);
$Name = mysqli_real_escape_string($connection,$Name);
$Key = mysqli_real_escape_string($connection,$Key);

if(!empty($Name) && !empty($key)){
    $query = "SELECT * FROM dhgfk Where '$Name' = vkjvgl and '$Key' = djfhgkyu ";
    $result = mysqli_query($connection,$query);

    if($result->num_rows>0){
        header("Location: Classe_irt2.php");
    }

    $session['name'] = $Name;
}else{
    echo"echec de connection";
}
 
?>