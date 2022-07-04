<?php
    include APPPATH . 'views/temp/header.php'; 
    include APPPATH . 'views/temp/sidebar.php' ;
?>
  <!-- Begin Page Content -->
  <div class="container-fluid">

  <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Data Tindakan</h1>
     <div class="row">
       <div class="col">
          <a href="<?= base_url('tindakan/tambah')?>" class="btn btn-success btn-icon-split">
              <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
               </span>
                <span class="text">Tambah Data Tindakan</span>
          </a>
       </div>
    </div>
    
   <table class="table">
  <thead>
    <tr>
      <th scope="col">No Registrasi</th>
      <th scope="col">Id perawat</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Jam</th>
      <th scope="col">Diagnosa</th></th>
      <th scope="col">Tindakan</th></th>
      <th scope="col">No Ruang</th></th>
      <th scope="col">Keterangan</th></th>
      <th colspan="3" class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $no=1;
      foreach($datatindakan as $dp) :
      ?>
    <tr>
      <!-- <th scope="row"><?= $no++ ?></th> -->
      <td><?= $dp['no_registrasi']?></td>
      <td><?= $dp['id_perawat']?></td>
      <td><?= $dp['nama_pasien']?></td>
      <td><?= $dp['jam']?></td>
      <td><?= $dp['diagnosa']?></td>
      <td><?= $dp['tindakan_keperawatan']?></td>
      <td><?= $dp['no_ruang']?></td>
      <td><?= $dp['keterangan']?></td>
      <td><a class="btn btn-info btn-sm" href="<?= base_url("tindakan/edit/{$dp['no_registrasi']}")?>">Edit</a></td>
      <td><a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("tindakan/hapus/{$dp['no_registrasi']}")?>">Hapus</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

                </div>
                <!-- /.container-fluid -->
<?php
    include APPPATH . 'views/temp/footer.php'; 
?>