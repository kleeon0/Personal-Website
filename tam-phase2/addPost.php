<?php
    session_start();

    // Connect to MySQL
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

    if(!isset($_SESSION['UserID'])) {
        header("Location: index.php");
        exit();
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $time = date('Y-m-d H:i:s');
        $title = $_POST['title'];
        $context = $_POST['context'];
        $sql = "INSERT INTO blogs (dateofEntry, title, context)
    VALUES ('$time', '$title', '$context')";
        if ($conn->query($sql) === TRUE) {
            header("Location: viewBlog.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    if(isset($_SESSION['title'])&&isset($_SESSION['context'])) {
        $time = date('Y-m-d H:i:s');
        $title = $_SESSION['title'];
        $context = $_SESSION['context'];
        unset($_SESSION['title']);
        unset($_SESSION['context']);
        $sql = "INSERT INTO blogs (dateofEntry, title, context)
    VALUES ('$time', '$title', '$context')";
        if ($conn->query($sql) === TRUE) {
            header("Location: viewBlog.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

?>