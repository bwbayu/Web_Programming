<?php
require('connect.php');

function readtable()
{
    global $conn;
    $query = "SELECT * FROM data_contact;";
    $result = mysqli_query($conn, $query);
    $records = [];
    while ($record = mysqli_fetch_assoc($result)) {
        $records[] = $record;
    }
    return $records;
}

function deleterow($id)
{
    global $conn;

    $query = "DELETE FROM data_contact WHERE id=$id;";
    $result = mysqli_query($conn, $query);

    $isSucceed = mysqli_affected_rows($conn);

    return $isSucceed;
}

?>