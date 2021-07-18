<?= $this->extend('Template/AdminTemplate/head'); ?>

<?= $this->Section('content'); ?>

<div class="container detail">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow">
                <img src="<?= base_url(); ?>/img/users/<?= $user['gambar']; ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $user['username']; ?></h5>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header border-bottom mb-3 d-flex">
                    <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                        <li class="nav-item">
                            <a href="#profile" data-toggle="tab" class="nav-link has-icon active text-black-50">
                                identitas nasabah
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#saldo" data-toggle="tab" class="nav-link has-icon text-black-50">
                                Riwayat Saldo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#transaksi" data-toggle="tab" class="nav-link has-icon text-black-50">
                                Riwayat transaksi
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body tab-content">
                    <div class="tab-pane active" id="profile">
                        <form action="" method="post" autocomplete="off">
                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label">nama</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="username" value="<?= $user['username']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user['email']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nomer" class="col-sm-2 col-form-label">No hp</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="nomer" value="<?= $user['nomer']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                                <div class="col-sm-10">
                                    <textarea type="text" readonly class="form-control-plaintext" id="alamat"><?= $user['alamat']; ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane active" id="saldo">
                    </div>

                    <div class="tab-pane active" id="transaksi">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>