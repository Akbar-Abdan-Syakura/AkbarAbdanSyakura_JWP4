<?php
    include APPPATH . 'views/temp/header.php'; 
    include APPPATH . 'views/temp/sidebar.php' ;
?>
                       <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>
                    <div class="row">
                      <div class="col">
                        <a href="<?= base_url('Pasien/tambah')?>" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-plus"></i>
                                            </span>
                                            <span class="text">Tambah Data Pasien</span>
                                        </a>
                      </div>
                    </div>
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">No Rm</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th></th>
      <th scope="col">Pekerjaan</th></th>
      <th colspan="3" class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $no=1;
      foreach($datapasien as $dp) :
      ?>
    <tr>
      <!-- <th scope="row"><?= $no++ ?></th> -->
      <td><?= $dp['no_rm']?></td>
      <td><?= $dp['nama']?></td>
      <td><?= $dp['alamat']?></td>
      <td><?= $dp['ttl']?></td>
      <td><?= $dp['jenis_kelamin']?></td>
      <td><?= $dp['pekerjaan']?></td>
      <td><a class="btn btn-info btn-sm" href="<?= base_url("pasien/edit/{$dp['no_rm']}")?>">Edit</a></td>
      <td><a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("pasien/hapus/{$dp['no_rm']}")?>">Hapus</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

                </div>
                <!-- /.container-fluid -->
<?php
    include APPPATH . 'views/temp/footer.php'; 
?>