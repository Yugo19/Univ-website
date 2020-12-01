<?php include('files.php'); ?>
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
                <a href="Notes.php"><?php echo $_SESSION['Email']; ?></a>
            </div>
        </div>
    </div>
    <div class="offline-content">
      <div class="files_table" >
        <table align  ="center" cellpadding = "5" cellspacing = "5" border="1">
            <tr>
                <th>Names</th>
                <th>Files</th>
            </tr>

        <?php  
            $files = scandir('files',1);
            $directory = '/files';

                foreach ($files as $file) {
                    if($file!='.' && $file!=".."){
                    echo"<tr><td>". $file."</td><td>". '<a href= " '.$directory. '/'.$file.'">'.$file.'</a>'."</td></tr>";
                    }
                }
         echo "</table>";
        
   ?>
        </table>
    </div>
    </div>

</body>

</html>
</html>