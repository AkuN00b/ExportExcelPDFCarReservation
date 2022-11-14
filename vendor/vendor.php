<?php include '../layout/header.php';?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data Vendor</h4>
          <a href="create.php"><button class="btn btn-primary">Tambah</button></a>
          <button class="btn btn-warning" onclick="search('Vendor')" name="print">Print</button>
          <button class="btn btn-success" onclick="excel('Vendor')" name="print">Excel</button> <br><br>
          
          <div class="table-responsive">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Vendor</th>
                  <th>Alamat Vendor</th>
                  <th>Nomor Telepon</th>
                  <th>Email Vendor</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                  include '../koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"SELECT * FROM vendor");
                  while($d = mysqli_fetch_array($data)) {
                    if ($d['byUser'] == $id) {
                ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['telp']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <td>
                      <a href="edit.php?id=<?php echo $d['id']; ?>"><button class="btn btn-warning">Edit</button></a>
                      <a href="hapus.php?id=<?php echo $d['id']; ?>"><button class="btn btn-danger">Hapus</button></a>
                    </td>
                  </tr>
                <?php 
                    }
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

<?php include '../layout/footer.php';?>