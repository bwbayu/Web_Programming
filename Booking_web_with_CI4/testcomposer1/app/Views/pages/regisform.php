<?= $this->extend('layout/loginregis') ?>

<?= $this->section('content') ?>
    <div class="form-container">
            <form action="/register/save" method="post">
                <h3>register now</h3>
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif; ?>
                <input type="text" name="name" required placeholder="enter your name">
                <input type="email" name="email" required placeholder="enter your email">
                <input type="password" name="password" required placeholder="enter your password">
                <input type="password" name="confpassword" required placeholder="confirm your password">
                <input type="submit" name="submit" value="submit" class="form-btn">
                <a href="/"><input class="btn form-btn" value="Home"></input></a>
                <p>already have an account? <a href="/Page/login">login now</a></p>
            </form>                    
    </div>
</body>

</html>
<?= $this->endSection('content'); ?>