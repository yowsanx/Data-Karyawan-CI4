<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\DB;

class BankysController extends Controller
{

    public function index()
    {
        $baki = Bank::all();
        return view('baki.index', compact('baki'));
    }

    public function create()
    {
        $baki = Bank::all();
        return view('baki.create', compact('baki'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_bank'             => 'required',
            'name_bank'             => 'required',
            'alamat'                => 'required',
            'kota'                  => 'required',
            'provinsi'              => 'required',
            'kode_pos'              => 'required',
            'nomor_telepon'         => 'required',
            'email'                 => 'required',
            'deskripsi'             => 'required',
            'status'                => 'required'
        ]);

        // Untuk menambahkan daata ke dalam database
        Bank::create([
            'kode_bank'             => $request->kode_bank,
            'name_bank'             => $request->name_bank,
            'alamat'                => $request->alamat,
            'kota'                  => $request->kota,
            'provinsi'              => $request->provinsi,
            'kode_pos'              => $request->kode_pos,
            'nomor_telepon'         => $request->nomor_telepon,
            'email'                 => $request->email,
            'deskripsi'             => $request->deskripsi,
            'status'                => $request->status
        ]);
        // Redierect ke halaman index dengan mengirem pesan menggunkan session
        return redirect()->route('owl.index')->with(['success' => 'Data Berhasil Ditambahkan!!!']);
    }

    public function show(string $id)
    {
        // untuk mendecrypt kode pelanggan yang telah terenkripsi
        $decrypt = decrypt($id);
        // Untuk menampilkan data pelanggan berdasarkan Kode pelanggan
        $baki = Bank::where('id', $decrypt)->first();
        return view('baki.show', compact('baki'));
    }


    public function edit(string $id)
    {
        // untuk mendecrypt kode pelanggan yang telah terenkripsi
        $decrypt = decrypt($id);
        // Untuk menampilkan data pelanggan berdasarkan Kode pelanggan
        $baki = Bank::where('id', $decrypt)->first();
        return view('baki.edit', compact('baki'));
    }


    public function update(Request $request, string $id)
    {
        // menambahakan validasi pada form
        $this->validate($request, [
            'kode_bank'             => 'required',
            'name_bank'             => 'required',
            'alamat'                => 'required',
            'kota'                  => 'required',
            'provinsi'              => 'required',
            'kode_pos'              => 'required',
            'nomor_telepon'         => 'required',
            'email'                 => 'required',
            'deskripsi'             => 'required',
            'status'                => 'required'
        ]);

        // untuk mendecrypt kode pelanggan yang telah terenkripsi
        $decrypt = decrypt($id);
        // Untuk mencari data pelanggan berdasarkan kode pelanggan
        $baki = Bank::where('id', $decrypt);
        // Untuk menupdate data pelanggan
        Bank::update([
            'kode_bank'             => $request->kode_bank,
            'name_bank'             => $request->name_bank,
            'alamat'                => $request->alamat,
            'kota'                  => $request->kota,
            'provinsi'              => $request->provinsi,
            'kode_pos'              => $request->kode_pos,
            'nomor_telepon'         => $request->nomor_telepon,
            'email'                 => $request->email,
            'deskripsi'             => $request->deskripsi,
            'status'                => $request->status
        ]);
        // Redierect ke halaman index dengan mengirem pesan menggunkan session
        return redirect()->route('owl.index')->with(['success' => 'Data Berhasil Diupdate!!!']);
    }

    public function destroy(string $id)
    {
        $baki = Bank::findOrFail($id);
        $baki->delete();

        // Redierect ke halaman index dengan mengirem pesan menggunkan session
        return redirect()->route('owl.index')->with(['success' => 'Data Berhasil Dihapus!!!']);
    }

    public function exportCabang()
    {
        // Mendapatkan data cabang dari database
        $baki = Bank::all();


        // Membuat objek spreadsheet baru
        $spreadsheet = new Spreadsheet();

        // Membuat lembar kerja baru
        $worksheet = $spreadsheet->getActiveSheet();

        // Menambahkan header pada file excel
        $worksheet->setCellValue('A1', 'kode_bank');
        $worksheet->setCellValue('B1', 'nama_bank');
        $worksheet->setCellValue('C1', 'alamat');
        $worksheet->setCellValue('D1', 'kota');
        $worksheet->setCellValue('E1', 'provinsi');
        $worksheet->setCellValue('F1', 'Kode_pos');
        $worksheet->setCellValue('G1', 'nomor_telepon');
        $worksheet->setCellValue('H1', 'email');
        $worksheet->setCellValue('I1', 'deskripsi');
        $worksheet->setCellValue('J1', 'status');
        // Menambahkan data cabang ke dalam file excel
        $row = 2;
        foreach ($baki as $c) {
            $worksheet->setCellValue('A' . $row, $c->kode_bank);
            $worksheet->setCellValue('B' . $row, $c->nama_bank);
            $worksheet->setCellValue('C' . $row, $c->alamat);
            $worksheet->setCellValue('D' . $row, $c->kota);
            $worksheet->setCellValue('E' . $row, $c->provinsi);
            $worksheet->setCellValue('F' . $row, $c->kode_pos);
            $worksheet->setCellValue('G' . $row, $c->nomer_telepon);
            $worksheet->setCellValue('H' . $row, $c->email);
            $worksheet->setCellValue('I' . $row, $c->deskripsi);
            $worksheet->setCellValue('J' . $row, $c->status);
            $row++;
        }

        // Membuat objek writer untuk menulis file excel
        $writer = new Xlsx($spreadsheet);

        // Menyimpan file excel ke dalam server
        $writer->save('cabang.xlsx');

        // Mengirim file excel sebagai respon ke browser
        return response()->download(public_path('cabang.xlsx'));
    }
}
