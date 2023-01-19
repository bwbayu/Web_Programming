<?php
    session_start();
    include ("db.php");

        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_md5 = md5($password);
    
        if($username != '' && $password != ''){
            $sql = "SELECT nim_mhs, password_mhs, nama_mhs FROM mahasiswa WHERE nim_mhs='$username' AND password_mhs='$password_md5'";
            $query = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($query);
    
            if(mysqli_num_rows($query) < 1){
                setcookie("message", "Invalid username/password.", time()+60);
                header("location: login.php");
            }
            else{
                echo $data['nim_mhs'] . $data['password_mhs'];
    
                $_SESSION['nim_mhs'] = $data['nim_mhs'];
                $_SESSION['nama_mhs'] = $data['nama_mhs'];
    
                setcookie("message", "", time()-60);
                header("location: dashboard.php");
            }
        }

?>