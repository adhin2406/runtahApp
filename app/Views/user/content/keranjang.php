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


<div class="KeranjangSampah">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <section class="checkout px-0 d-none d-lg-block" style="height: fit-content;">
                    <div class="container">
                        <div class="row d-flex justify-content-between" style="margin-bottom: 100px;">
                            <div class="col-12">
                                <!-- itemsCart -->
                                <h6>Jenis Sampah</h6>
                                <?php foreach ($Sampah as $data) : ?>
                                    <div class="row mb-4 mt-4">
                                        <div class="col-2 text-right mt-1">
                                            <a href="<?= base_url(); ?>/Utama/hapusKeranjang/<?= $data['rowid']; ?>" class="btn btn-danger tombolHapus"><i class="fas fa-times"></i></a>
                                        </div>
                                        <div class="col-2">
                                            <img src="<?= base_url(); ?>/img/icon/<?= $data['gambar']; ?>">
                                        </div>
                                        <div class="col-4">
                                            <h5 class="m-0" style="color: #5A5A5A;"><?= $data['name']; ?></h5>
                                            <p class="m-0" style="color: #C4C4C4;">Rp <?= number_format($data['subtotal']); ?></p>
                                        </div>
                                        <div class="col-4">
                                            <button type="button" class="btn btn-sm" style="background-color: #eaeaef; color: white;">
                                                <i class="fas fa-minus-circle"></i>
                                            </button>
                                            <span class="mx-2"><?= $data['berat']; ?></span>
                                            <button type="button" class="btn btn-sm" style="background-color: #1ABC9C; color: white;">
                                                <i class="fas fa-plus-circle"></i>
                                            </button>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <a href="<?= base_url(); ?>/Utama/more">
                                    <label class="btn btn-outline-success form-control mt-3">
                                        Pilih sampah <i class="fas fa-trash"></i>
                                    </label>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="px-0 d-lg-none" style="height: max-content;">
                    <div class="row d-flex justify-content-between" style="margin-bottom: 100px;">
                        <div class="col-12">
                            <!-- itemsCart -->
                            <h6>Jenis Sampah</h6>
                            <?php foreach ($Sampah as $data) : ?>
                                <div class="row mb-4 mt-4">
                                    <div class="col-3">
                                        <img src="<?= base_url(); ?>/img/icon/<?= $data['gambar']; ?>">
                                    </div>
                                    <div class="col-4">
                                        <h5 class="m-0" style="color: #5A5A5A;"><?= $data['name']; ?></h5>
                                        <p class="m-0" style="color: #C4C4C4;">Rp <?= number_format($data['subtotal']); ?></p>
                                    </div>
                                    <div class="col-5">
                                        <button type="button" class="btn btn-sm" id="minus" style="background-color: #eaeaef; color: white;">
                                            <i class="fas fa-minus-circle"></i>
                                        </button>
                                        <span class="mx-2" id="jumlah"><?= $data['berat']; ?></span>
                                        <button type="button" class="btn btn-sm" style="background-color: #1b7500;; color: white;">
                                            <i class="fas fa-plus-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <a href="<?= base_url(); ?>/Utama/more">
                                <label class="btn btn-outline-success form-control mt-3">
                                    Pilih sampah <i class="fas fa-trash"></i>
                                </label>
                            </a>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-lg-6 col-md-6 col-12 inputData">
                <form action="<?= base_url(); ?>/Utama/Notif" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <?php foreach ($Sampah as $data) : ?>
                        <input type="hidden" name="nama[]" value="<?= $data['name']; ?>">
                        <input type="hidden" name="id[]" value="<?= $data['id']; ?>">
                        <input type="hidden" name="berat[]" value="<?= $data['berat']; ?>">
                        <input type="hidden" name="harga[]" value="<?= $data['price']; ?>">
                    <?php endforeach; ?>
                    <input type="hidden" name="user" value="<?= session()->get('username'); ?>">
                    <div class="form-group">
                        <h6>Foto Sampah</h6>
                        <label class="btn btn-outline-success form-control">
                            Upload foto sampah
                            <input type="file" class=" account-settings-fileinput <?= ($validation->hasError('gambar')) ? 'is-invalid' :  ''; ?>" name="gambar" id="gambar" value="<?= session()->get('gambar'); ?>" onchange="bargama()"><i class="fas fa-camera"></i>
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                        </label>
                        <img src="<?= base_url(''); ?>/img/icon/" alt="" class="d-block ui-w-80 gambarPre" id="preview">
                    </div>

                    <div class="form-group">
                        <h6>Alamat Penjemputan</h6>
                        <textarea class="form-control autosize <?= ($validation->hasError('alamat')) ? 'is-invalid' :  ''; ?>" name="alamat" placeholder="alamat kamu dimana" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;"><?= session()->get('alamat'); ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('alamat'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <h6>Jadwal Penjemputan</h6>
                        <input type="date" class="form-control  <?= ($validation->hasError('jadwal')) ? 'is-invalid' :  ''; ?>" name="jadwal" placeholder="jadwal penjemputan" value="06/24/2020">
                        <div class="invalid-feedback">
                            <?= $validation->getError('jadwal'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <h6 for="nomer">No.Hp yang bisa dihubungi </h6>
                        <input type="text" class="form-control <?= ($validation->hasError('nomer')) ? 'is-invalid' :  ''; ?>" name="nomer" placeholder="Enter your nomer hp" value="<?= session()->get('nomer'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nomer'); ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success form-control">Chekout</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->include('Template/Navbar'); ?>

<?= $this->endSection(); ?>