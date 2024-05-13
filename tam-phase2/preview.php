<?php
    session_start();


    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $_SESSION['title'] = $_GET['title'];
        $_SESSION['context'] = $_GET['context'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width:768px)">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="viewBlog.css">
    <link rel="stylesheet" href="preview.css">
    <title>Preview</title>
</head>
<body>
    <h1 class='format source-code' id='title'>Preview</h1>
    <?php
        $time = date('Y-m-d H:i:s');
        $title = $_GET['title'];
        $context = $_GET['context'];
        echo "<section class='entry'>
            <p class='format'>".$time."</p>
            <details open>
                <summary class='format source-code'>".$title."</summary>
                <p class='source-code'>".$context."</p>
            </details>
            </section>";
        echo "<br>";
    ?>
    <section>
        <a href="addEntry.php"><button>Edit</button></a>
        <a type="submit" id="submit" href="addpost.php"><button>Post</button></a>
    </section>
    


</body>
</html>