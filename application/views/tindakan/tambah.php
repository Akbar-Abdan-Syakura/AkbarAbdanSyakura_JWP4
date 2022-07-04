<?php
include APPPATH . 'views/temp/header.php';
include APPPATH . 'views/temp/sidebar.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tambah Data Tindakan</h1>
  <div class="col">
    <div class="card-body">

      <form method="post" action="<?= base_url('tindakan/tambahAksi') ?>">
        <div class="form-group">
          <label></label>No Registrasi</label>
          <input type="text" class="form-control" id="no_registrasi" name="no_registrasi">

        </div>
        <div class="form-group">
          <label></label>Id Perawat</label>
          <input type="text" class="form-control" id="id_perawat" name="id_perawat">
        </div>
        <div class="form-group">
          <label></label>Nama Pasien</label>
          <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jam</label>
          <input type="time" class="form-control" id="jam" name="jam">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Diagnosa</label>
          <input type="text" class="form-control" id="diagnosa" name="diagnosa">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Tindakan Keperawatan</label>
          <input type="text" class="form-control" id="tindakan_keperawatan" name="tindakan_keperawatan">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">No Ruang</label>
          <input type="text" class="form-control" id="no_ruang" name="no_ruang">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Keterangan</label>
          <input type="text" class="form-control" id="keterangan" name="keterangan">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
<?php
include APPPATH . 'views/temp/footer.php';
?>