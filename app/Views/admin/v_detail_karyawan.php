 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-white tr">Data Karyawan</h1>
     </div>

     <!-- Content Row -->
     <div class="container-fluid">
         <div class="card mb-4 transparent">
             <div class="card-header py-3">
                 <h6 class="m-0 font-weight-bold text-dark">Detail Data Karyawan</h6>
             </div>
             <div class="card-body text-white">
                 <table>
                     <tr>
                         <th colspan="2" class="text-white">Detail Karyawan</th>
                     </tr>
                     <tr>
                         <td style="width: 15%;">Nama Karyawan</td>
                         <td>
                             <?= $user['nama_karyawan']; ?>
                         </td>
                     </tr>
                     <tr>
                         <td>Alamat</td>
                         <td>
                             <?= $user['alamat']; ?>
                         </td>
                     </tr>
                     <tr>
                         <td>Kota</td>
                         <td>
                             <?= $user['kota']; ?>
                         </td>
                     </tr>
                     <tr>
                         <td>Provinsi</td>
                         <td>
                             <?= $user['provinsi']; ?>
                         </td>
                     </tr>
                     <tr>
                         <td>Kode Pos</td>
                         <td>
                             <?= $user['kode_pos']; ?>
                         </td>
                     </tr>
                     <tr>
                         <td>Nomor Telepon</td>
                         <td>
                             <?= $user['no_telpon']; ?>
                         </td>
                     </tr>
                     <tr>
                         <td>Email</td>
                         <td>
                             <?= $user['email']; ?>
                         </td>
                     </tr>
                     <tr>
                         <td>Jabatan</td>
                         <td>
                             <?= $user['jabatan']; ?>
                         </td>
                     </tr>
                     <tr>
                         <td>Gaji Pokok</td>
                         <td>
                             <?= $user['gaji_pokok']; ?>
                         </td>
                     </tr>
                     <tr>
                         <td>Tanggal Masuk</td>
                         <td>
                             <?= $user['tanggal_masuk']; ?>
                         </td>
                     </tr>
                     <tr>
                         <td>Status</td>
                         <td>
                             <?= $user['status']; ?>
                         </td>
                     </tr>
                 </table><br>
                 <div class="card-block">
                     <a href="<?php echo base_url(); ?>" class="btn btn-secondary text-white transparent border">Kembali</a>
                 </div>
             </div>
         </div>

     </div>
 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->