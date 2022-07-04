<?php
    include APPPATH . 'views/temp/header.php'; 
    include APPPATH . 'views/temp/sidebar.php' ;
?>
            <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Data Pasien</h1>
        <div class="col">
            <div class="card-body">

                <form method="post" action="<?= base_url('pasien/editAksi')?>">
                    <div class="form-group">
                        <label ></label>Nama Lengkap</label>
                        <input type="hidden" name="no_rm" value="<?= $no_rm ?>"/>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?=$nama?>">
                    </div>
                    <div class="form-group">
                        <label ></label>Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$alamat?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="ttl" name="ttl" value="<?=$ttl?>">
                    </div>
                    <div class="form-group">
                        <label ></label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin">
                            <option value="<?=$jenis_kelamin?>"><?=$jenis_kelamin?></option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label ></label>Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?=$pekerjaan?>" >
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