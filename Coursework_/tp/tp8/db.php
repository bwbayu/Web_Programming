<?php
ini_set('display_errors', 1);

class Database{
    // mendeklarasikan variabel untuk membuat koneksi ke mysql server
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "country_data";
    public $connection = "";

    function __construct(){}
    // fungsi untuk membuat koneksi ke mysql server
    function connectDatabase(){
        $this->connection = mysqli_connect($this->host,
        $this->username, $this->password, $this->database);
        // mengecek koneksi ke mysql server
        if(!$this->connection){ // kondisi jika tidak terkoneksi dengan mysql server 
            die("could not connect: " . mysqli_error());
        }
    }
    // fungsi untuk menutup koneksi pada mysql server
    function closeDatabase(){
        mysqli_close($this->connection);
    }

    // fungsi untuk mengambil data pada tabel country_city yang ada di dalam database
    function getCountryCityData(){
        // memanggil fungsi untuk membuka koneksi ke mysql server
        $this->connectDatabase();

        $query = "SELECT * FROM country_city"; // membuat query untuk mengambil semua data dari tabel country_city yang ada di dalam database
        $result = mysqli_query($this->connection, $query); // melakukan kueri pada database yang digunakan
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC); // mengambil data dari hasil query
        mysqli_free_result($result);

        // memanggil fungsi untuk menutup koneksi pada mysql server
        $this->closeDatabase();

        // mengembalikan variabel data
        return $data;
    }
    
    // fungsi untuk memasukkan data dari form ke database
    function saveCountryCityData($countryName, $countryCode, $cityName,
    $cityPopulation, $province){
        // memanggil fungsi untuk membuka koneksi ke mysql server
        $this->connectDatabase();

        // membuat query untuk memasukkan data dari form/masukan user ke database
        $query = "INSERT INTO country_city(countryName, countryCode, cityName, cityPopulation, province) VALUES('$countryName','$countryCode','$cityName', '$cityPopulation', '$province')";
        $result = mysqli_query($this->connection, $query); // melakukan kueri pada database yang digunakan

        // mengecek variabel result
        if(!$result){ // kondisi jika variabel result false
            die('Could not get data: ' . mysqli_error());
        }

        // memanggil fungsi untuk menutup koneksi pada mysql server
        $this->closeDatabase();
    }
}
?>
