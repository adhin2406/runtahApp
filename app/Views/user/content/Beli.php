<?= $this->extend('Template/Template'); ?>


<?= $this->section('content'); ?>
<nav class="navbar  navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>/Utama">
            <i class="fas fa-chevron-left float-left mr-3  mt-2 mb-2"></i>
            <h6 class="mt-2 mb-2 ">Kembali</h6>
        </a>
        <a class=" float-right btn" href="<?= base_url(); ?>/Utama/keranjang">
            <?php if ($total) : ?>
                <svg width="1.5em" height="1.5em" fill="currentColor" class="bi bi-cart3 " viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <!-- Counter - Alerts -->
                <span class="badge JumlahSampah badge-danger badge-counter"><?= $total; ?></span>
            <?php else : ?>
                <svg width="1.5em" height="1.5em" fill="currentColor" class="bi bi-cart3 " viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
            <?php endif; ?>
        </a>
    </div>
</nav>

<!-- content -->
<div class="detail">
    <div class="container">
        <div class="pesanSampah mt-5">
            <div class="flashdata" id="flashData" data-flashdata="<?= session()->getFlashdata('item'); ?>"></div>
            <?php if (!empty(session()->getFlashdata('success'))) :  ?>
                <?= session()->getFlashdata('success') ?>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="contendetail">
                    <div class="card">
                        <img src="<?= base_url(); ?>/img/icon/<?= $query['gambar']; ?>" class="img-fluid" alt="">
                        <div class="card-body infor">
                            <h5 class="card-title"> <?= $query['nama_sampah']; ?></h5>
                            <p class="card-text">Rp <span id="hargaAhir"><?= $query['harga']; ?></span>/kg</p>
                            <div class="float-right">
                                <button type="submit" class="btn btn-sm" id="minus" style="background-color: #eaeaef; color: white;">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <span class="mx-2" id="jumlah"><?= $query['berat']; ?></span>
                                <input type="hidden" id="hargaAwal" value="<?= $query['harga']; ?>">
                                <button type="submit" class="btn btn-sm" id="plus" style="background-color: #1b7500;; color: white;">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="conten">
                    <div class="deskripsi">
                        <div class="container">
                            <h5>Detail Produk</h5>
                            <p>
                                <?= $query['deskripsi']; ?>
                            </p>
                        </div>
                    </div>


                </div>
                <div class="container contendetail">
                    <form action="<?= base_url(); ?>/Utama/beli/<?= $query['nama_sampah']; ?>" method="POST" autocomplete="off" class=" mt-4">
                        <input type="hidden" name="berat" id="beratkuy" value="<?= $query['berat']; ?>">
                        <input type="hidden" name="id" value="<?= $query['id']; ?>">
                        <input type="hidden" name="user" value="<?= session()->get('username'); ?>">
                        <input type="hidden" name="produk_id" value="<?= $produk; ?>">
                        <input type="hidden" name="nama_sampah" value="<?= $query['nama_sampah']; ?>">
                        <input type="hidden" id="hargakuy" name="harga" value="<?= $query['harga']; ?>">
                        <input type="hidden" name="gambar" value="<?= $query['gambar']; ?>">
                        <input type="submit" class="btn form-control btn-success" value="Tambah ke keranjang">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- sampah terkait -->
<div class="container sampahTerkait">
    <div class="judulSampah">
        <h6>Sampah pilihan</h6>
    </div>
    <div class="row">
        <?php foreach ($sampahLain as $data) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item filter-<?= $data['category']; ?>">
                <a href="<?= base_url('Utama'); ?>/detail/<?= $data['nama_sampah']; ?>" class="btn">
                    <figure class="figure icon-box">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url(); ?>/img/icon/<?= $data['gambar']; ?>" class="figure-img img-fluid">
                        </div>
                        <figcaption class="figure-caption text-center portfolio-info">
                            <h4><?= $data['nama_sampah']; ?></h4>
                            <?php if ($data['category'] == 'elektronik') : ?>
                                <p>Rp <?= number_format($data['harga']); ?>/unit</p>
                            <?php else : ?>
                                <p>Rp <?= number_format($data['harga']); ?>/kg</p>
                            <?php endif; ?>
                        </figcaption>
                    </figure>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?= $this->include('Template/Navbar'); ?>

<?= $this->endSection(); ?>