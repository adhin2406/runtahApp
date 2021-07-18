<?= $this->extend('Template/Template'); ?>


<?= $this->section('content'); ?>


<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="<?= base_url() ?>/img/bg/gonicorner.jpeg" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    <div class="pesan">
                        <?php if (!empty(session()->getFlashdata('success'))) :  ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty(session()->getFlashdata('error'))) :  ?>
                            <div class="alert alert-warning">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <p class="login-card-description">Login akunmu</p>
                        <form action="<?= base_url(); ?>/Auth/Login" method="POST" autocomplete="off">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="text" name="username" id="email" class="form-control  <?= ($validation->hasError('username')) ? 'is-invalid' :  ''; ?>" placeholder="Username">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username'); ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' :  ''; ?>" placeholder="***********">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            </div>
                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                        </form>
                        <p class="login-card-footer-text">Belum punya akun? <a href="<?= base_url(); ?>/Auth/Join" class="text-reset">Daftar disini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>