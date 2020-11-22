<?php include("Notes_data.php")?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Study-Website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link rel="stylesheet" href="styles.css"> 
    </head>
    <body>
        <div class="Logo-Moto">
   
          <div class="Name">
              Université privée Mary Saint Claire
          </div>
      
      </div>
        <div class="Container">
            <div class="nav-wrapper">
                <div class="left-side">
                    <div class="nav-link-wrapper ">
                     <a href="main-page.html">Accueil</a>
                       </div>
                       <div class="nav-link-wrapper ">
                        <a href="Lesson.html">Lesson</a>
                          </div>
                    <div class="nav-link-wrapper ">
                     <a href="about.html">A propos</a>
                       </div>
                         </div>
                    <div class="right-side">
                     <a href="Notes.php">Logged</a>
                         </div>
            </div>
           </div>
           <div class="content" >
              <div class="student_name">
                 <?php 
                 
                 $query = "SELECT student_first_name, student_last_name FROM Notes";

                 $result = mysqli_query($con,$query);
                  if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                      echo"<h2>". $row["student_first_name"]."</h2>";
                      echo"<h1>".$row["student_last_name"]."</h1>";
                    }
                  }

                 ?>
              </div>
              <div  class="student_grade">
                <table id ="student_grade align ="center">
                  <th>Mathematique</th>
                  <th>Physique</th>
                  <th>Anglais</th>
              <?php 
                 
                 $query = "SELECT Mathematiques, Physique, Anglais FROM Notes";

                 $result = mysqli_query($con,$query);
                  if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                      echo"<tr><td>". $row["Mathematiques"]."</td><td>". $row["Physique"]."</td><td>". $row["Anglais"]."</td></tr>";
                    }
                  }
                 ?>
                </table>
              </div>
           </div>
    </body>
</html>