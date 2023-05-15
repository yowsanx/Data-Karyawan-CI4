 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-white tr">Dashboard</h1>
     </div>

     <!-- Content Row -->
     <div class="container-fluid">
         <div class="card mb-4 transparent">
             <div class="card-header py-3">
                 <h6 class="m-0 font-weight-bold text-dark">Daftar Karyawan</h6>
             </div>
             <div class="card-body text-white">
                 <a href="<?php echo base_url('tambah-karyawan') ?>"><button class="btn btn-primary text-white transparent shadow border">Tambah Karyawan</button></a>
                 <a href="<?php echo base_url('export-karyawan') ?>"><button class="btn btn-success text-white transparent shadow border">Export Karyawan</button></a>
                 <div class="table-responsive"><br>
                     <table class="table table-bordered text-white" id="dataTable" width="100%" cellspacing="0">
                         <thead>
                             <tr>
                                 <th style="width: 5%;">No</th>
                                 <th>Nama Karyawan</th>
                                 <th>Alamat</th>
                                 <th>No. Telepon</th>
                                 <th>Email</th>
                                 <th>Jabatan</th>
                                 <th>Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $no = 1;
                                foreach ($tb_karyawan as $karyawan) : ?>
                                 <tr>
                                     <td><?php echo $no++; ?></td>
                                     <td><?= $karyawan['nama_karyawan']; ?></td>
                                     <td><?= $karyawan['alamat']; ?></td>
                                     <td><?= $karyawan['no_telpon']; ?></td>
                                     <td><?= $karyawan['email']; ?></td>
                                     <td><?= $karyawan['jabatan']; ?></td>
                                     <td>
                                         <a href="<?php echo base_url('edit-karyawan/') . $karyawan['kode_karyawan']; ?>" class="btn-sm btn-secondary text-white transparent border">Edit</a>
                                         <a href="<?php echo base_url('hapus-karyawan/') . $karyawan['kode_karyawan']; ?>" class="btn-sm btn-danger alert_notif text-white transparent border">Hapus</a>
                                         <a href="<?php echo base_url('detail-karyawan/') . $karyawan['kode_karyawan']; ?>" class="btn-sm btn-info text-white transparent border">Detail</a>
                                     </td>
                                 </tr>
                             <?php endforeach; ?>
                         </tbody>
                     </table><br>
                 </div>
             </div>
         </div>
         <div class="card mb-4 transparent">
             <div class="card-header card-header-border-bottom">
                 <h6 class="m-0 font-weight-bold text-dark">Status Karyawan</h6>
             </div>
             <div class="card-body">
                 <div class="row d-flex justify-content-center">
                     <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                         <h6 class="m-0 font-weight-bold text-white">Status Karyawan</h6><br>
                         <canvas id="karyawan-chart"></canvas>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- /.container-fluid -->

 </div>

 <?php

    ?>