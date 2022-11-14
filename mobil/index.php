<?php include '../layouts/header.php';?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data Mobil</h4>
          <a href="create.php"><button class="btn btn-primary">Tambah</button></a>     <br><br>     
          <div class="table-responsive">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID Mobil</th>
                  <th>Jenis Mobil</th>
                  <th>Nama Mobil</th>
                  <th>Stok Mobil</th>
                  <th>Harga Mobil</th>
                  <th>Status Mobil</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                  include '../koneksi.php';
                  
                  $data = mysqli_query($koneksi,"SELECT m.id_mobil, j.nama_jenis_mobil, m.nama_mobil, m.stok_mobil, m.harga_mobil
                                                 FROM mobil m
                                                 INNER JOIN jenis_mobil j ON j.id_jenis_mobil = m.id_jenis_mobil");
                  while($d = mysqli_fetch_array($data)) {
                    if ($d['stok_mobil'] == 0) {
                      $status = 'TIDAK TERSEDIA';
                    } else { $status = 'TERSEDIA'; }
                ?>
                  <tr>
                    <td><?php echo $d['id_mobil']; ?></td>
                    <td><?php echo $d['nama_jenis_mobil']; ?></td>
                    <td><?php echo $d['nama_mobil']; ?></td>
                    <td><?php echo $d['stok_mobil']; ?></td>
                    <td><?php echo $d['harga_mobil']; ?></td>
                    <td><b><?php echo $status; ?></b></td>
                    <td>
                      <a href="edit.php?id=<?php echo $d['id_mobil']; ?>"><button class="btn btn-warning">Edit</button></a>
                      <a href="hapus.php?id=<?php echo $d['id_mobil']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?');"><button class="btn btn-danger">Hapus</button></a>
                    </td>
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