<?php

namespace App\Controllers;

use App\Models\M_Karyawan;
use Config\Services;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Home extends BaseController
{
    public function index()
    {
        $model = new M_Karyawan();
        $valid = $model->getCountValid('status', 'valid');
        $invalid = $model->getCountInvalid('status', 'invalid');

        $data = array(

            'tb_karyawan'   => $model->findAll(),
            'status'        => [$valid, $invalid],
            'content'       => 'admin/v_dashboard'
        );

        return view('admin/layout/v_dashboard', $data);
    }

    public function tambah_karyawan()
    {
        $data = array(
            'content'   => 'admin/v_tambah_karyawan'
        );
        $model = new M_Karyawan();
        $data['tb_karyawan'] = $model->findAll();
        return view('admin/layout/v_main', $data);
    }

    public function edit_karyawan($kode_karyawan)
    {
        $model = new M_Karyawan();
        $user = $model->getUserById($kode_karyawan);

        $data = [
            'user' => $user,
            'content'   => 'admin/v_edit_karyawan'
        ];
        return view('admin/layout/v_main', $data);
    }

    public function detail($kode_karyawan)
    {
        $model = new M_Karyawan();
        $user = $model->getUserById($kode_karyawan);

        $data = [
            'user' => $user,
            'content'   => 'admin/v_detail_karyawan'
        ];

        return view('admin/layout/v_main', $data);
    }

    public function proses_tambah()
    {
        if ($this->request->getMethod() === 'post' && $this->validate([
            'nama_karyawan' => 'required',
            'alamat'        => 'required',
            'kota'          => 'required',
            'provinsi'      => 'required',
            'kode_pos'      => 'required|numeric',
            'no_telpon'     => 'required|numeric',
            'email'         => 'required|valid_email',
            'jabatan'       => 'required',
            'gaji_pokok'    => 'required|numeric',
            'tanggal_masuk' => 'required|date',
            'status'        => 'required'
        ])) {
            $Model = new M_Karyawan();
            $data = [
                'nama_karyawan' => $this->request->getPost('nama_karyawan'),
                'alamat'        => $this->request->getPost('alamat'),
                'kota'          => $this->request->getPost('kota'),
                'provinsi'      => $this->request->getPost('provinsi'),
                'kode_pos'      => $this->request->getPost('kode_pos'),
                'no_telpon'     => $this->request->getPost('no_telpon'),
                'email'         => $this->request->getPost('email'),
                'jabatan'       => $this->request->getPost('jabatan'),
                'gaji_pokok'    => $this->request->getPost('gaji_pokok'),
                'tanggal_masuk' => $this->request->getPost('tanggal_masuk'),
                'status'        => $this->request->getPost('status')
            ];
            $Model->tambahData($data);
        }
        return redirect()->to('/')->with('success', 'User berhasil ditambah');
    }

    public function proses_edit($kode_karyawan)
    {
        $Model = new M_Karyawan();
        $user = $Model->find($kode_karyawan);
        if (!$user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }
        if ($this->request->getMethod() === 'post' && $this->validate([
            'nama_karyawan' => 'required',
            'alamat'        => 'required',
            'kota'          => 'required',
            'provinsi'      => 'required',
            'kode_pos'      => 'required|numeric',
            'no_telpon'     => 'required|numeric',
            'email'         => 'required|valid_email',
            'jabatan'       => 'required',
            'gaji_pokok'    => 'required|numeric',
            'tanggal_masuk' => 'required|date',
            'status'        => 'required'
        ])) {
            $data = [
                'nama_karyawan' => $this->request->getPost('nama_karyawan'),
                'alamat'        => $this->request->getPost('alamat'),
                'kota'          => $this->request->getPost('kota'),
                'provinsi'      => $this->request->getPost('provinsi'),
                'kode_pos'      => $this->request->getPost('kode_pos'),
                'no_telpon'     => $this->request->getPost('no_telpon'),
                'email'         => $this->request->getPost('email'),
                'jabatan'       => $this->request->getPost('jabatan'),
                'gaji_pokok'    => $this->request->getPost('gaji_pokok'),
                'tanggal_masuk' => $this->request->getPost('tanggal_masuk'),
                'status'        => $this->request->getPost('status')
            ];
            $Model->editData($kode_karyawan, $data);
        }
        return redirect()->to('/')->with('success', 'User berhasil diupdate');
    }

    public function delete($kode_karyawan)
    {
        $model = new M_Karyawan();
        $user = $model->find($kode_karyawan);

        if (empty($user)) {
            return redirect()->to('/')->with('error', 'User tidak ditemukan');
        }

        $model->delete($kode_karyawan);

        return redirect()->to('/')->with('success', 'User berhasil dihapus');
    }

    public function export_karyawan()
    {
        $karyawan = new M_Karyawan();
        $datakaryawan = $karyawan->findAll();

        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama Karyawan')
            ->setCellValue('B1', 'Alamat')
            ->setCellValue('C1', 'Kota')
            ->setCellValue('D1', 'Provinsi')
            ->setCellValue('E1', 'Kode Pos')
            ->setCellValue('F1', 'No Telepon')
            ->setCellValue('G1', 'Email')
            ->setCellValue('H1', 'Jabatan')
            ->setCellValue('I1', 'Gaji Pokok')
            ->setCellValue('J1', 'Tanggal Masuk')
            ->setCellValue('K1', 'Status');

        $column = 2;
        // tulis data karyawan ke cell
        foreach ($datakaryawan as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $data['nama_karyawan'])
                ->setCellValue('B' . $column, $data['alamat'])
                ->setCellValue('C' . $column, $data['kota'])
                ->setCellValue('D' . $column, $data['provinsi'])
                ->setCellValue('E' . $column, $data['kode_pos'])
                ->setCellValue('F' . $column, $data['no_telpon'])
                ->setCellValue('G' . $column, $data['email'])
                ->setCellValue('H' . $column, $data['jabatan'])
                ->setCellValue('I' . $column, $data['gaji_pokok'])
                ->setCellValue('J' . $column, $data['tanggal_masuk'])
                ->setCellValue('K' . $column, $data['status']);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Karyawan';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}

