<?= $this->extend('Template/Template'); ?>

<?= $this->Section('content'); ?>

<!-- pc version -->
<div class="px-0 d-none d-lg-block" style="height: fit-content;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top head">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="profil rounded-circle" src="<?= base_url('/img'); ?>/users/<?= session()->get('gambar'); ?>">
                <span class="ml-1 sleman">selamat datang</span>
                <span class="ml-5 nama d-flex"><?= session()->get('username'); ?></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span><img src="img/navbtn.png"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-uppercase mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>">home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/Utama/chekout">Aktivitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url(); ?>/Utama/bantuan">Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/Utama/keranjang">Setting</a>
                    </li>
                </ul>
                <!-- cart -->
                <a href="<?= base_url(); ?>/Utama/keranjang" class="nav-link text-white p-auto my-auto">
                    <?php if ($produk) : ?>
                        <svg width="1.5em" height="1.5em" fill="currentColor" class="bi bi-cart3 " viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <span class="badge angka badge-danger badge-counter"><?= $produk; ?></span>
                    <?php else : ?>
                        <svg width="1.5em" height="1.5em" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </nav>
    <!-- conten jumbotron -->
    <div id="carouselExampleSlidesOnly" class="carousel slide sliders" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url(); ?>/img/bg/1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>/img/bg/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>/img/bg/3.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <!-- fitur -->
    <div class="container fitur">
        <div class="card mx-0">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <span class="text-center salod ">saldo</span>
                        <?php foreach ($saldo as $data) : ?>
                            <?php if ($data['saldo'] == null) : ?>
                                <h5 class="saldo">RP 0</h5>
                            <?php else : ?>
                                <h5 class="saldo">RP <?= number_format($data['saldo']); ?></h5>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                    <div class="col-6">
                        <a href="<?= base_url(); ?>/Utama/Tarik" class="nav-link btn btn-success mt-3 text-white">Tarik dana</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- mobile version -->
<div class="px-0 d-lg-none" style="height: max-content;">
    <nav class="navbar hp navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="<?= base_url(); ?>/Utama/setting">
            <img class="profil rounded-circle" src="<?= base_url('/img'); ?>/users/<?= session()->get('gambar'); ?>">
            <span class="ml-1 sleman">selamat datang</span>
            <span class="ml-5 nama d-flex"><?= session()->get('username'); ?></span>
        </a>
        <a class=" float-right mobile cart" href="<?= base_url(); ?>/Utama/keranjang">
            <?php if ($produk) : ?>
                <svg width="1.5em" height="1.5em" fill="currentColor" class="bi bi-cart3 " viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <span class="badge badge-danger badge-counter"><?= $produk; ?></span>
            <?php else : ?>
                <svg width="1.5em" height="1.5em" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
            <?php endif; ?>
        </a>
    </nav>
    <div class="hpJumbotron">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url(); ?>/img/bg/1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url(); ?>/img/bg/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url(); ?>/img/bg/3.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- saldo -->
    <div class="mobilefitur">
        <div class="col-12">
            <div class="card mx-0 shadow">
                <div class="container">
                    <div class="row">
                        <div class="col-7">
                            <span class="text-center salod ">saldo</span>
                            <?php foreach ($saldo as $data) : ?>
                                <?php if ($data['saldo'] == null) : ?>
                                    <h5 class="saldo">RP 0</h5>
                                <?php else : ?>
                                    <h5 class="saldo">RP <?= number_format($data['saldo']); ?></h5>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>

                        <div class="col-5">
                            <a href="<?= base_url(); ?>/Utama/Tarik" class="nav-link btn btn-success mt-3 text-white">Tarik dana</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- sampah -->
<section id="portfolio" class="portfolio">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">
                        <svg width="2.5em" height="2.5em" fill="currentColor" class="bi bi-recycle mb-3 mt-2" viewBox="0 0 16 16">
                            <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z" />
                        </svg>
                        <span class="small filterText d-block">Semua</span>
                    </li>
                    <li data-filter=".filter-plastik">
                        <img src="<?= base_url(); ?>/img/icon/cup.png" class="figure-img img-fluid ml-5 iconi">
                        <span class="small filterText d-block">Plastik</span>
                    </li>
                    <li data-filter=".filter-kertas">
                        <img src="<?= base_url(); ?>/img/icon/kertass.png" class="figure-img img-fluid ml-5 iconi">
                        <span class="small filterText d-block">Kertas</span>
                    </li>
                    <li data-filter=".filter-botol">
                        <img src="<?= base_url(); ?>/img/icon/b.png" class="figure-img img-fluid iconi">
                        <span class="small filterText d-block">Botol</span>
                    </li>
                    <li data-filter=".filter-elektronik">
                        <img src="<?= base_url(); ?>/img/icon/ac.png" class="figure-img img-fluid  iconi ml-5">
                        <span class="small filterText d-block">Gadgets</span>
                    </li>
                    <li data-filter=".filter-logam">
                        <img src="<?= base_url(); ?>/img/icon/kelan.png" class="figure-img img-fluid ml-5 iconi">
                        <span class="small filterText d-block">Logam</span>
                    </li>
                    <li data-filter=".filter-besi">
                        <img src="<?= base_url(); ?>/img/icon/tua.png" class="figure-img img-fluid ml-5 iconi">
                        <span class="small filterText d-block">Logam</span>
                    </li>
                    <li data-filter=".filter-service">
                        <a href="https://api.whatsapp.com/send?phone=6285775652108" class="wa">
                            <img src="<?= base_url(); ?>/img/icon/wa.svg" class="figure-img img-fluid ml-5">
                            <span class="small filterText  d-block">Telp kami</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container mt-5">
            <?php foreach ($query as $data) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item filter-<?= $data['category']; ?>">
                    <a href="<?= base_url('Utama'); ?>/detail/<?= $data['nama_sampah']; ?>" class="btn">
                        <figure class="figure icon-box">
                            <div class="portfolio-wrap">
                                <img src="<?= base_url(); ?>/img/icon/<?= $data['gambar']; ?>" class="figure-img img-fluid">
                            </div>
                            <figcaption class="figure-caption text-center portfolio-info">
                                <h4><?= $data['nama_sampah']; ?></h4>
                                <?php if ($data['category'] == 'elektronik') : ?>
                                    <p><?= number_format($data['harga']); ?>/unit</p>
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
</section>




<div class="faq">
    <div class="container">
        <p>untuk informasi lebih lanjut, kunjungi halaman FAQ. <a href="<?= base_url(); ?>/Utama/bantuan">di sini</a></p>
    </div>
</div>




<?= $this->include('Template/Navbar'); ?>



<?= $this->endsection(); ?>