<?= $this->extend('Template/Template'); ?>
<?= $this->section('content'); ?>

<nav class="navbar  navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>/Utama">
            <i class="fas fa-chevron-left float-left mr-3  mt-2 mb-2"></i>
            <h6 class="mt-2 mb-2 ">Kembali</h6>
        </a>
    </div>
</nav>







<!-- pesan -->
<div class="container settingBank">
    <?php if ($akunBank == null) : ?>
        <div class="alert alert-warning" role="alert">
            Anda belum memiliki akun bank <a href="<?= base_url(); ?>/Utama/setting#billing">Datar disini</a>
        </div>
    <?php endif; ?>
</div>



<!-- conten tarik dana -->
<div class="flashdata" id="maaf" data-maaf="<?= session()->getFlashdata('maaf'); ?>"></div>
<?php if (!empty(session()->getFlashdata('maaf'))) :  ?>
<?php endif; ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <a class="btn btn-success" data-toggle="modal" data-target="#tarik">Tarik dana</a>
            <!-- Modal -->
            <div class="modal fade" id="tarik" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tarik Tunai</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <form action="<?= base_url(); ?>/Utama/TarikDana" method="POST" autocomplete="off">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Saldo dalam bank sampah</label>
                                        <?php foreach ($saldo as $data) : ?>
                                            <input type="text" name="saldo" class="form-control <?= ($validation->hasError('saldo')) ? 'is-invalid' :  ''; ?>" id="saldoBank" placeholder="saldo bank sampah" value="<?= number_format($data['saldo'], 0, ".", "."); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('saldo'); ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikBerapa">Tarik berapa</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('jumlah_uang')) ? 'is-invalid' :  ''; ?>" name="jumlah_uang" id="tarikBerapa" placeholder="minimal penarikan 50 ribu">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jumlah_uang'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">tarik kemana</label>
                                        <select class="form-control <?= ($validation->hasError('metode')) ? 'is-invalid' :  ''; ?>" id="exampleFormControlSelect1" name="metode">
                                            <option>tarik tunai</option>
                                            <?php foreach ($akunBank as $akun) : ?>
                                                <option><?= $akun['rekening']; ?></option>
                                                <input type="hidden" name="nomorRek" value="<?= $akun['nomorRek']; ?>">
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('metode'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success form-control">kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-header border-bottom mb-3 mt-5 d-flex">
        <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
            <li class="nav-item">
                <a href="#proses" data-toggle="tab" class="nav-link has-icon active text-black-50">
                    Dalam Proses
                </a>
            </li>
            <li class="nav-item">
                <a href="#saldo" data-toggle="tab" class="nav-link has-icon text-black-50">
                    selesai
                </a>
            </li>
        </ul>
    </div>
    <div class="card-body tab-content">
        <div class="tab-pane active" id="proses">
            <ul class="list-unstyled">
                <?php foreach ($riwayat as $pengalaman) : ?>
                    <?php if ($pengalaman['status'] == 0) : ?>
                        <li class="media">
                            <svg width="2.5em" height="2.5rem" fill="currentColor" class="bi bi-cash-coin mr-3 mt-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                            </svg>
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><?= $pengalaman['username']; ?></h5>
                                Rp <?= number_format($pengalaman['jumlah_uang']); ?>
                            </div>
                            <div class="status float-right">
                                <?php if ($pengalaman['status'] == 0) : ?>
                                    <a class="btn btn-warning">Masih Proses</a>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="tab-pane active" id="saldo">
            <ul class="list-unstyled">
                <?php foreach ($riwayat as $pengalaman) : ?>
                    <?php if ($pengalaman['status'] == 1) : ?>
                        <li class="media">
                            <svg width="2.5em" height="2.5rem" fill="currentColor" class="bi bi-cash-coin mr-3 mt-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                            </svg>
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><?= $pengalaman['username']; ?></h5>
                                Rp <?= $pengalaman['jumlah_uang']; ?>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>




<?= $this->include('Template/Navbar'); ?>
<?= $this->endSection(); ?>