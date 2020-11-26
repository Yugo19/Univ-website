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
        <div class="Logo">
            <div class="Main-Logo">
                <img src="UPMSC.png" height="125px" width="100px">
            </div>
            <div class="Second-Logo">
                <!--  <img src="Logo.JPG" ></div>-->
            </div>
        </div>
        <div class="Name">
            Université privée Mary Saint Claire
        </div>
        <div class="Moto">
            La formation d'aujourdhui la reussite de demain
        </div>
    </div>
    <div class="Container">
        <div class="nav-wrapper">
            <div class="left-side">
                <div class="nav-link-wrapper ">
                    <a href="main-page.html">Accueil</a>
                </div>
                <div class="nav-link-wrapper ">
                    <a href="about.html">A propos</a>
                </div>
            </div>  

            <div class="right-side active-nav-link">
                <a href=""><?php echo $_SESSION['Email']; ?></a>
                <ul>
                <li>Loggout</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="content">
        <div class="main-container" id="fr">
            <div class="items-container">
                <div class="item-container">
                    <a href="offline_course.php">
                        <div class="backgroung-image" style="background-image: url(offline.jpg)">

                            <div class="text-logo">
                                <div class="logo">
                                    <img src="Enregistrer.png" alt="">
                                </div>

                                <div class="text">
                                    Cours Enregistrer
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item-container">
                    <a href="online-classes.php">
                    <div class="backgroung-image" style="background-image: url(online-education.JPEG)">

                        <div class="text-logo">
                            <div class="logo">
                                <img src="videocall.png" alt="">
                            </div>

                            <div class="text">
                                cours en ligne
                            </div>
                        </div>
                    </div>
                     </a>
                </div>
                <div class="item-container">

                    <a href="resultat.php">
                        <div class="backgroung-image" style="background-image: url(Notes.jpg)">

                            <div class="text-logo">
                                <div class="logo">
                                    <img src="notes.png" alt="">
                                </div>

                                <div class="text">
                                    Notes
                                </div>
                            </div>
                        </div>
</a>
                </div>

            </div>

        </div>


    </div>
</body>

</html>