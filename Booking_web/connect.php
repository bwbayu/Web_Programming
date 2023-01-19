<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $mydb = 'uts_desweb';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $mydb);

    if(! $conn){
      die('Could not connect:' . mysqli_error());
    }

    // echo '<h1 style="text-align:center;">Connected successfully</h1>';

    // create db
    // $sql = "CREATE DATABASE uts_desweb";
    // if($conn->query($sql) === TRUE){
    //  echo "<p>Database created successfully</p>";
    // }
    // else{
    //     echo "<p>Error creating database: </p>" . $conn->error;
    // }

    // create table
    // $db_selected = mysqli_select_db($conn, 'uts_desweb');
    // if(! $db_selected){
    //     die('Cant be used' .mysqli_error());
    // }else{
    //     $sql = "CREATE TABLE data_contact(" . "id INT NOT NULL AUTO_INCREMENT," . "Name_user VARCHAR(50) NOT NULL," . "Email_user VARCHAR(50) NOT NULL,
    //     " . "Subject VARCHAR(100) NOT NULL," . "Message VARCHAR(200) NOT NULL," . "PRIMARY KEY(id));";

    //     $create_table = mysqli_query($conn, $sql);
    //     if($create_table){
    //         echo "<p>Table create successfully</p>";
    //     }else{
    //         die('Invalid query: ' . mysql_error());
    //     }
    // }


    // mysqli_close($conn);

?>