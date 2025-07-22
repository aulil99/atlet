
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pelatih</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dahboard</a></li>
              <li class="breadcrumb-item active">Pelatih</li>
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
          <div class="col-12">
            <div class="card">
                
              <div class="card-header">
                <h3 class="card-title">Data Pelatih</h3><br>
                <a href="<?= base_url(); ?>atlet/createData"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>KTP</th>
                    <th>KK</th>
                    <th>Cabor</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-primary">Lihat</button></td>
                    <td><button class="btn btn-primary">Lihat</button></td>
                    <td></td>
                    <td>
                        <a onclick="javascript: return confirm('Apakah Anda Yakin Mau Hapus Data Ini?')" href="<?php echo base_url('atlet/edit/'. '')?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a onclick="javascript: return confirm('Apakah Anda Yakin Mau Hapus Data Ini?')" href="<?php echo base_url('atlet/hapus/'. '')?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                   
                  </tr>
             
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</body>
</html>
