<!DOCTYPE html>
<html>
    <head>
        <meta chatset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        echo '1<br>';
        echo '2<br>';
        echo '3<br>';
        ?>

        <h1>while</h1>
        <?php
        echo '1<br>';
        $i = 0;
        while($i < 3) {
            echo '2<br>';
            $i = $i + 1;
        }
        echo '3<br>';
        ?>
    </body>
</html>