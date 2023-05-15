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
                 <h6 class="m-0 font-weight-bold text-dark">Tambah Karyawan</h6>
             </div>
             <div class="card-body text-white">
                 <form action="<?php echo base_url('/tambah'); ?>" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <label class="label-control">Nama Karyawan</label>
                         <input class="form-custom text-white transparent" type="text" name="nama_karyawan" placeholder="Isikan Nama Karyawan" required>
                     </div>
                     <div class="form-group">
                         <label for="" class="label-control">Alamat</label>
                         <input class="form-custom text-white transparent" type="text" placeholder="Isikan Alamat" name="alamat" required>
                     </div>
                     <div class="form-group">
                         <label for="" class="label-control">Kota</label>
                         <input class="form-custom text-white transparent" type="text" placeholder="Isikan Kota" name="kota" required>
                     </div>
                     <div class="form-group">
                         <label for="" class="label-control">Provinsi</label>
                         <input class="form-custom text-white transparent" type="text" placeholder="Isikan Provinsi" name="provinsi" required>
                     </div>
                     <div class="form-group">
                         <label for="" class="label-control">Kode Pos</label>
                         <input class="form-custom text-white transparent" type="number" placeholder="Isikan Kode Pos" name="kode_pos" required>
                     </div>
                     <div class="form-group">
                         <label for="" class="label-control">No Telepon</label>
                         <input class="form-custom text-white transparent" type="number" placeholder="Isikan Nomor Telepon" name="no_telpon" required>
                     </div>
                     <div class="form-group">
                         <label for="" class="label-control">email</label>
                         <input class="form-custom text-white transparent" type="text" placeholder="Isikan Email" name="email" required>
                     </div>
                     <div class="form-group">
                         <label for="" class="label-control">jabatan</label>
                         <input class="form-custom text-white transparent" type="text" placeholder="Isikan Jabatan" name="jabatan" required>
                     </div>
                     <div class="form-group">
                         <label for="" class="label-control">Gaji Pokok</label>
                         <div class="input-group-prepend">
                             <span class="input-group-text text-dark">RP</span>
                             <input class="form-custom text-white transparent" type="number" placeholder="Isikan Gaji Pokok" name="gaji_pokok" required>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="label-control">Tanggal Masuk</label>
                         <input name="tanggal_masuk" type="date" class="form-custom text-white transparent" value="<?php echo date('d/m/Y'); ?>" required>
                     </div>
                     <div class="form-group transparent">
                         <label class="font-weight-bold">Status</label>
                         <select name="status" class="form-custom text-white transparent">
                             <option value="Valid"><b>Valid</b></option>
                             <option value="Invalid">Invalid</option>
                         </select>
                     </div>
                     <div class="card-body">
                         <a href="<?php echo base_url(); ?>"><button type="button" class="btn btn-secondary text-white transparent border">Kembali</button></a>
                         <input type="submit" name="submit" class="btn btn-primary text-white transparent border" value="Tambah">
                     </div>
                 </form>
             </div>
         </div>

     </div>
 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->