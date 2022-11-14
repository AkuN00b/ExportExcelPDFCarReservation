<?php include '../layout/header.php';?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Vendor</h4>
          
          <?php 
            include '../koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM vendor WHERE id = '$id'");
            while($d = mysqli_fetch_array($data)) {
          ?>
          <form class="forms-sample" action="editACT.php" method="post">
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

            <div class="form-group">
              <label for="nama" class="form-label">Nama Vendor</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['nama'] ?>" required>
            </div>
            <div class="form-group">
              <label for="alamat" class="form-label">Alamat Vendor</label>
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $d['alamat'] ?>" required>
            </div>
            <div class="form-group">
              <label for="telp" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $d['telp'] ?>" required>
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Email Vendor</label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo $d['email'] ?>" required>
            </div>
              
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </form>
          <?php
            }
          ?>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../layout/footer.php';?>