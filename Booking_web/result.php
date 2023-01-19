<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Result Page</title>
    <style>
        .container h1{
            text-align:center;
            padding:20px;
        }
    </style>
</head>

<body>
<div class="container">
<?php
    include('connect.php');

    if(isset($_POST['add_data'])){
        $Name_user = $_POST['Name_user'];
        $Email_user = $_POST['Email_user'];
        $Subject = $_POST['Subject'];
        $Message = $_POST['Message'];

        $sql = "INSERT INTO data_contact". "(Name_user, Email_user, Subject, Message) VALUES". "('$Name_user', '$Email_user', '$Subject', '$Message')";
                
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<h1>Data Successfully Added</h1>';
            echo '<div class="d-grid gap-4 col-6 mx-auto">
            <a href="index.html" class="btn btn-primary" type="button">Main</a>
            <a href="admin.php" class="btn btn-primary" type="button">Admin</a>
                  </div>';
        }else{
            die('Invalid query: ' . mysqli_error($conn));
        }
    }
    mysqli_close($conn);
?>
</div>
</body>
</html>