<?php
    $mysqli = mysqli_connect("localhost", "root", "koreait", "opentutorials");
    //var dump($mysqli);
    $res = mysqli_query($mysqli, "SHOW TABLES FROM opentutorials;");
    //var dump($res);
    if (!$res) {
        echo mysqli_error($mysqli);
    }

    $row = mysqli_fetch_assoc($res);
    var_dump($row); 
    //$res = $mysqli → query("SHOW TABLES");
?>