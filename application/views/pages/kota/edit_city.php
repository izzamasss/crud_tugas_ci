<div class="container">
  <div class="card">
    <div class="card-header">
      Edit Data City
    </div>
    <div class="card-body">
      <form action="" method="post">
        <input type="hidden" name="id" value="<?= $city['id']; ?>">
        <div class="form-group">
          <label>Nama Kota</label>
          <input type="text" id="name" name="name" class="form-control" value="<?= $city['name']; ?>" placeholder="Nama kota" autofocus="">
          <small class="form-text text-danger"><?= form_error('name'); ?></small>
        </div>
        
        <div class="form-group">
          <label>ID Provinsi</label>
          <input type="text" id="province_id" name="province_id" class="form-control" value="<?= $city['province_id']; ?>" placeholder="ID Provinsi">
          <small class="form-text text-danger"><?= form_error('province_id'); ?></small>
        </div>       
        <button type="submit" name="edit" value="edit" class="btn btn-primary float-right">Edit</button>
      </form>
    </div>
  </div>
</div>