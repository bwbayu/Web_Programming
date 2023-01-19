<?php
    session_start();

    if(!isset($_SESSION['nim_mhs'])){
        header("location: login.php");
    }
    $nim = $_SESSION['nim_mhs'];
    include('db.php');
    $sql = 'SELECT judul, nama_file, tgl_upload FROM file_download ORDER BY id';
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die('Could not get data: '. mysqli_error());
    }

    $sqlfoto = "SELECT foto_mhs FROM mahasiswa WHERE nim_mhs = '$nim' ";
    $resultfoto = mysqli_query($conn, $sqlfoto);
    $datafoto = mysqli_fetch_assoc($resultfoto);
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="template/dashboard/assets/css/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="template/dashboard/assets/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="template/dashboard/assets/css/style.css">
    <link rel="stylesheet" href="template/dashboard/assets/css/dashboard_graph.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-scroller">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="dashboard.php"
                    style="text-align: center; color:#fff; text-decoration: none;">
                    <h3>ByeBye</h3>
                </a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="file/<?= $datafoto['foto_mhs']?>"
                                    alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal"><?php echo $_SESSION['nama_mhs']; ?></h5>
                                <span><?php echo $_SESSION['nim_mhs']; ?></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Menu</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="dashboard.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-chart-arc"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="profile.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-account-circle"></i>
                        </span>
                        <span class="menu-title">Profile</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <span class="menu-icon">
                            <i class="mdi mdi-book-open-page-variant"></i>
                        </span>
                        <span class="menu-title">Rencana Studi</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="irs.php"> IRS </a></li>
                            <li class="nav-item"> <a class="nav-link" href="prs.php"> PRS </a></li>
                            <li class="nav-item"> <a class="nav-link" href="krs.php"> KRS </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0">Messages</h6>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <span class="menu-icon">
                                        <i class="mdi mdi-message-alert"></i>
                                    </span>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Welcome Back</p>
                                        <p class="text-muted mb-0"> 1 Second ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">1 new messages</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                <h6 class="p-3 mb-0">Notifications</h6>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">No notifications</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle"
                                        src="file/<?= $datafoto['foto_mhs']?>" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $_SESSION['nama_mhs']; ?></p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="profile.php">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-account text-light"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Profile</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="logout.php">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row" id="menu1">
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>LAMA STUDI</h5>
                                    <div class="row">
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-book-open-variant text-primary ml-auto"></i>
                                        </div>
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h3 class="mb-0">2 Semester</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>IPK</h5>
                                    <div class="row">
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-ribbon text-danger ml-auto"></i>
                                        </div>
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h3 class="mb-0">3,8</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>PEROLEHAN SKS</h5>
                                    <div class="row">
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-speedometer text-info ml-auto"></i>
                                        </div>
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h3 class="mb-0">40 SKS</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="graphBox">
                                <div class="box"><canvas id="myChart"></canvas></div>
                            </div>
                        </div>
                        <div class="col-lg-4" id="announcement">
                            <div class="card h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-6 d-flex align-items-center">
                                            <h6 class="mb-0">Announcement</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3 pb-0">
                                    <ul class="list-group">
                                    <?php
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "
                                            <li
                                            class='list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg'>
                                                <div class='d-flex flex-column'>
                                                    <h6 class='mb-1 text-dark font-weight-bold text-sm'>{$row['tgl_upload']}</h6>
                                                    <span class='text-xs'>{$row['judul']}</span>
                                                </div>
                                                <div class='d-flex align-items-center text-sm'>
                                                    <button class='btn btn-link text-dark text-sm mb-0 px-0 ms-4'><a href='download_process.php?file_name={$row['nama_file']}' class='card-link text-dark text-decoration-none'> <i
                                                    class='fas fa-file-pdf text-lg me-1'></i> </a></button>
                                                </div>
                                            </li>";
                                        }
                                    ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            </span>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <script src="template/dashboard/assets/js/vendor.bundle.base.js"></script>
        <script src="template/dashboard/assets/js/off-canvas.js"></script>
        <script src="template/dashboard/assets/js/hoverable-collapse.js"></script>
        <script src="template/dashboard/assets/js/misc.js"></script>
        <script src="template/dashboard/assets/js/dashboard.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
        <script src="template/dashboard/assets/js/chart.js"></script>
</body>

</html>