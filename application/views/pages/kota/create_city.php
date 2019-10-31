<div class="container">
  <div class="card">
    <div class="card-header">
      Create Data City
    </div>
    <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
          <label>Nama Kota</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Nama kota" autofocus="">
          <small class="form-text text-danger"><?= form_error('name'); ?></small>
        </div>
        <div class="form-group">
          <label>Province_id</label>
          <input type="text" id="province_id" name="province_id" class="form-control" placeholder="province_id">
          <small class="form-text text-danger"><?= form_error('province_id'); ?></small>
        </div>
        <button type="submit" name="add" value="add" class="btn btn-primary float-right">Submit</button>
      </form>
    </div>
  </div>
</div>