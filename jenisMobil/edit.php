<?php include '../layouts/header.php';?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Jenis Mobil</h4>
          
          <?php 
            include '../koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM jenis_mobil WHERE id_jenis_mobil = '$id'");
            while($d = mysqli_fetch_array($data)) {
          ?>
          <form class="forms-sample" action="editACT.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <div class="form-group">
              <label for="nama" class="form-label">Jenis Mobil</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['nama_jenis_mobil'] ?>">
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
<?php include '../layouts/footer.php';?>