<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1><a href="index3.php">WEB</a></h1>
        <ol>
            <li><a href="index3.php?id=HTML">HTML</a></li>
            <li><a href="index3.php?id=CSS">CSS</a></li>
            <li><a href="index3.php?id=JavaScript">JavaScript</a></li>
            <li><a href="index3.php#title">Go Title</a></li>
        </ol>
        <h2>
            <?php
                if(isset($_GET['id'])) {
                    echo $_GET['id'];
                }else {
                    echo "Welcome";
                }
            ?>
        </h2>
        <?php
            if(isset($_GET['id'])) {
                echo nl2br(file_get_contents("data/".($_GET['id'])));
            } else {
                echo "Hello, PHP";
            }
        ?>
    </body>
</html>