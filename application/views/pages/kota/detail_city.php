<div class="container">
  <div class="card">
    <h5 class="card-header">Detail Data City</h5>
    <div class="card-body">
      <p class="card-title">Nama Kota : <?= $city['name']; ?></p>
      <p class="card-text">ID Provinsi : <?= $city['province_id']; ?></p>
      <a href="<?= base_url(); ?>c_tugas" class="btn btn-primary">Back</a>
    </div>
  </div>
</div>