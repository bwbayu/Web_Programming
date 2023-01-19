<?= $this->extend('layout/loginregis') ?>

<?= $this->section('content') ?>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>login now</h3>
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have an account? <a href="/Page/register">register now</a></p>
        </form>
    </div>
</body>

</html>
<?= $this->endSection('content'); ?>