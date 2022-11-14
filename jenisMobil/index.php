<?php include '../layouts/header.php';?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data Jenis Mobil</h4>
          <a href="create.php"><button class="btn btn-primary">Tambah</button></a>     <br><br>     
          <div class="table-responsive">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID Jenis Mobil</th>
                  <th>Nama Jenis Mobil</th>
                  <th>Status Jenis Mobil</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                  include '../koneksi.php';
                  
                  $data = mysqli_query($koneksi,"SELECT * FROM jenis_mobil");
                  while($d = mysqli_fetch_array($data)) {
                    if ($d['status_jenis_mobil'] == 1) {
                      $status = 'Aktif';
                    } else { $status = 'Tidak Aktif'; }
                ?>
                  <tr>
                    <td><?php echo $d['id_jenis_mobil']; ?></td>
                    <td><?php echo $d['nama_jenis_mobil']; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                      <a href="edit.php?id=<?php echo $d['id_jenis_mobil']; ?>"><button class="btn btn-warning">Edit</button></a>
                      <a href="hapus.php?id=<?php echo $d['id_jenis_mobil']; ?>"><button class="btn btn-danger">Hapus</button></a>
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