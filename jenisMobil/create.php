<?php include '../layouts/header.php';?>
<?php
  include '../koneksi.php';
 
  $query = mysqli_query($koneksi, "SELECT max(id_jenis_mobil) as kodeTerbesar FROM jenis_mobil");
  $data = mysqli_fetch_array($query);
  $kodeBarang = $data['kodeTerbesar'];
 
  $urutan = (int) substr($kodeBarang, 2, 3);
  $urutan++;
 
  $huruf = "JM";
  $kodeBarang = $huruf . sprintf("%03s", $urutan);
  ?>
  
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambah Jenis Mobil</h4>
          
          <form class="forms-sample" action="createACT.php" method="post">
            <div class="form-group">
              <label for="id" class="form-label">ID Jenis Mobil</label>
              <input type="text" class="form-control" id="id" name="id" value="<?php echo $kodeBarang ?>" readonly>
            </div>

            <div class="form-group">
              <label for="nama" class="form-label">Nama Jenis Mobil</label>
              <input type="text" class="form-control" id="nama" name="nama">
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
<?php include '../layouts/footer.php';?>