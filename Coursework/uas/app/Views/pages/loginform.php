<?= $this->extend('layout/loginregis') ?>

<?= $this->section('content') ?>
<body>
    <div class="form-container">
        <form action="/login/auth" method="post">
            <h3>login now</h3>
            <?php if(session()->getFlashdata('msg')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="submit" class="form-btn">
            <a href="/"><input class="btn form-btn" value="Home"></input></a>
            <p>don't have an account? <a href="/Page/register">register now</a></p>
        </form>
    </div>
</body>

</html>
<?= $this->endSection('content'); ?>