<?php include '../layout/header.php';?>
<?php include '../koneksi.php' ?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambah Buku</h4>
          
          <form class="forms-sample" action="createACT.php" method="post">
            <div class="form-group">
              <label for="nama" class="form-label">Nama Vendor</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
              <label for="alamat" class="form-label">Alamat Vendor</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
              <label for="telp" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" id="telp" name="telp" required>
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Email Vendor</label>
              <input type="text" class="form-control" id="email" name="email" required>
            </div>
              
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../layout/footer.php';?>