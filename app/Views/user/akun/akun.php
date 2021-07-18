<?= $this->extend('Template/Template'); ?>


<?= $this->Section('content'); ?>


<nav class="navbar  shadow navbar-expand-lg navbar-light settinghead">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>/Utama/setting">
            <i class="fas fa-chevron-left float-left mr-3 mt-2 mb-2"></i>
            <h5 class="mt-2 mb-2">Kembali</h5>
        </a>
    </div>
</nav>



<!-- content transaksi -->
<div class="container">
    <form class="mt-5" action="<?= base_url(); ?>/Akun/Save" method="POST" autocomplete="off">
        <input type="hidden" name="nama" value="<?= session()->get('username'); ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?= session()->get('email'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('email'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="Nomer">Nomer Hp</label>
            <input type="number" class="form-control <?= ($validation->hasError('nomer')) ? 'is-invalid' :  ''; ?>" name="nomer" id="nomer" value="<?= session()->get('nomer'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('nomer'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Bank</label>
            <select class="form-control  <?= ($validation->hasError('rekening')) ? 'is-invalid' :  ''; ?>" id="exampleFormControlSelect1" name="rekening">
                <?php foreach ($bank as $data) : ?>
                    <option><?= $data['name']; ?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('rekening'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="Nomer">Nomer rekening</label>
            <input type="number" class="form-control  <?= ($validation->hasError('nomorRek')) ? 'is-invalid' :  ''; ?>" id="nomerRek" name="nomorRek" placeholder="contoh 11223344323">
            <div class="invalid-feedback">
                <?= $validation->getError('nomorRek'); ?>
            </div>
        </div>
        <button type="submit" class="btn form-control btn-primary">kirim</button>
    </form>
</div>




<?= $this->include('Template/Navbar'); ?>

<?= $this->endSection(); ?>