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
                 <h6 class="m-0 font-weight-bold text-dark">Edit Karyawan</h6>
             </div>
             <div class="card-body text-white">
                 <?= form_open('proses-edit/' . $user['kode_karyawan'], ['method' => 'post']); ?>
                 <div class="form-group">
                     <label class="label-control">Nama Karyawan</label>
                     <input class="form-custom text-white transparent" type="text" name="nama_karyawan" value="<?= $user['nama_karyawan']; ?>" required>
                 </div>
                 <div class="form-group">
                     <label for="" class="label-control">Alamat</label>
                     <input class="form-custom text-white transparent" type="text" name="alamat" value="<?= $user['alamat']; ?>" required>
                 </div>
                 <div class="form-group">
                     <label for="" class="label-control">Kota</label>
                     <input class="form-custom text-white transparent" type="text" name="kota" value="<?= $user['kota']; ?>" required>
                 </div>
                 <div class="form-group">
                     <label for="" class="label-control">Provinsi</label>
                     <input class="form-custom text-white transparent" type="text" name="provinsi" value="<?= $user['provinsi']; ?>" required>
                 </div>
                 <div class="form-group">
                     <label for="" class="label-control">Kode Pos</label>
                     <input class="form-custom text-white transparent" type="number" name="kode_pos" value="<?= $user['kode_pos']; ?>" required>
                 </div>
                 <div class="form-group">
                     <label for="" class="label-control">No Telepon</label>
                     <input class="form-custom text-white transparent" type="number" name="no_telpon" value="<?= $user['no_telpon']; ?>" required>
                 </div>
                 <div class="form-group">
                     <label for="" class="label-control">email</label>
                     <input class="form-custom text-white transparent" type="text" name="email" value="<?= $user['email']; ?>" required>
                 </div>
                 <div class="form-group">
                     <label for="" class="label-control">jabatan</label>
                     <input class="form-custom text-white transparent" type="text" name="jabatan" value="<?= $user['jabatan']; ?>" required>
                 </div>
                 <div class="form-group">
                     <label for="" class="label-control">Gaji Pokok</label>
                     <input class="form-custom text-white transparent" type="number" name="gaji_pokok" value="<?= $user['gaji_pokok']; ?>" required>
                 </div>
                 <div class="form-group">
                     <label for="" class="label-control">Tanggal Masuk</label>
                     <input class="form-custom text-white transparent" type="date" name="tanggal_masuk" value="<?= $user['tanggal_masuk']; ?>" required>
                 </div>
                 <div class="form-group">
                     <label class="font-weight-bold">Status</label>
                     <select name="status" class="form-custom text-white transparent">
                         <option value="<?= $user['status']; ?>" hidden><?= $user['status']; ?></option>
                         <option value="Valid">Valid</option>
                         <option value="Invalid">Invalid</option>
                     </select>
                 </div>
                 <div class="card-body">
                     <a href="<?php echo base_url(); ?>"><button type="button" class="btn btn-secondary text-white transparent border">Kembali</button></a>
                     <input type="submit" name="submit" class="btn btn-primary text-white transparent border" value="Update">
                 </div>
                 <?= form_close(); ?>
             </div>
         </div>

     </div>
 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->