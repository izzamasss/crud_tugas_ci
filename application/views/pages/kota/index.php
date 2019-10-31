<div class="container">
  <div class="row">
    <div class="col">
        <h3>PROVINCE</h3>
        <a href="<?= base_url(); ?>c_tugas/delete_all_province" class="badge badge-danger float-right" onclick="return confirm('Anda yakin menghapus semua data?');">Delete All</a>
        <a href="<?= base_url(); ?>c_tugas/create_province" class="badge badge-primary float-right">Create data</a><br>
        <?php if($this->session->flashdata('flash_province')): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Provinsi <strong>berhasil</strong> <?= $this->session->flashdata('flash_province'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Province ID</th>
            <th>Province</th>
            <th>Action</th>
          </tr> 
        </thead>
        <tbody>
          <?php $i = 1; foreach ($province as $value):?>
             <tr>
                  <td><?= $i ?></td>
                  <td><?= $value['id'] ?></td>
                  <td><?= $value['name'] ?></td>
                  <td>
                  <!-- <a href="<?= base_url(); ?>c_buku/detail/<?= $value['id']; ?>" class="badge badge-primary">Detail</a> -->

                      <a href="<?= base_url(); ?>c_tugas/detail_province/<?= $value['id']; ?>" class="badge badge-primary">Detail</a>
                      <a href="<?= base_url(); ?>c_tugas/edit_province/<?= $value['id']; ?>" class="badge badge-warning">Edit</a>
                      <a href="<?= base_url(); ?>c_tugas/delete_province/<?= $value['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin menghapus?');">Delete</a>
                  </td>
              </tr>
        <?php $i++;endforeach; ?>  
        <tbody>
      </table>
    </div>  
    <div class="col">
      <h3>CITY</h3>
      <a href="<?= base_url(); ?>c_tugas/delete_all_city" class="badge badge-danger float-right" onclick="return confirm('Anda yakin menghapus semua data?');">Delete All</a>
        <a href="<?= base_url(); ?>c_tugas/create_city" class="badge badge-primary float-right">Create data</a><br>

      <?php if($this->session->flashdata('flash_city')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Kota <strong>berhasil</strong> <?= $this->session->flashdata('flash_city'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>City ID</th>
            <th>City</th>
            <th>Province ID</th>
            <!-- <th>Province</th> -->
            <th>Action</th>
          </tr> 
        </thead>
        <tbody>
          <?php $i = 1; foreach ($city as $value):?>
             <tr>
                  <td><?= $i ?></td>
                  <td><?= $value['id'] ?></td>
                  <td><?= $value['name'] ?></td>
                  <td><?= $value['province_id'] ?></td>
                  <td>
                      <a href="<?= base_url(); ?>c_tugas/detail_city/<?= $value['id']; ?>" class="badge badge-primary">Detail</a>
                      <a href="<?= base_url(); ?>c_tugas/edit_city/<?= $value['id']; ?>" class="badge badge-warning">Edit</a>
                      <a href="<?= base_url(); ?>c_tugas/delete_city/<?= $value['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin menghapus?');">Delete</a>
                  </td>
              </tr>
        <?php $i++;endforeach; ?>  
        <tbody>
      </table>
    </div>  
  </div>