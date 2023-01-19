<?= $this->extend('layout/loginregis') ?>

<?= $this->section('content') ?>
    <div class="form-container">
        <form action="" method="post">
            <h3>register now</h3>
            <input type="text" name="name" required placeholder="enter your name">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="cpassword" required placeholder="confirm your password">
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have an account? <a href="/Page/login">login now</a></p>
        </form>
    </div>
</body>

</html>
<?= $this->endSection('content'); ?>