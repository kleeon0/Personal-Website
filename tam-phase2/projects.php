<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Creon.jpeg">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="projects.css">
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width:768px)">
    <title>My Projects</title>
    <!--jost font-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--cabin-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--source code-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Jost:ital,wght@0,100..900;1,100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <header>
            <nav class="right">
                    <a href="index.php#myself" class="jost">Home</a>
                    <a href="index.php#about" class="jost">About me</a>
                    <a href="index.php#education" class="jost">Education</a>
                    <a href="index.php#skills" class="jost">Skills</a>
                    <a href="projects.php" class="jost">Projects</a>
                    <a href="contacts.php" class="jost">Contact</a>
                    <a href="viewBlog.php" class="jost">Blog</a>
                    <?php
                        if(isset($_SESSION['UserID'])) {
                            echo "<a href='logout.php' class='jost'>Logout</a>";
                        }
                        
                    ?>
            </nav>
        </header>
        <!--research projects-->
        <h1 class="format cabin" id="title">My Projects</h1>
        <div id="projects">
           <aside id="research_projects" class="center">
            <h1 class="banner cabin">Research projects</h1>
            <section class="projects">
                <details open>
                    <summary class="format source-code">Stock predicting algorithm </summary>
                    <p class="source-code">Using machine learning methods to create an algorithm to predict prices of certain stocks.</p>
                    
                </details>
            </section>
             
            </aside>


            <section id="current_projects" class="center">
                <h1 class="banner cabin">Completed projects</h1>
                <section class="projects">
                    <details open>
                        <summary class="format source-code">Task manager system </summary>
                        <p class="source-code">A program that allows users to record tasks to complete. 
                            Tasks can be managed based on criteria such as: priority, 
                            time needed to complete the task, and deadline. 
                            Or the user can set a repeating task for reviewing and memorising certain skills and information. 
                            Creating tasks will set up a list of tasks that will be assigned to remind the user to complete them on a given day. 
                            On days where there is a task due, the user will have to set up a countdown timer, which they will have to complete.</p>
                        <Strong><a href="https://github.com/kleeon0/Task-Manager" target="_blank" >Learn more</a></Strong>
                    </details>
                </section>
            </section> 
        </div>
        
        <footer>
            <p class="jost">Creon Tam &#169 2024 </p>
        </footer> 
    </div>
    
</body>
</html>