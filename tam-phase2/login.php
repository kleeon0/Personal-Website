<?php

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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get username and password from form
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT email, password FROM USERS WHERE email='$username'AND password='$password'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            session_start();
            $_SESSION['UserID'] = $username;
            header("Location: addEntry.php");
        }
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width:768px)">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <legend>Login</legend>
        <fieldset>
            <table>
                <!--username input-->
                <tr>
                    <td>
                        <input type="email" id="username" name="username" placeholder="Email" required>
                    </td>
                </tr>
                <!--password input-->
                <tr>
                    <td>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <!--<p>Invalid username or password.</p> -->
                        <p>Invalid username or password.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Submit</button>  
                    </td>
                </tr>  
                    
            </table>
            
        </fieldset>
    </form>

</body>
</html>