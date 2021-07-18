<?= $this->extend('Template/Template'); ?>


<?= $this->section('content'); ?>
<nav class="navbar  navbar-expand-lg navbar-light shadow fixed-top bg-white">
    <div class="container">
        <a class="navbar-brand text-center" href="<?= base_url(); ?>/Utama">
            <i class="fas fa-chevron-left float-left mr-3 mt-2 mb-2"></i>
            <h6 class="mt-2 mb-2">kembali</h6>
        </a>
    </div>
</nav>

<!-- content -->
<div class="contenHarga">
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="1">
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
                            <span class="small filterText d-block">Besi</span>
                        </li>
                        <li>
                            <svg width="2.5em" height="2.5em" fill="currentColor" class="bi bi-whatsapp mb-3 mt-2" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                            </svg>
                            <span class="small filterText d-block">Service</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="1">
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
                                        <p>Rp <?= $data['harga']; ?>/unit</p>
                                    <?php else : ?>
                                        <p>Rp <?= $data['harga']; ?>/kg</p>
                                    <?php endif; ?>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<?= $this->include('Template/Navbar'); ?>
<?= $this->endSection(); ?>