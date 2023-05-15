<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Karyawan extends Model
{
    protected $table = 'tb_karyawan'; // nama tabel
    protected $primaryKey = 'kode_karyawan';
    protected $allowedFields = ['kode_karyawan', 'nama_karyawan', 'alamat', 'kota', 'provinsi', 'kode_pos', 'no_telpon', 'email', 'jabatan', 'gaji_pokok', 'tanggal_masuk', 'status']; // field yang diperbolehkan

    public function get_karyawan()
    {
        return $this->select('*')
            ->findAll();
    }

    public function tambahData($data)
    {
        $this->insert($data);
        return true;
    }

    public function editData($kode_karyawan, $data)
    {
        $this->where('kode_karyawan', $kode_karyawan)->set($data)->update();
        return true;
    }

    public function getUserById($kode_karyawan)
    {
        return $this->find($kode_karyawan);
    }

    public function getCountValid()
    {
        return $this->db->table($this->table)->where('status', 'valid')->countAllResults();
    }

    public function getCountInvalid()
    {
        return $this->db->table($this->table)->where('status', 'invalid')->countAllResults();
    }
}
