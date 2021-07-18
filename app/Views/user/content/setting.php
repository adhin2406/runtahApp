<?= $this->extend('Template/Template'); ?>


<?= $this->Section('content'); ?>


<nav class="navbar  shadow navbar-expand-lg navbar-light settinghead">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>/Utama">
            <i class="fas fa-chevron-left float-left mr-3 mt-2 mb-2"></i>
            <h5 class="mt-2 mb-2"> Settings</h5>
        </a>
    </div>
</nav>



<!-- content -->

<div class="container set">

    <div class="row gutters-sm">
        <div class="col-md-4 d-none d-md-block">
            <div class="card">
                <div class="card-body">
                    <nav class="nav flex-column nav-pills nav-gap-y-1">
                        <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>Profile
                        </a>
                        <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>Ubah password
                        </a>
                        <a href="#chat" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg width="24" height="24" fill="currentColor" class="bi bi-chat-dots mr-2" viewBox="0 0 16 16">
                                <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                            </svg>Kritik / saran
                        </a>
                        <a href="#billing" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                <line x1="1" y1="10" x2="23" y2="10"></line>
                            </svg>Tambah akun bank
                        </a>
                        <a href="<?= base_url('Auth/Logout'); ?>" class="nav-item nav-link has-icon logout">
                            <svg width="24" height="24" fill="currentColor" class="bi mr-2 bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>Keluar
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-bottom mb-3 d-flex d-md-none">
                    <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                        <li class="nav-item">
                            <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg></a>
                        </li>
                        <li class="nav-item">
                            <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg></a>
                        </li>
                        <li class="nav-item">
                            <a href="#chat" data-toggle="tab" class="nav-link has-icon">
                                <svg width="24" height="24" fill="currentColor" class="bi bi-chat-dots mr-2" viewBox="0 0 16 16">
                                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#billing" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Auth/Logout'); ?>" class="nav-link has-icon logout">
                                <svg width="24" height="24" fill="currentColor" class="bi mr-2 bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body tab-content">
                    <div class="tab-pane active" id="profile">
                        <h6>PROFILE SAYA</h6>
                        <hr>
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
                        <form action="<?= base_url('Auth/set'); ?>/<?= session()->get('id'); ?>" method="POST" autocomplete="off" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="gambarlama" value="<?= session()->get('gambar'); ?>">
                            <div class="form-group mb-4">
                                <div class="card-body media align-items-center">
                                    <img src="<?= base_url(''); ?>/img/users/<?= session()->get('gambar'); ?>" alt="" class="d-block ui-w-80" id="preview">
                                    <div class="media-body ml-4">
                                        <label class="btn btn-outline-primary">
                                            Upload new photo
                                            <input type="file" class="account-settings-fileinput <?= ($validation->hasError('gambar')) ? 'is-invalid' :  ''; ?>" name="gambar" id="gambar" value="<?= session()->get('gambar'); ?>" onchange="bargama()">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('gambar'); ?>
                                            </div>
                                        </label> &nbsp;
                                        <div class="text-light small mt-1">Allowed JPG, JPEG or PNG. Max size of 800K</div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="fullName">Username</label>
                                <input type="text" class="form-control  <?= ($validation->hasError('username')) ? 'is-invalid' :  ''; ?>" id="fullName" name="username" aria-describedby="fullNameHelp" placeholder="Enter your Username" value="<?= session()->get('username'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' :  ''; ?>" id="email" name="email" aria-describedby="fullNameHelp" placeholder="Enter your email" value="<?= session()->get('email'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control autosize <?= ($validation->hasError('alamat')) ? 'is-invalid' :  ''; ?>" id="alamat" name="alamat" placeholder="alamat kamu dimana" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;"><?= session()->get('alamat'); ?></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nomer">nomer</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nomer')) ? 'is-invalid' :  ''; ?>" id="nomer" name="nomer" placeholder="Enter your nomer hp" value="<?= session()->get('nomer'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nomer'); ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Update Profile</button>
                        </form>
                    </div>
                    <div class="tab-pane" id="chat">
                        <h6>Kritik dan saran</h6>
                        <hr>
                        <form action="<?= base_url(); ?>/Utama/saran" method="POST" autocomplete="off">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="user" aria-describedby="usernameHelp" placeholder="Enter your username" value="<?= session()->get('username'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('user'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="saran">saran/kritik</label>
                                <textarea class="form-control autosize <?= ($validation->hasError('saran')) ? 'is-invalid' :  ''; ?>" id="saran" name="saran" placeholder="saran kamu!" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;"></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('saran'); ?>
                                </div>
                            </div>
                            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-paper-plane mr-2"></i>Kirim</button>
                        </form>
                    </div>
                    <div class="tab-pane" id="security">
                        <h6>Ubah password</h6>
                        <hr>
                        <form action="<?= base_url(); ?>/Auth/keamanan/<?= session()->get('id'); ?>" method="POST" autocomplete="off">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <input type="password" class="form-control <?= ($validation->hasError('passwordlama')) ? 'is-invalid' :  ''; ?>" name="passwordlama" placeholder="Enter your old password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('passwordlama'); ?>
                                </div>
                                <input type="password" class="form-control mt-1 <?= ($validation->hasError('passwordbaru')) ? 'is-invalid' :  ''; ?>" name="passwordbaru" placeholder="New password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('passwordbaru'); ?>
                                </div>
                                <input type="password" class="form-control mt-1 <?= ($validation->hasError('konfirmasi')) ? 'is-invalid' :  ''; ?>" name="konfirmasi" placeholder="Confirm new password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('konfirmasi'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Update password</button>
                            </div>
                        </form>
                        <hr>
                    </div>
                    <div class="tab-pane" id="billing">
                        <h6>Akun bank</h6>
                        <hr>
                        <form>
                            <div class="form-group">
                                <div class="small text-muted mb-3">You have not added a payment method</div>
                                <a class="btn btn-info text-white" href="<?= base_url(); ?>/Akun" type="button">Tambah akun bank</a>
                            </div>
                            <div class="form-group mb-0">
                                <label class="d-block">Akun bank terdaftar</label>
                                <?php foreach ($akunBank as $data) : ?>
                                    <?php if ($data === null) : ?>
                                        <div class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm">Tidak ada akun bank.</div>
                                    <?php else : ?>
                                        <div class="bank">
                                            <svg width="1.6em" height="1.6em" fill="currentColor" class="bi bi-bank2 float-left" viewBox="0 0 16 16">
                                                <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                                            </svg>
                                            <div class="bankKUn ml-5">
                                                <h5><?= $data['rekening']; ?></h5>
                                                <p><?= $data['nomorRek']; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>





                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




<?= $this->include('Template/Navbar'); ?>

<?= $this->endSection(); ?>