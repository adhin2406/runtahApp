<?= $this->extend('Template/Template'); ?>

<?= $this->section('content'); ?>

<div class="px-0 d-none d-lg-block" style="height: fit-content;">
    <div class="container join d-flex align-items-center min-vh-100 py-3 py-md-0 ">
        <div class="card mx-0 join-card">
            <div class="row no-gutters">
                <div class="col-md-4 bg-success login-link">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                    <h3>SELAMAT DATANG</h3>
                    <p>Mari selamatkan bumi kita</p>
                    <a href="<?= base_url(); ?>" class="btn">Login</a>
                </div>
                <div class="col-md-7">
                    <p class="join-card-description">Join with me</p>
                    <form action="<?= base_url(); ?>/Auth/daftar" method="POST" autocomplete="off">
                        <?= csrf_field(); ?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' :  ''; ?>" name="username" placeholder="Username" value="<?= old('username'); ?>">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="email" class="form-control   <?= ($validation->hasError('email')) ? 'is-invalid' :  ''; ?>" name="email" placeholder="Email" value="<?= old('email'); ?>">
                            <div class=" input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="number" class="form-control   <?= ($validation->hasError('nomer')) ? 'is-invalid' :  ''; ?>" name="nomer" placeholder="Nomor Hp" value="<?= old('nomer'); ?>">
                            <div class=" input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-mobile"></span>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('nomer'); ?>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <textarea name="alamat" class="form-control  <?= ($validation->hasError('alamat')) ? 'is-invalid' :  ''; ?>" placeholder="alamat"></textarea>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-map"></span>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat'); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control  <?= ($validation->hasError('password')) ? 'is-invalid' :  ''; ?>" name="password" placeholder="masukan password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control  <?= ($validation->hasError('password_conf')) ? 'is-invalid' :  ''; ?>" name="password_conf" placeholder="Konfirmasi password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password_conf'); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-success form-control">Join <i class="fas fa-sign-in-alt"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- mobile version -->
<div class="px-0 d-lg-none" style="height: max-content;">
    <div class="container join d-flex align-items-center min-vh-100 py-3 py-md-0 ">
        <div class="card mx-0 join-card" style="height: auto; padding-bottom: 6%;">
            <div class="container">
                <p class="join-card-description">Join with me</p>
                <form action="<?= base_url(); ?>/Auth/daftar" method="POST" autocomplete="off">
                    <?= csrf_field(); ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' :  ''; ?>" name="username" placeholder="Username" value="<?= old('username'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control   <?= ($validation->hasError('email')) ? 'is-invalid' :  ''; ?>" name="email" placeholder="Email" value="<?= old('email'); ?>">
                        <div class=" input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="number" class="form-control   <?= ($validation->hasError('nomer')) ? 'is-invalid' :  ''; ?>" name="nomer" placeholder="Nomor Hp" value="<?= old('nomer'); ?>">
                        <div class=" input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-mobile"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= $validation->getError('nomer'); ?>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <textarea name="alamat" class="form-control  <?= ($validation->hasError('alamat')) ? 'is-invalid' :  ''; ?>" placeholder="alamat"></textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-map"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= $validation->getError('alamat'); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="input-group mb-3">
                                <input type="password" class="form-control  <?= ($validation->hasError('password')) ? 'is-invalid' :  ''; ?>" name="password" placeholder="masukan password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="input-group mb-3">
                                <input type="password" class="form-control  <?= ($validation->hasError('password_conf')) ? 'is-invalid' :  ''; ?>" name="password_conf" placeholder="Konfirmasi password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password_conf'); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-success form-control">Join <i class="fas fa-sign-in-alt"></i></button>
                </form>
                <p class="join-card-footer-text">sudah punya akun? <a href="<?= base_url(); ?>" class="text-reset">Login disini</a></p>
            </div>
        </div>
    </div>
</div>


<!-- 
<div class="container join">
    <div class="card">
        <form action="<?= base_url(); ?>/Auth/daftar" method="POST" autocomplete="off">
            <?= csrf_field(); ?>
            <div class="input-group mb-3">
                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' :  ''; ?>" name="username" placeholder="Siapa namamu??" value="<?= old('username'); ?>">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                <div class="invalid-feedback">
                    <?= $validation->getError('username'); ?>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="email" class="form-control   <?= ($validation->hasError('email')) ? 'is-invalid' :  ''; ?>" name="email" placeholder="Emailmu apa??" value="<?= old('email'); ?>">
                <div class=" input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                <div class="invalid-feedback">
                    <?= $validation->getError('email'); ?>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-phone-square text-muted"></i>
                        </span>
                    </div>
                    <select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                        <option value="">+12</option>
                        <option value="">+10</option>
                        <option value="">+15</option>
                        <option value="">+18</option>
                    </select>
                    <input id="phoneNumber" type="tel" name="nomer" placeholder="Phone Number" class="form-control  <?= ($validation->hasError('nomer')) ? 'is-invalid' :  ''; ?> bg-white border-md border-left-0 pl-3" value="<?= old('nomer'); ?>">
                </div>
                <div class="invalid-feedback">
                    <?= $validation->getError('nomer'); ?>
                </div>
            </div>

            <div class="input-group mb-3">
                <textarea name="alamat" class="form-control  <?= ($validation->hasError('alamat')) ? 'is-invalid' :  ''; ?>" placeholder="alamatmu dimana??"></textarea>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-map"></span>
                    </div>
                </div>
                <div class="invalid-feedback">
                    <?= $validation->getError('alamat'); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <input type="password" class="form-control  <?= ($validation->hasError('password')) ? 'is-invalid' :  ''; ?>" name="password" placeholder="masukan password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <input type="password" class="form-control  <?= ($validation->hasError('password_conf')) ? 'is-invalid' :  ''; ?>" name="password_conf" placeholder="Konfirmasi password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= $validation->getError('password_conf'); ?>
                        </div>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-success form-control">Join <i class="fas fa-sign-in-alt"></i></button>
        </form>

        <h5 class="belumpunya">Sudah Punya akun <a href="<?= base_url(); ?>/Auth">login!!</a> </h5>
    </div>
</div> -->



<?= $this->endSection(); ?>