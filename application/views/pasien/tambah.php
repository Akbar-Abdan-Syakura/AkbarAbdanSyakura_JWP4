<?php
    include APPPATH . 'views/temp/header.php'; 
    include APPPATH . 'views/temp/sidebar.php' ;
?>
            <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Tambah Data Pasien</h1>
        <div class="col">
            <div class="card-body">

                <form method="post" action="<?= base_url('pasien/tambahAksi')?>">
                    <div class="form-group">
                        <label ></label>Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label ></label>Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="ttl" name="ttl">
                    </div>
                    <div class="form-group">
                        <label ></label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label ></label>Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" >
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