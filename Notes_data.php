<?php 
$conn = mysqli_connect("localhost", "root", "", "study");
$data_get= mysqli_query($conn, "SELECT Nom, Series, Mathematics, Algirthm, Physics FROM notes");


$rows = array();
while($row = mysqli_fetch_array($data_get)){
    $rows[] = $row;
  }
    echo json_encode($rows);
?>