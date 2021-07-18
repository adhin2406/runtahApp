<?= $this->extend('Template/AdminTemplate/head'); ?>

<?= $this->Section('content'); ?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">username</th>
                <th scope="col">berat</th>
                <th scope="col">harga</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mintaan as $data) : ?>
                <tr>
                    <th scope="row"><?= $data['id'] ?></th>
                    <td><?= $data['username'] ?></td>
                    <td><?= $data['berat'] ?> Kg</td>
                    <td>Rp <?= number_format($data['harga']) ?></td>
                    <?php if ($data['status'] == 0) : ?>
                        <td>
                            <form action="<?= base_url(); ?>/Admin/konfirmasi/<?= $data['id']; ?>" method="POST" autocomplete="off">
                                <input type="hidden" name="harga" value="<?= $data['harga']; ?>">
                                <input type="hidden" name="username" value="<?= $data['username']; ?>">
                                <input type="submit" class="btn btn-warning" value="Konfirmasi">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop<?= $data['id'] ?>">
                                    Detail
                                </button>
                            </form>
                        </td>
                    <?php else : ?>
                        <td>
                            <a class="btn btn-success">driver otw</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop<?= $data['id'] ?>">
                                Detail
                            </button>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links('tabungGas', 'bootstrap_pagination') ?>

    <?php foreach ($mintaan as $data) : ?>
        <div class="modal fade" id="staticBackdrop<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Detail Sampah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-5">
                                <h5> Foto Sampah</h5>
                                <img src="<?= base_url() ?>/img/tabungan/<?= $data['gambar'] ?>" class="img-fluid img-thumbnail">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 dataDiri">
                                <h5>Detail Sampah</h5>
                                <h6 class="font-weight-bold">Data diri</h6>
                                <p class="terserah"><?= $data['username']; ?></p>

                                <h6 class="font-weight-bold">Berat Sampah</h6>
                                <p class="terserah"><?= $data['berat'] ?> Kg</p>

                                <h6 class="font-weight-bold">Harga Sampah</h6>
                                <p class="terserah">Rp <?= $data['harga'] ?></p>

                                <h6 class="font-weight-bold">nomer hp yang bisa dihubungi</h6>
                                <p class="terserah"><?= $data['nomer']; ?></p>

                                <h6 class="font-weight-bold">alamat penjemputan</h6>
                                <p class="terserah"><?= $data['alamat']; ?></p>

                                <h6 class="font-weight-bold">Jadwal Penjemputan</h6>
                                <p class="terserah"><?= date('j F Y', strtotime($data['jadwal'])); ?></p>



                                <h6 class="font-weight-bold">Status</h6>
                                <?php if ($data['status'] == 0) : ?>
                                    <p class="alert alert-warning" role="alert">Menunggu konfirmasi</p>
                                <?php elseif ($data['status'] == 1) : ?>
                                    <p class="alert alert-primary" role="alert">Driver sedang ke tempat Nasabah</p>
                                <?php elseif ($data['status'] == 2) :  ?>
                                    <p class="alert alert-info" role="alert">Sampah sudah di bank sampah</p>
                                <?php else : ?>
                                    <p class="alert alert-success" role="alert">Sampah Sudah terjual ke pengepul</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php if ($data['status'] == 0) : ?>
                            <form action="<?= base_url(); ?>/Admin/konfirmasi/<?= $data['id']; ?>" method="POST">
                                <input type="hidden" name="harga" value="<?= $data['harga']; ?>">
                                <input type="submit" class="btn btn-warning" value="Non-Konfirmasi">
                            </form>
                        <?php else : ?>
                            <a class="btn btn-success">konfirmasi</a>
                        <?php endif; ?>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>

<?= $this->endSection(); ?>