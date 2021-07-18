<?= $this->extend('Template/AdminTemplate/head'); ?>

<?= $this->Section('content'); ?>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url(); ?>/Admin/nasabah" style="text-decoration: none;">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            nasabah
                        </div>
                        <?php foreach ($jumlahUser as $data) : ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['id']; ?></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url(); ?>/Admin/TarikSaldo" style="text-decoration: none;">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            saldo </div>
                        <?php foreach ($saldoOrang as $data) : ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">RP <?= number_format($data['harga']); ?></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>


<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url("Admin/tabungan") ?>" style="text-decoration: none;">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            permintaan</div>
                        <?php foreach ($tabung as $data) : ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['id']; ?></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url(); ?>/Admin/TarikSaldo" style="text-decoration: none;">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Ganti slider</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-upload fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>



<?= $this->endSection(); ?>