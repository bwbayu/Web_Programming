<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style/register.css">
</head>

<body>
    <div class="form-container">
        <h3>Registration Form</h3>
        <div style="color: red; margin-bottom: 15px; text-align:center;">
            <?php
                if(isset($_COOKIE["message"])){
                    echo $_COOKIE["message"];
                }
            ?>
        </div>
        <form method="POST" action="register_process.php" enctype="multipart/form-data">
            <div class="inputfield">
                <label>Name</label>
                <input name="nama_mahasiswa" id="nama_mahasiswa" type="text" class="input" required>
            </div>
            <div class="inputfield">
                <label>Student ID Number</label>
                <input name="nim_mahasiswa" id="nim_mahasiswa" type="text" class="input" required>
            </div>
            <div class="inputfield">
                <label>Password</label>
                <input name="password_mahasiswa" id="password_mahasiswa" type="password" class="input" required>
            </div>
            <div class="inputfield">
                <label>Confirm Password</label>
                <input name="c_password_mahasiswa" id="c_password_mahasiswa" type="password" class="input" required>
            </div>
            <div class="inputfield">
                <label>Student Email</label>
                <input name="email_mahasiswa" id="email_mahasiswa" type="email" class="input" required>
            </div>
            <div class="inputfield">
                <label>Faculty</label>
                <input name="fakultas_mahasiswa" id="fakultas_mahasiswa" type="text" class="input" required>
            </div>
            <div class="inputfield">
                <label>Study Program</label>
                <input name="prodi_mahasiswa" id="prodi_mahasiswa" type="text" class="input" required>
            </div>
            <div class="inputfield">
                <label>Phone Number</label>
                <input name="telpon_mahasiswa" id="telpon_mahasiswa" type="text" class="input" required>
            </div>
            <div class="inputfield">
                <label>Date of Birth</label>
                <input name="tgllahir_mahasiswa" id="tgllahir_mahasiswa" type="date" class="input" required>
            </div>
            <div class="inputfield">
                <label>Gender</label>
                <div class="custom_select">
                    <select name="gender_mahasiswa" id="gender_mahasiswa" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>Address</label>
                <textarea name="alamat_mahasiswa" id="alamat_mahasiswa" class="textarea" required></textarea>
            </div>
            <div class="inputfield">
                <label>Postal Code</label>
                <input name="kodepos_mahasiswa" id="kodepos_mahasiswa" type="text" class="input" required>
            </div>
            <div class="inputfield">
                <label>Student ID Card Photo</label>
                <input type="file" class="input" name="fupload" id="fupload" required>
            </div>
            <div class="inputfield">
                <label>Profile Picture</label>
                <input type="file" class="input" name="profilepic" id="profilepic" required>
            </div>
            <div class="inputfield">
                <input class="form-btn" type="submit" value="register" name="register" id="register" required>
            </div>
            <div class="text">
                <p>already have an account ? <a href="login.php">login now</a></p>
            </div>
        </form>
    </div>

</body>

</html>