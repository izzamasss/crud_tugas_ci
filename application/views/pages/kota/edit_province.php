<div class="container">
  <div class="card">
    <div class="card-header">
      Edit Data Province
    </div>
    <div class="card-body">
      <form action="" method="post">
        <input type="hidden" name="id" value="<?= $province['id']; ?>">
        <div class="form-group">
          <label>Nama Provinsi</label>
          <input type="text" id="name" name="name" class="form-control" value="<?= $province['name']; ?>" placeholder="Nama Provinsi" autofocus="">
          <small class="form-text text-danger"><?= form_error('name'); ?></small>
        </div>
        <button type="submit" name="edit" value="edit" class="btn btn-primary float-right">Edit</button>
      </form>
    </div>
  </div>
</div>