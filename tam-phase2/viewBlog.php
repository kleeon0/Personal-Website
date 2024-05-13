<?php
    session_start();

    // Assuming you have a MySQL database set up with appropriate credentials
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "ecs417";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Creon.jpeg">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="viewBlog.css">
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
            <?php
                if(isset($_SESSION['UserID'])) {

                    echo "<aside id='welcome' class='jost'>Welcome User</aside>";
                }

            ?>
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
        <h1 class="format cabin" id="title">My Blog</h1>
        <section id='blog'>
            <?php
                if(isset($_SESSION['UserID'])) {
                    echo "<a href='addEntry.php' class='jost'><button>Add Blog</button></a>";
                }
                else{
                    echo "<a href='login.html' class='jost' id='login' ><button>Add Blog</button></a>"; 
                }
            ?>
        </section>
        <form action="viewBlog.php" method="get">
            <input type="month" name="date" id="date" required>
            <button type="submit">Apply</button>
        </form>
        <section>
            
        <?php
            if (isset($_GET['date'])) {
                $selectedMonth = $_GET['date'];
                $sql = "SELECT * FROM `blogs` WHERE `dateofEntry` BETWEEN '".$_GET['date']."-01 00:00:00.000000' AND '".$_GET['date']."-31 23:59:59.999999'";
                unset($_GET['date']);
                //
            } else {
                $sql = "SELECT * FROM blogs";
            }

            $result = $conn->query($sql);
            $blogs = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    unset($row['ID']);
                    $blogs[] = $row;
                }
            }else {
                echo "No entries";
            }
            // Sort the rows based on the latest to oldest date using bubble sort
            for ($i = 0; $i < count($blogs) - 1; $i++) {
                for ($j = 0; $j < count($blogs) - $i - 1; $j++) {
                    $date1 = strtotime($blogs[$j]['dateofEntry']);
                    $date2 = strtotime($blogs[$j + 1]['dateofEntry']);
                    if ($date1 < $date2) {
                        // Swap rows
                        $temp = $blogs[$j];
                        $blogs[$j] = $blogs[$j + 1];
                        $blogs[$j + 1] = $temp;
                    }
                }
            }            

            // Output sorted rows of blogs
            foreach ($blogs as $blog) {
                echo "<section class='entry'>
                    <p class='format source-code' id='time'>".$blog['dateofEntry']." UTC</p>
                    <details open>
                        <summary class='format source-code'>".$blog['title']."</summary>
                        <p class='source-code'>".$blog['context']."</p>
                    </details>
                </section>";
                echo "<hr>";
                echo "<br>";
            }

            ?>

        </section>
        <footer>
            <p class="jost">Creon Tam &#169 2024 </p>
        </footer> 
    </div>
    
</body>
</html>