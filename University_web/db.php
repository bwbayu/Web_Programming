<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $mydb = 'db_universitas';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $mydb);

    if(! $conn){
        die('Could not connect:' . mysql_error());
    }

    // echo 'Connected successfully<br><br>';
?>