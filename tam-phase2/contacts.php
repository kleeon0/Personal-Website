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
    <link rel="stylesheet" href="contacts.css">
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width:768px)">
    <title>Contact Me</title>
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
        <section id="center">
            <h1 class="format cabin" id="title">Contact Me</h1>
            <p class="format cabin" id="caption">Please contact me or browse my projects through the links below:</p>
            <div id="contacts">
                <a href="mailto:ec23982@qmul.ac.uk"><img src="images/email_icon.png" alt="" id="first_icon" target="_blank"></a>
                <a href="mailto:ec23982@qmul.ac.uk" id="first_link"><p class="format cabin" target="_blank">ec23982@qmul.ac.uk</p></a>

                <img src="images/phone.png" alt="" id="second_icon">
                <p id="second_link" class="format cabin">+44 77 4690 7774</p>

                <a href="https://github.com/kleeon0?tab=overview&from=2023-11-01&to=2023-11-12" target="_blank"><img src="images/github_icon.png" alt="" id="third_icon"></a>
                <a href="https://github.com/kleeon0?tab=overview&from=2023-11-01&to=2023-11-12" id="third_link" target="_blank"><p class="format cabin">github.com/kleeon0</p></a>

                <a href="https://www.linkedin.com/in/creon-tam-ab428029b?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BdY5xPIj2RgaEXQnw%2BYM6Mg%3D%3D" target="_blank"><img src="images/linkedin_icon.png" alt="" id="fourth_icon"></a>
                <a href="https://www.linkedin.com/in/creon-tam-ab428029b?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BdY5xPIj2RgaEXQnw%2BYM6Mg%3D%3D" id="fourth_link" target="_blank"><p class="format cabin">in/creon-tam</p></a>

                <a href="https://www.instagram.com/creon.tamm/" target="_blank"><img src="images/instagram_icon.png" alt="" id="fifth_icon"></a>
                <a href="https://www.instagram.com/creon.tamm/" id="fifth_link" target="_blank"><p class="format cabin">creon.tamm</p></a>
            </div>
        </section>
        <footer>
            <p class="jost">Creon Tam &#169 2024 </p>
        </footer> 
    </div>
    
</body>
</html>