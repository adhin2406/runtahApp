<?= $this->extend('Template/Template'); ?>

<?= $this->Section('content'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>/Utama/chekout">
            <i class="fas fa-chevron-left float-left mr-3 mt-2 mb-2"></i>
            <h6 class="mt-2 mb-2 ">Kembali</h6>
        </a>
    </div>
</nav>


<!-- pc version -->
<div class="px-0 d-none d-lg-block" style="height: fit-content;">
    <div class="container konfirmasiTransaksi">
        <div class="row">
            <div class="col-6">
                <div class="jenisSampah">
                    <h5>Jenis Sampah</h5>
                </div>
                <div class="col-12">
                    <?php foreach ($notiv as $data) : ?>
                        <div class="row mb-4 mt-4">
                            <div class="col-4">
                                <img src="<?= base_url(); ?>/img/icon/<?= $data['gambarSampah']; ?>">
                            </div>
                            <div class="col-8">
                                <h5 class="m-0 judul"><?= $data['nama_sampah']; ?></h5>
                                <p class="m-0 harga" style="color: #C4C4C4;">Rp <?= number_format($data['harga']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-6">
                <div class="jenisSampah mb-3">
                    <h5>Bukti Sampah</h5>
                </div>
                <div class="container">
                    <img src="<?= base_url(); ?>/img/tabungan/<?= $data['gambar']; ?>" class="bukti">
                </div>

                <div class="col-lg-6 col-md-6 col-12 dataDiri">
                    <h6>Data diri</h6>
                    <p><?= $data['username']; ?></p>

                    <h6>nomer hp yang bisa dihubungi</h6>
                    <p><?= $data['nomer']; ?></p>

                    <h6>alamat penjemputan</h6>
                    <p><?= $data['alamat']; ?></p>

                    <h6>Jadwal Penjemputan</h6>
                    <p><?= date('j F Y', strtotime($data['jadwal'])); ?></p>

                    <h6>Status</h6>
                    <?php if ($data['status'] == 0) : ?>
                        <p class="alert alert-warning" role="alert">Di Proses</p>
                    <?php elseif ($data['status'] == 1) : ?>
                        <p class="alert alert-primary" role="alert">Driver sedang ke tempat anda</p>
                    <?php elseif ($data['status'] == 2) :  ?>
                        <p class="alert alert-info" role="alert">Sampah sudah di bank sampah</p>
                    <?php else : ?>
                        <p class="alert alert-success" role="alert">Sampah Sudah terjual ke pengepul</p>
                    <?php endif; ?>


                    <a class="btn form-control" href="<?= base_url(); ?>/Utama/delete/<?= $data['idtransaksi']; ?>">batal</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- mobile version -->
<div class="px-0 d-lg-none" style="height: max-content;">
    <div class="container konfirmasiTransaksi">
        <div class="jenisSampah">
            <h5>Jenis Sampah</h5>
        </div>
        <div class="col-12">
            <?php foreach ($notiv as $data) : ?>
                <div class="row mb-4 mt-4">
                    <div class="col-4">
                        <img src="<?= base_url(); ?>/img/icon/<?= $data['gambarSampah']; ?>">
                    </div>
                    <div class="col-8">
                        <h5 class="m-0 judul"><?= $data['nama_sampah']; ?></h5>
                        <p class="m-0 harga" style="color: #C4C4C4;">Rp <?= number_format($data['harga']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="jenisSampah mt-5">
            <h5>Bukti Sampah</h5>
        </div>
        <div class="container">
            <img src="<?= base_url(); ?>/img/tabungan/<?= $data['gambar']; ?>">
        </div>

        <div class="col-lg-6 col-md-6 col-12 dataDiri">
            <h6>Data diri</h6>
            <p><?= $data['username']; ?></p>

            <h6>nomer hp yang bisa dihubungi</h6>
            <p><?= $data['nomer']; ?></p>

            <h6>alamat penjemputan</h6>
            <p><?= $data['alamat']; ?></p>

            <h6>Jadwal Penjemputan</h6>
            <p><?= date('j F Y', strtotime($data['jadwal'])); ?></p>

            <h6>Status</h6>
            <?php if ($data['status'] == 0) : ?>
                <p class="alert alert-warning" role="alert">Di Proses</p>
            <?php elseif ($data['status'] == 1) : ?>
                <p class="alert alert-primary" role="alert">Driver sedang ke tempat anda</p>
            <?php elseif ($data['status'] == 2) :  ?>
                <p class="alert alert-info" role="alert">Sampah sudah di bank sampah</p>
            <?php else : ?>
                <p class="alert alert-success" role="alert">Sampah Sudah terjual ke pengepul</p>
            <?php endif; ?>


            <a class="btn form-control" href="<?= base_url(); ?>/Utama/delete/<?= $data['idtransaksi']; ?>">batal</a>
        </div>
    </div>
</div>

<?= $this->include('Template/Navbar'); ?>


<?= $this->endSection(); ?>