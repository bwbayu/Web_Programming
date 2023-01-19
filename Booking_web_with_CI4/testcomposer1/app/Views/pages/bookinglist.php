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
    <title>Contact List Page</title>
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
                <h3 class="my-0">Booking List</h3>
            </div>
            <div class="card-body text-end">
                <div class="table-responsive">
                    <?php if(session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success text-start" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <table class="table table-hover table-stripped table-bordered text-center">
                        <thead class="table-info">
                            <tr>
                                <th scope="row">No.</th>
                                <th scope="row">Place</th>
                                <th scope="row">Number of People</th>
                                <th scope="row">Arrivals</th>
                                <th scope="row">Leaving</th>
                                <th scope="row">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach($bookinglist as $row) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row['place'] ?></td>
                                    <td><?= $row['people'] ?></td>
                                    <td><?= $row['arrivals'] ?></td>
                                    <td><?= $row['leaving'] ?></td>
                                    <td>
                                        <a href="/booking/delete/<?= $row['id']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="/form/" class="btn btn-primary">Contact List</a>
                    <a href="/login/logout" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>