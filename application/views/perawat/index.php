<?php
    include APPPATH . 'views/temp/header.php'; 
    include APPPATH . 'views/temp/sidebar.php' ;
?>
                       <!-- Begin Page Content -->
                <div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Data Perawat</h1>
    <div class="row">
       <div class="col">
         <a href="<?= base_url('perawat/tambah')?>" class="btn btn-success btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
             </span>
          <span class="text">Tambah Data Perawat</span>
          </a>
       </div>
    </div>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">Id Perawat</th>
      <th scope="col">Id Poliklinik</th>
      <th scope="col">Nama</th></th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal Lahir</th>
      <th colspan="3" class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $no=1;
      foreach($dataperawat as $dp) :
      ?>
    <tr>
      <!-- <th scope="row"><?= $no++ ?></th> -->
      <td><?= $dp['id_perawat']?></td>
      <td><?= $dp['id_poliklinik']?></td>
      <td><?= $dp['nama']?></td>
      <td><?= $dp['alamat']?></td>
      <td><?= $dp['tgl_lahir']?></td>
      <td><a class="btn btn-info btn-sm" href="<?= base_url("perawat/edit/{$dp['id_perawat']}")?>">Edit</a></td>
      <td><a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("perawat/hapus/{$dp['id_perawat']}")?>">Hapus</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

                </div>
                <!-- /.container-fluid -->
<?php
    include APPPATH . 'views/temp/footer.php'; 
?>