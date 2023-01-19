<?php
    include('db.php');
    $sql = 'SELECT judul, deskripsi, nama_file FROM file_download ORDER BY id';
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die('Could not get data: '. mysqli_error());
    }
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Main Page</title>
    <link rel="stylesheet" href="index.css">
    <style>
        footer{
            background: #000;
        }

        footer p{
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <header>
        <div class="wrapper" id="wrapper1">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
                <div class="container">
                    <a class="navbar-brand" href="index.php">ByeBye</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                        </ul>
                        <a href="login.php" class="btn btn-outline-light" type="button">Login</a>
                    </div>
                </div>
            </nav>
            <div class="text-wrapper">
                <div class="d-flex align-items-center justify-content-center">
                    <h1>Welcome to ByeBye University</h1>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <h3>Do Whatever You Want And We Will support As Much As We Can.</h3>
                </div>
            </div>
        </div>
        <div class="breaking-news-section">
            <span id="btext">Breaking News</span>
            <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                <a class="breaking-news">
                    <p class="bntime">April 29, 2022</p>Eid al-Fitr holiday until May 8, 2022. Happy Eid Al-Fitr.
                </a>
                <a class="breaking-news">
                    <p class="bntime">May 8, 2022</p>The preliminary for the DIMAS-TI AMLI 2022 competition starts on
                    May 14 - May 16, 2022. Good luck to the participants.
                </a>
                <a class="breaking-news">
                    <p class="bntime">September 1, 2022</p>New students, please update your profile on the profile page.
                </a>
            </marquee>
        </div>
    </header>

    <main>
        <article>
            <section id="news">
                <h1>Latest News</h1>
                <div class="container mt-2 py-3">
                    <div class="row">
                        <div id="news-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#news-carousel" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#news-carousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#news-carousel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="overlay-image" style="background-image:url(image/carousel1.jpg)">
                                    </div>
                                    <div class="container" id="container-carousel">
                                        <h2>lorem</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum deleniti
                                            necessitatibus voluptatum impedit.</p>
                                        <div class="col-md-12 text-center">
                                            <a href="#" class="btn btn-lg btn-light">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="overlay-image" style="background-image:url(image/carousel2.jpg)">
                                    </div>
                                    <div class="container" id="container-carousel">
                                        <h2>lorem</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum deleniti
                                            necessitatibus voluptatum impedit.</p>
                                        <div class="col-md-12 text-center">
                                            <a href="#" class="btn btn-lg btn-light">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="overlay-image" style="background-image:url(image/carousel3.jpg)">
                                    </div>
                                    <div class="container" id="container-carousel">
                                        <h2>lorem</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum deleniti
                                            necessitatibus voluptatum impedit.</p>
                                        <div class="col-md-12 text-center">
                                            <a href="#" class="btn btn-lg btn-light">Read More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#news-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#news-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </article>

        <section id="announcement">
            <h1>Announcement</h1>
            <div class="container" id="announcement-container">
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                        echo "
                        <div class='row'>
                            <div class='card text-center border-2 border-primary'>
                                <div class='card-body'>
                                    <h5 class='card-title'> {$row['judul']} </h5>
                                    <p class='card-text'> {$row['deskripsi']} </p>
                                    <a href='download_process.php?file_name={$row['nama_file']}' class='card-link text-danger text-decoration-none'> Download Here !!! </a>
                                </div>
                            </div>
                        </div>";
                    }
                ?>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <footer>
        <ul class="sosmed">
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li><a href="#"><i class="bi bi-youtube"></i></a></li>
        </ul>
        <p>©2022 ByeBye University | Made with <i class="bi bi-heart"></i> by Bayu Wicaksono.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>