<?= $this->extend('Template/AdminTemplate/head'); ?>

<?= $this->Section('content'); ?>

<div class="container customer">
    <div class="row">
        <?php foreach ($user as $data) : ?>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <a href="<?= base_url(); ?>/Admin/nasabahDetail/<?= $data['id']; ?>" class="btn">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url("/img/users"); ?>/<?= $data["gambar"]; ?>" class="card-img-top nasabah">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['username']; ?></h5>
                            <p class="card-text">
                                gabung tanggal <?= date('j,F,Y', strtotime($data['created_at'])); ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>


</div>

<?= $this->endSection(); ?>