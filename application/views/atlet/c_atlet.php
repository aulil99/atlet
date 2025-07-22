
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Atlet</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dahboard</a></li>
              <li class="breadcrumb-item active">Tambah Data Atlet</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Atlet</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="<?= base_url('atlet/saveData'); ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Atlet</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Atlet" required>
                  </div>
                  <div class="form-group">
                    <label for="nama">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" name="ttl" id="ttl" placeholder="Masukkan Tempat Tanggal Lahir" required>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin">
                      <option selected>Pilih Jenis Kelamin</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea rows="3" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" required></textarea>
                  </div>
                  <!-- <div class="form-group">
                        <label for="ktp">KTP (Kartu Tanda Penduduk)</label>
                        <input type="file" name="ktp" class="form-control">
                  </div> -->
                  <div class="form-group">
                    <label for="ktp">KTP (Kartu Tanda Penduduk) <span style="font-size: small; color: red;">*Type File:jpg|png|jpeg maksimal 5MB</span></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="ktp" class="form-control" id="ktp" >
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="kk">KK (Kartu Keluarga) <span style="font-size: small; color: red;">*Type File:jpg|png|jpeg maksimal 5MB</span></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="kk" class="form-control" id="kk" >
                      </div>
                    </div>
                  </div>
             
                  <div class="form-group">
                    <label for="cabor">Cabang Olahraga</label>
                    <input class="form-control" name="cabor" id="cabor" placeholder="Masukkan Cabang Olahraga" required>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <!-- <a href="<?= base_url(); ?>atlet/index"><button type="submit" class="btn btn-warning"> <i class="fa fa-arrow-left"></i> Kembali</button></a> -->
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Data</button>
                    <a href="<?= base_url('atlet/index'); ?>" class="btn btn-success"> <i class="fa fa-arrow-left">Kembali</i></a>
                </div>
            </form>
            
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</body>
</html>
