<div class="container">
  <div class="card">
    <div class="card-header">
      Create Data Province
    </div>
    <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
          <label>Nama Provinsi</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Nama Provinsi" autofocus="">
          <small class="form-text text-danger"><?= form_error('name'); ?></small>
        </div>
        <button type="submit" name="add" value="add" class="btn btn-primary float-right">Submit</button>
      </form>
    </div>
  </div>
</div>