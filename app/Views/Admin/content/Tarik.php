<?= $this->extend('Template/AdminTemplate/head'); ?>

<?= $this->Section('content'); ?>



<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">username</th>
        <th scope="col">jumlah yang akan ditarik</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($note as $data) : ?>
        <tr>
          <th scope="row"><?= $data['id']; ?></th>
          <td><?= $data['username']; ?></td>
          <td>Rp <?= number_format($data['jumlah_uang']); ?></td>
          <?php if ($data['status'] == 0) : ?>
            <td>
              <form action="<?= base_url(); ?>/Admin/konfirmasiSaldo/<?= $data['id']; ?>" method="POST" autocomplete="off">
                <input type="submit" class="btn btn-warning" value="Konfirmasi">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop<?= $data['id'] ?>">
                  Detail
                </button>
              </form>
            </td>
          <?php else : ?>
            <td>
              <a class="btn btn-success">Selesai</a>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop<?= $data['id'] ?>">
                Detail
              </button>
            </td>
          <?php endif; ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>








<?= $this->endSection(); ?>