<?php
require_once('function.php');

$data = readtable();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Admin Page</title>
    <style>
        body{
            background-color: #5496bf;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card my-5">
            <div class="card-header text-center">
                <h3 class="my-0">Message List</h3>
            </div>
            <div class="card-body text-end">
                <div class="table-responsive">
                    <table class="table table-hover table-stripped table-bordered text-center">
                        <thead class="table-info">
                            <tr>
                                <th scope="row">No.</th>
                                <th scope="row">Name</th>
                                <th scope="row">Email</th>
                                <th scope="row">Subject</th>
                                <th scope="row">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- foreach data buku -->
                            <?php
                            $no = 1;
                            foreach ($data as $message) :
                            ?>
                            <tr>
                                <th scope="row">
                                    <!-- tampilkan nomor -->
                                    <?= $no; ?>
                                    <!-- ... -->
                                </th>
                                <td>
                                    <!-- tampilkan data judul buku -->
                                    <?= $message['Name_user']?>
                                </td>
                                <td>
                                    <!-- tampilkan data nama kategori -->
                                    <?= $message['Email_user']?>
                                </td>
                                <td>
                                    <!-- tampilkan data nama author -->
                                    <?= $message['Subject']?>
                                </td>
                                <td>
                                    <!-- tampilkan data publisher -->
                                    <?= $message['Message']?>
                                </td>
                            </tr>
                            <!-- ... -->
                            <?php
                                $no++;
                                endforeach;
                            ?>
                            <!-- tutup foreach -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="d-grid gap-4 col-6 mx-auto">
            <a href="index.html" class="btn btn-danger" type="button">Main</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>