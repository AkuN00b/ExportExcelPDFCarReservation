<?php include '../layouts/header.php';?>
<?php
  include '../koneksi.php';
 
  $query = mysqli_query($koneksi, "SELECT max(id_peminjaman) as kodeTerbesar FROM peminjaman");
  $data = mysqli_fetch_array($query);
  $kodeBarang = $data['kodeTerbesar'];
 
  $urutan = (int) substr($kodeBarang, 2, 3);
  $urutan++;
 
  $huruf = "PM";
  $kodeBarang = $huruf . sprintf("%03s", $urutan);
  ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Transaksi Peminjaman</h4>
          
          <form class="forms-sample" action="createACT.php" method="post">
            <div class="form-group">
              <label for="id" class="form-label">ID Peminjaman</label>
              <input type="text" class="form-control" id="id" name="id" value="<?php echo $kodeBarang ?>" readonly>
            </div>

            <div class="form-group">
              <label for="mobil" class="form-label">Mobil</label>
              <select id="mobil" name="mobil" class="form-control">
                <option holder selected>-- Pilih Mobil --</option>
                <?php
                  $sql = "SELECT * FROM mobil";
                  $result = mysqli_query($koneksi, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['id_mobil'] . "' carPrice='" . $row['harga_mobil'] . "'>" . $row['nama_mobil'] . "</option>";
                  }

                ?>
              </select>
            </div>

            <div class="form-group">
              <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
              <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman">
            </div>

            <div class="form-group">
              <label for="lama_peminjaman" class="form-label">Lama Peminjaman</label><br>
              <input type="radio" name="lama_peminjaman" value="1"><label class="form-label"> 1 Hari</label><br>
              <input type="radio" name="lama_peminjaman" value="3"><label class="form-label"> 3 Hari</label><br>
              <input type="radio" name="lama_peminjaman" value="7"><label class="form-label"> 7 Hari</label><br>
            </div>

            <div class="form-group">
              <label for="harga_peminjaman" class="form-label">Harga Peminjaman</label>
              <input type="text" class="form-control" id="harga_peminjaman" name="harga_peminjaman" readonly="">
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

<script>
    $("#mobil").change(function(){
        var mobil = document.querySelector("#mobil");
        var price = mobil.options[mobil.selectedIndex].getAttribute('carPrice');

        document.getElementById("harga_peminjaman").value = price;
    });

    $('input[type=radio][name=lama_peminjaman]').change(function() {
      if (this.value == 1) {
        var price = mobil.options[mobil.selectedIndex].getAttribute('carPrice');
        document.getElementById("harga_peminjaman").value = price * 1;
      } else if (this.value == 3){
        var price = mobil.options[mobil.selectedIndex].getAttribute('carPrice');
        document.getElementById("harga_peminjaman").value = price * 3;
      } else if (this.value == 7){
        var price = mobil.options[mobil.selectedIndex].getAttribute('carPrice');
        document.getElementById("harga_peminjaman").value = price * 7;
      }
    });
</script>

<?php include '../layouts/footer.php';?>