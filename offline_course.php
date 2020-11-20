<?php include('files.php'); ?>
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
                <a href="Notes.php">Login</a>
            </div>
        </div>
    </div>
    <div class="content">
      <div class="files_table" >
        <table align  ="center" cellpadding = "5" cellspacing = "5" border="1">
            <tr>
                <th>Names</th>
                <th>Files</th>
            </tr>

        <?php  
         $cmd = "SELECT files_names, files from files";
         $result = mysqli_query($conn,$cmd);
        if ($result->num_rows > 0) {
           while ($row = $result-> fetch_assoc()) {
            echo"<tr><td>". $row['files_names']."</td><td>". $row['files']."</td></tr>";
        }
         echo "</table>";
        }
   ?>
        </table>
    </div>
    </div>

</body>

</html>
</html>