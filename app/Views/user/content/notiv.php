<?= $this->extend('Template/Template'); ?>

<?= $this->Section('content'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>/Utama">
            <i class="fas fa-chevron-left float-left mr-3 mt-2 mb-2"></i>
            <h6 class="mt-2 mb-2 ">Kembali</h6>
        </a>
    </div>
</nav>

<!-- content harga -->
<div class="container notiv">
    <div class="pesanSampah mt-5">
        <div class="chekout" id="chekout" data-chekout="<?= session()->getFlashdata('success'); ?>"></div>
        <?php if (!empty(session()->getFlashdata('success'))) :  ?>

        <?php endif; ?>
        <div class="chekout" id="hapus" data-hapus="<?= session()->getFlashdata('hapus'); ?>"></div>
        <?php if (!empty(session()->getFlashdata('hapus'))) :  ?>

        <?php endif; ?>
        <div class="chekout" id="gagal" data-gagal="<?= session()->getFlashdata('gagal'); ?>"></div>
        <?php if (!empty(session()->getFlashdata('gagal'))) :  ?>

        <?php endif; ?>
    </div>
    <div class="row">
        <?php foreach ($notiv as $riwayat) : ?>
            <div class="col-lg-4 col-md-4 col-12">
                <a href="<?= base_url(); ?>/Utama/Konfirmasi/<?= $riwayat['idtransaksi'] ?>" class="btn">
                    <div class="card mx-0">
                        <div class="judul">
                            <svg width="1.4em" height="1.4em" fill="currentColor" class="bi bi-recycle float-left" viewBox="0 0 16 16">
                                <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z" />
                            </svg>
                            <span class="float-left"><?= $riwayat['username']; ?> jual sampah</span>
                            <br>
                            <p class="small float-left text-muted ml-1"><?= date('d F Y', strtotime($riwayat['created_at'])); ?></p>
                        </div>

                        <hr class="mt-5">
                        <div class="contentDetail">
                            <p class="estimani">Nilai transaksi</p>
                            <h4>Rp <?= number_format($riwayat['harga']); ?></h4>
                            <?php if ($riwayat['status'] == 0) : ?>
                                <a class="btn btn-warning float-right mt-3">Di Proses</a>
                            <?php else : ?>
                                <a class="btn btn-success float-right mt-3">selesai</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

</div>




<?= $this->include('Template/Navbar'); ?>


<?= $this->endSection(); ?>