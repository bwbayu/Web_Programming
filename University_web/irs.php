<?php
    // session akun 
    session_start();

    if(!isset($_SESSION['nim_mhs'])){
        header("location: login.php");
    }
    $nim = $_SESSION['nim_mhs'];

    // menampilkan data untuk tabel daftar mata kuliah
    include('db.php');
    $sql = "SELECT mata_kuliah.kode_matkul as matkul_code, mata_kuliah.nama_matkul as matkul_name, mata_kuliah.sks as sks_matkul, mata_kuliah.kode_dosen as dosen_code, dosen.nama_dosen as dosen_name  
    FROM mata_kuliah, dosen WHERE mata_kuliah.kode_dosen=dosen.kode_dosen;";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die('Could not get data: '. mysqli_error());
    }

    // menyimpan dan data mata kuliah yang dikontrak
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $cek = "SELECT COUNT(id) FROM krs;";
        $resultcek = mysqli_query($conn, $cek);
        if($resultcek < 1){
            $query1 = "INSERT INTO krs VALUES ('', '$nim', '$id')";
            $result1 = mysqli_query($conn, $query1);
            if(!$result1){
                die('Could not insert data'. mysqli_error());
            }
        }
        else{
            $cek1 = "SELECT COUNT(*) as banyakdata FROM krs WHERE nim_mhs=$nim AND kode_matkul=$id;";
            $resultcek1 = mysqli_query($conn, $cek1);
            $rowcek1 = mysqli_fetch_assoc($resultcek1);
            if($rowcek1['banyakdata'] < 1){
                $query2 = "INSERT INTO krs VALUES ('', '$nim', '$id')";
                $result2 = mysqli_query($conn, $query2);
                if(!$result2){
                    die('Could not insert data'. mysqli_error());
                }
            }
        }
        header("location: irs.php");
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
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="irs.css">
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
                                <h5 class="mb-0 font-weight-normal">
                                    <?php echo $_SESSION['nama_mhs']; ?>
                                </h5>
                                <span>
                                    <?php echo $_SESSION['nim_mhs']; ?>
                                </span>
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
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">
                                        <?php echo $_SESSION['nama_mhs']; ?>
                                    </p>
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
                    <div class="page-header">
                        <h3>Isian Rencana Studi</h3>
                    </div>                  
                    <div class="outer-wrapper">
                        <div class="table-wrapper">
                            <table class="table-dark">
                                <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th colspan="3">Mata Kuliah</th>
                                        <th colspan="2">Dosen</th>
                                        <th rowspan="2">Action</th>
                                    </tr>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>SKS</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                        echo "<tr>
                                            <td>{$no}</td>
                                            <td>{$row['matkul_code']}</td>
                                            <td>{$row['matkul_name']}</td>
                                            <td>{$row['sks_matkul']}</td>
                                            <td>{$row['dosen_code']}</td>
                                            <td>{$row['dosen_name']}</td>
                                            <td style='font-size: 15px; text-align: center; border:transparent;'>
                                                <a href='irs.php?id={$row['matkul_code']}' title='Add data' name='add_data' id='add_data'><i class='mdi mdi-plus text-light'></i></a>
                                            </td>
                                        </tr>";
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
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
</body>

</html>