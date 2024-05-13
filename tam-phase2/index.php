<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Webpage</title>
    <link rel="icon" href="images/Creon.jpeg">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width:768px)">
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
    <div class="grid-container">
        <!--header navigation tab-->
        <header id="header">
            <nav class="right">
                    <a href="#myself" class="jost">Home</a>
                    <a href="#about" class="jost">About me</a>
                    <a href="#education" class="jost">Education</a>
                    <a href="#skills" class="jost">Skills</a>
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

        <!--main content-->

        <!--myself-->
        <article  id="myself">
            <span class="center">
            <h1 class="cabin">Hello(){</h1>
            <p class="format cabin">	&nbsp; 	&nbsp; 	&nbsp; 	&nbsp; &nbsp;Hi, I'm Creon. Welcome to my personal webpage.</p>
            <h1 class="cabin">}</h1>
            <br>
            <ul id="socials">
                <li><a href="mailto:ec23982@qmul.ac.uk"><img src="images/email_icon.png" alt="email"></a></li>
                <li><a href="https://github.com/kleeon0?tab=overview&from=2023-11-01&to=2023-11-12" target="_blank"><img src="images/github_icon.png" alt="github"></a></li>
                <li><a href="https://www.linkedin.com/in/creon-tam-ab428029b?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BdY5xPIj2RgaEXQnw%2BYM6Mg%3D%3D" target="_blank"><img src="images/linkedin_icon.png" alt="linkedin"></a></li>
                <li><a href="https://www.instagram.com/creon.tamm/" target="_blank"><img src="images/instagram_icon.png" alt="Instagram"></a></li>
            </ul>
            </span>
            <figure>
                <img src="images/Creon.jpeg" alt="" id="self_img">
            </figure>
        </article>

        <!--about me-->
        <div id="about" class="center">
            <h1 class="cabin">/*About me*/</h1>
            <p class="cabin">BSC 1st year student at Queen Mary Univeristy of London studying Computer Science.</p>
            <br>
            <p class="cabin">I am passionate about technology and software development. My hobbies include coding, 3D modelling, and learning. My professional goal is to become a software engineer.</p>
        </div>

        <!--skills-->
        <div  class="center" id="skills">
            <h1 class="cabin" id="title">Skills</h1>
            <div class="skills_grid">
                <div id="frontend">
                    <h1 class="cabin">Front-end</h1>
                    <ul>
                        <li><p class="format source-code"> 	&gt;&gt;HTML</p></li>
                        <li ><p class="format source-code"> 	&gt;&gt;CSS</p></li>
                        <li ><p class="format source-code"> 	&gt;&gt;Javascript</p></li>
                    </ul>
                </div>
                
                <div id="backend">
                    <h1 class="cabin">Back-end</h1>
                    <ul>
                        <li class="format source-code">	&gt;&gt;Java</li>
                        <li class="format source-code">	&gt;&gt;Python</li>
                        <li class="format source-code">	&gt;&gt;C</li>
                        <li class="format source-code">	&gt;&gt;MySQL</li>
                        <li class="format source-code">	&gt;&gt;PHP</li>
                    </ul>
                </div>
                <div id="other_skills">
                    <h1 class="cabin">Other skills</h1>
                    <ul>
                        <li class="format source-code">	&gt;&gt;Google Suite</li>
                        <li class="format source-code">	&gt;&gt;Adobe</li>
                        <li class="format source-code">	&gt;&gt;Project Management</li>
                    </ul>
                </div>
            </div>
        </div>

        <!--education-->
        <div id="education" class="center">
            <h1 class="cabin">Education and Experience</h1>
            <br>
            <div>
            <h2 class="cabin">2023 - Present  -  Queen Mary University of London:</h2>
            <p class="format jost"> BSC 1st year student in EECS studying computer science</p>
            <h2 class="cabin">2010 - 2023  -  Shatin College:</h2>
            <p class="format jost"> International Baccalaureate Diploma Programme & International GCSE</p>
            <p class="format jost"> 2021 - CISXIDEAS Hackathon Top 5 finalists</p>
            <p class="format jost"> 2021 - ESF COCO Hackathon</p>
            <p class="format jost"> 2021 - Liason/financial representative of STCXImpactHK</p>
            </div>
        </div>

        <!--footer-->
        <footer>
            <p class="jost">Creon Tam &#169 2024 </p>
        </footer>
    </div>
</body>
</html>