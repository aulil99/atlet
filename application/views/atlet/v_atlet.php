
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Atlet</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dahboard</a></li>
              <li class="breadcrumb-item active">Atlet</li>
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
                <h3 class="card-title">Data Atlet</h3><br>
                <a href="<?= base_url(); ?>atlet/createData"><button class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Tambah Data</button></a><br>
                <?php
              if($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success" role="alert">';
                echo $this->session->flashdata('pesan');
                echo '</div>';
              }
              ?>
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
                  <?php
                    $no = 1;
                    foreach ($atlet as $atl) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $atl->nama; ?></td>
                    <td><?= $atl->ttl; ?></td>
                    <td><?= $atl->jenis_kelamin; ?></td>
                    <td><?= $atl->alamat; ?></td>
                    <td><img src="<?= base_url('/assets/files') ?>/<?= $atl->ktp; ?>" width="250px"></td>
                    <td><img src="<?= base_url('/assets/files') ?>/<?= $atl->kk; ?>" width="250px"></td>
                    <td><?= $atl->cabor; ?></td>
                    <td>
                        <a href="<?php echo base_url('atlet/editData/'. $atl->id.'')?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a onclick="javascript: return confirm('Apakah Anda Yakin Mau Hapus Data Ini?')" href="<?php echo base_url('atlet/hapus/'. $atl->id.'')?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                   
                  </tr>
                  <?php endforeach;  ?>
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
