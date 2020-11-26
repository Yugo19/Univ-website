<?php include("Notes_data.php")?>
<?php session_start(); ?>
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
                    <div class="right-side active-nav-link">
                     <a href="Notes.php"><?php echo $_SESSION['Email'];  ?></a>
                         </div>
            </div>
           </div>
           <div class="content" >
              <div class="student_name">
                 <?php 
                 $email = $_SESSION['Email'];
                 $query = "SELECT student_first_name, student_last_name FROM notes WHERE Email = '$email'";

                 $result = mysqli_query($con,$query);
                  if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                      echo"<h2>". $row["student_first_name"]."</h2>";
                      echo"<h1>".$row["student_last_name"]."</h1>";
                    }
                  }
                 ?>
              </div>
              </div>
              <div class="Lesson">
              <div class="Lesson-container">
                <div class="Lesson-data">Mathémaques</div>
                <div class="math-homework">
                  <ul>
                    <li>Analyse</li>
                  </ul>
                  <div class="file_upload">
                    <form action="Test.php" method="Post"></form>
                    <input type="file" name="file">
                    <input type="submit" name="submit">
                  </div>
                </div>
                </div>
             <div class="Lesson-container">
                <div class="Lesson-data">Mathémaques</div>
                <div class="math-homework">
                  <ul>
                    <li>Analyse</li>
                  </ul>
                </div>
                </div>

             <div class="Lesson-container">
                <div class="Lesson-data">Mathémaques</div>
                <div class="math-homework">
                  <ul>
                    <li>Analyse</li>
                  </ul>
                </div>
                </div>
                <div class="Lesson-container">
                <div class="Lesson-data">Mathémaques</div>
                <div class="math-homework">
                  <ul>
                    <li>Analyse</li>
                  </ul>
                </div>
                </div>
             <div class="Lesson-container">
                <div class="Lesson-data">Mathémaques</div>
                <div class="math-homework">
                  <ul>
                    <li>Analyse</li>
                  </ul>
                </div>
                </div>

             <div class="Lesson-container">
                <div class="Lesson-data">Mathémaques</div>
                <div class="math-homework">
                  <ul>
                    <li>Analyse</li>
                  </ul>
                </div>
                </div>
                </div>
    
    </body>
</html>