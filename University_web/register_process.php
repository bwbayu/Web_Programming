<?php
    include("db.php");

    if (isset($_POST['register'])) {
        // file 1
        $tmp_file = $_FILES['fupload']['tmp_name'];
        $nm_file = $_FILES['fupload']['name'];
        $ukuran_file = $_FILES['fupload']['size'];
        // file 2
        $tmp_file2 = $_FILES['profilepic']['tmp_name'];
        $nm_file2 = $_FILES['profilepic']['name'];
        $ukuran_file2 = $_FILES['profilepic']['size'];
        // data mahasiswa
        $nama_mahasiswa = $_POST['nama_mahasiswa'];
        $nim_mahasiswa = $_POST['nim_mahasiswa'];
        // plaintext password
        $password_mahasiswa = $_POST['password_mahasiswa'];
        $c_password_mahasiswa = $_POST['c_password_mahasiswa'];
        // ciphertext password
        $password_mahasiswa_md5 = md5($password_mahasiswa);
        $c_password_mahasiswa_md5 = md5($c_password_mahasiswa);
        // data mahasiswa
        $email_mahasiswa = $_POST['email_mahasiswa'];
        $fakultas_mahasiswa = $_POST['fakultas_mahasiswa'];
        $prodi_mahasiswa = $_POST['prodi_mahasiswa'];
        $telpon_mahasiswa = $_POST['telpon_mahasiswa'];
        $tgllahir_mahasiswa = $_POST['tgllahir_mahasiswa'];
        $gender_mahasiswa = $_POST['gender_mahasiswa'];
        $alamat_mahasiswa = $_POST['alamat_mahasiswa'];
        $kodepos_mahasiswa = $_POST['kodepos_mahasiswa'];


        $size = 1000000;
        // cek kesesuaian password dan konfirmasi password
        if($password_mahasiswa != $c_password_mahasiswa){
            setcookie("message", "Password does not match", time()+60);
            header("location: register.php");
        }
        else{
            // cek ukuran file
            if($ukuran_file > $size || $ukuran_file2 > $size){
                setcookie("message", "Registration failed! <br>Maximum Size 1MB", time()+60);
                header("location: register.php");
                exit();
            }else{
                if($nm_file){
                    //
                    $dir = "file/$nm_file";
                    move_uploaded_file($tmp_file, $dir);
    
                    $sql = "INSERT INTO mahasiswa(nim_mhs, nama_mhs, password_mhs, c_password_mhs, email_mhs, fakultas_mhs, prodi_mhs, notelp_mhs, tgllahir_mhs, gender_mhs, alamat_mhs, kodepos_mhs, kartu_mhs, foto_mhs) VALUES('$nim_mahasiswa', '$nama_mahasiswa', '$password_mahasiswa_md5', '$c_password_mahasiswa_md5', '$email_mahasiswa', '$fakultas_mahasiswa', '$prodi_mahasiswa', '$telpon_mahasiswa', '$tgllahir_mahasiswa', '$gender_mahasiswa', '$alamat_mahasiswa', '$kodepos_mahasiswa', '$nm_file', '$nm_file2')";
                    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    header("location: login.php");
                }else{
                    header("location: register.php");
                }
            }
        }
       
    } 
?>