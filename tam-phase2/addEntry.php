<?php
    session_start();

    if(!isset($_SESSION['UserID'])) {
        header("Location: index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="blog.css">
    <script src="addPost.js" defer></script>
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width:768px)">
    <title>Add Blog</title>
</head>
<body>
    <?php
        if(isset($_SESSION['UserID'])) {
            echo "<aside>Welcome User</aside>";
        }
            
    ?>
    <form action="addPost.php" method="post">
        
        <legend>Add Blog</legend>
        <fieldset>
            <table>
                <!--blog title input-->
                <tr>
                    <td>
                        <input id="title" type="text" name="title" placeholder="Title" required>
                    </td>
                </tr>
                <!--blog entry input-->
                <tr>
                    <td>
                        <textarea id="entry" name="context" placeholder="Write something.." required></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <button type="submit" id="submit">Post</button>
                        <button type="reset" id="clear">Clear</button>
                        <button type="submit" id="preview" formaction="preview.php" formmethod="get">Preview</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>