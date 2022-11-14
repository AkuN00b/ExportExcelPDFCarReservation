<?php include '../layouts/header.php';?>
  
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Mobil</h4>
          <?php 
            include '../koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM mobil WHERE id_mobil = '$id'");
            while($d = mysqli_fetch_array($data)) {
          ?>
          <form class="forms-sample" action="editACT.php" method="post">
            <div class="form-group">
              <label for="id" class="form-label">ID Mobil</label>
              <input type="text" class="form-control" id="id" name="id" value="<?php echo $id ?>" readonly>
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
                      if ($row['id_jenis_mobil'] == $d['id_jenis_mobil']) {
                        echo "<option value='" . $row['id_jenis_mobil'] . "' selected>" . $row['nama_jenis_mobil'] . "</option>";
                      } else {
                        echo "<option value='" . $row['id_jenis_mobil'] . "'>" . $row['nama_jenis_mobil'] . "</option>";
                      }
                    }
                  }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label for="nama_mobil" class="form-label">Nama Mobil</label>
              <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="<?php echo $d['nama_mobil'] ?>">
            </div>

            <div class="form-group">
              <label for="stok_mobil" class="form-label">Stok Mobil</label>
              <input type="text" class="form-control" id="stok_mobil" name="stok_mobil" value="<?php echo $d['stok_mobil'] ?>">
            </div>

            <div class="form-group">
              <label for="harga_mobil" class="form-label">Harga Mobil</label>
              <input type="text" class="form-control" id="harga_mobil" name="harga_mobil" value="<?php echo $d['harga_mobil'] ?>">
            </div>
              
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </form>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../layouts/footer.php';?>