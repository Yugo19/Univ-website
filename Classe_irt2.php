<?php include("server#1.php") ?>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Classe IRT2</title>
</head>
<body>
 <div class="Lesson2">
     <div class="Titre">
         <?php
         $name = $session['name'];
          $query ="SELECT FROM classe WHERE Teacher_Name ='$name' ";
           $result = mysqli_query($con,$query);
           if($row = $result -> num_rows > 0){
            echo"<h2>".$row["Teacher_Name"]."</h2>";
           }
         ?>
     </div>
     <form action="">
         <input type="file" name="files" id="">
         <input type="submit" value="Send">
     </form>
 </div>          

    
</body>
</html>