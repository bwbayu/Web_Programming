<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
    <div class="wrapper" id="wrappercu">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="#">ByeBye</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Page/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Page/contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Form/">Contact List</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="text-wrapper-cu">
            <div class="d-flex align-items-center justify-content-center">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="wrapper1">
        <div class="content">
            <div class="keterangan">
                <div class="item-ket">
                    <div class="icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <div class="text-icon">
                        <h6>Call</h6>
                        <p>+62-0000-0000-000</p>
                    </div>
                </div>
                <div class="item-ket">
                    <div class="icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="text-icon">
                        <h6>Email</h6>
                        <p>roderevbayu@gmail.com</p>
                    </div>
                </div>
                <div class="item-ket">
                    <div class="icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="text-icon">
                        <h6>Address</h6>
                        <p>Address</p>
                    </div>
                </div>
            </div>
            <div class="form-content">
                <form action="/Form/addcontact" method="POST">
                    <?= csrf_field(); ?>
                    <div class="two-col">
                        <input type="text" class="form-control" name="Name_user" id="Name_user" placeholder="Name"
                            required="" autofocus>
                        <input type="email" class="form-control" name="Email_user" id="Email_user" placeholder="Email"
                            required="">
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="Subject" id="Subject" placeholder="Subject"
                            required="">
                    </div>

                    <textarea name="Message" class="form-control" id="Message" placeholder="Message"
                        required=""></textarea>
                    <button type="submit" class="btn btn-contact">Send Message</button>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection('content'); ?>