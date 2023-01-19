<?php
    // mengambil kode dalam file db.php
    include('db.php');

    // mengecek apakah variabel di dalam parameter sudah dideklarasikan
    if(isset($_GET["countryName"]))
    {
        // mengambil data dari form
        $countryName = $_GET["countryName"];
        $countryCode = $_GET["countryCode"];
        $cityName = $_GET["cityName"];
        $cityPopulation = $_GET["cityPopulation"];
        $province = $_GET["province"];

        $db = new Database();
        // memanggil fungsi saveCountryCityData() untuk memasukkan data dari form ke database
        $db->saveCountryCityData($countryName, $countryCode, $cityName, $cityPopulation, $province);
        // memanggil fungsi back
        back();
    }
    else{// kondisi jika variabel di dalam parameter belum dideklarasikan
        // memanggil fungsi back
        back();
    }
    
    // fungsi untuk kembali ke halaman index.php
    function back(){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>