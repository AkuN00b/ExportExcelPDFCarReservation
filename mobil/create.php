<?php include '../layouts/header.php';?>
<?php
  include '../koneksi.php';
 
  $query = mysqli_query($koneksi, "SELECT max(id_mobil) as kodeTerbesar FROM mobil");
  $data = mysqli_fetch_array($query);
  $kodeBarang = $data['kodeTerbesar'];
 
  $urutan = (int) substr($kodeBarang, 2, 3);
  $urutan++;
 
  $huruf = "RM";
  $kodeBarang = $huruf . sprintf("%03s", $urutan);
  ?>
  
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambah Mobil</h4>
          
          <form class="forms-sample" action="createACT.php" method="post">
            <div class="form-group">
              <label for="id" class="form-label">ID Mobil</label>
              <input type="text" class="form-control" id="id" name="id" value="<?php echo $kodeBarang ?>" readonly>
            </div>

            <div class="form-group">
              <label for="jenis_mobil" class="form-label">Jenis Mobil</label>
              <select id="jenis_mobil" name="jenis_mobil" class="form-control">
                <option holder selected>-- Pilih Jenis Mobil --</option>
                <?php
                  $sql = "SELECT * FROM jenis_mobil";
                  $result = mysqli_query($koneksi, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['status_jenis_mobil'] == 1) {
                      echo "<option value='" . $row['id_jenis_mobil'] . "'>" . $row['nama_jenis_mobil'] . "</option>";
                    }
                  }

                ?>
              </select>
            </div>

            <div class="form-group">
              <label for="nama_mobil" class="form-label">Nama Mobil</label>
              <input type="text" class="form-control" id="nama_mobil" name="nama_mobil">
            </div>

            <div class="form-group">
              <label for="stok_mobil" class="form-label">Stok Mobil</label>
              <input type="text" class="form-control" id="stok_mobil" name="stok_mobil">
            </div>

            <div class="form-group">
              <label for="harga_mobil" class="form-label">Harga Mobil</label>
              <input type="text" class="form-control" id="harga_mobil" name="harga_mobil">
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