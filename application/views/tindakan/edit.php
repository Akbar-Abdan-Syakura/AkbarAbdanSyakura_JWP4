<?php
    include APPPATH . 'views/temp/header.php'; 
    include APPPATH . 'views/temp/sidebar.php' ;
?>
            <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Data Tindakan</h1>
        <div class="col">
            <div class="card-body">

                <form method="post" action="<?= base_url('tindakan/editAksi')?>">
                  <div class="form-group">
                    <label ></label>No Registrasi</label>
                    <input type="hidden" name="no_registrasi" value="<?= $no_registrasi ?>"/>
                    <input type="text" class="form-control" id="id_perawat" name="id_perawat" value="<?= $id_perawat?>">
                  </div>
                   
                  <div class="form-group">
                    <label ></label>Nama Pasien</label>
                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= $nama_pasien?>">
                  </div>
                  <div class="form-group">
                    <label ></label>Jam</label>
                    <input type="time" class="form-control" id="jam" name="jam" value="<?= $jam?>">
                  </div>
                  <div class="form-group">
                    <label ></label>Diagnosa</label>
                    <input type="text" class="form-control" id="diagnosa" name="diagnosa" value="<?= $diagnosa?>">
                  </div>
                  <div class="form-group">
                    <label ></label>Tindakan Keperawatan</label>
                    <input type="text" class="form-control" id="tindakan_keperawatan" name="tindakan_keperawatan" value="<?= $tindakan_keperawatan?>">
                  </div>
                  <div class="form-group">
                    <label ></label>No Ruang</label>
                    <input type="text" class="form-control" id="no_ruang" name="no_ruang" value="<?= $no_ruang?>">
                  </div>
                  <div class="form-group">
                    <label ></label>Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $keterangan?>">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
<?php
    include APPPATH . 'views/temp/footer.php'; 
?>