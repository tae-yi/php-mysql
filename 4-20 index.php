<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?php
            if(isset($_GET['id'])) {
                echo $GET['id'];
            } else {
                echo "Welcome";
            }
            ?>
        </title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <h2></h2>
        <?php
        if(isset($_GET[id])) {
            echo $_GET['id'];
        } else {
            echo "Welcome"
        }
        ?>
    </body>
</html>