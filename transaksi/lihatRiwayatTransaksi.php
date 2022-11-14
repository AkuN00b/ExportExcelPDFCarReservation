<?php include '../layouts/header.php';?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Riwayat Transaksi Peminjaman</h4>
          <a href="peminjaman.php"><button class="btn btn-primary">Tambah Transaksi Peminjaman</button></a>     <br><br>  
          <button class="btn btn-warning" onclick="search('Transaksi Peminjaman')" name="print">Print PDF</button> 
          <button class="btn btn-success" onclick="excel('Transaksi Peminjaman')" name="print">Excel</button>             <br><br>

          <div class="table-responsive">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID Peminjaman</th>
                  <th>ID Mobil</th>
                  <th>Tanggal Peminjaman</th>
                  <th>Lama Peminjaman</th>
                  <th>Harga Peminjaman</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                  include '../koneksi.php';
                  
                  $data = mysqli_query($koneksi,"SELECT p.id_peminjaman, m.nama_mobil, p.tanggal_peminjaman, p.lama_peminjaman, p.harga_peminjaman
                                                 FROM peminjaman p
                                                 INNER JOIN mobil m ON m.id_mobil = p.id_mobil");
                  while($d = mysqli_fetch_array($data)) {
                    if ($d['lama_peminjaman'] == 3) {
                      echo "<tr class='bg-warning'>";
                    } else if ($d['lama_peminjaman'] == 7) { echo"<tr class='bg-success'>"; }
                ?>
                    <td><?php echo $d['id_peminjaman']; ?></td>
                    <td><?php echo $d['nama_mobil']; ?></td>
                    <td><?php echo $d['tanggal_peminjaman']; ?></td>
                    <td><?php echo $d['lama_peminjaman']; ?> Hari</td>
                    <td><?php echo $d['harga_peminjaman']; ?></td>
                  </tr>
                <?php 
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../layouts/footer.php';?>