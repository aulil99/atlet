
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Atlet</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dahboard</a></li>
              <li class="breadcrumb-item active">Edit Data Atlet</li>
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
                <h3 class="card-title">Edit Data Atlet</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               
              <form method="post" enctype="multipart/form-data" action="<?= base_url().'atlet/updateData/'.$atlet->id; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Atlet</label>
                    <input type="text" class="form-control" name="nama" value="<?= $atlet->nama; ?>" id="nama" placeholder="Masukkan Nama Atlet" >
                  </div>
                  <div class="form-group">
                    <label for="nama">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" name="ttl" value="<?= $atlet->ttl; ?>" id="ttl" placeholder="Masukkan Tempat Tanggal Lahir" >
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                      <option selected><?= $atlet->jenis_kelamin; ?></option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea rows="3" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" ><?= $atlet->alamat; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="ktp">KTP (Kartu Tanda Penduduk) <span style="font-size: small; color: red;">*Type File:jpg|png|jpeg maksimal 5MB</span></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="ktp" class="form-control" id="ktp"><?= $atlet->ktp; ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="kk">KK (Kartu Keluarga) <span style="font-size: small; color: red;">*Type File:jpg|png|jpeg maksimal 5MB</span></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="kk" class="form-control" id="kk"><?= $atlet->kk; ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cabor">Cabang Olahraga</label>
                    <input class="form-control" name="cabor" value="<?= $atlet->cabor; ?>" id="cabor" placeholder="Masukkan Cabang Olahraga" >
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">

                  <button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> Edit Data</button>
                  <a href="<?= base_url('atlet/index'); ?>" class="btn btn-success"> <i class="fa fa-arrow-left">Kembali</i></a>
                </div>
              </form>
  
               
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</body>
</html>
