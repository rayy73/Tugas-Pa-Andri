<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Menampilkan semua data karyawan.
     */
   public function index()
{
    $karyawan = Karyawan::paginate(5); // ← ganti all() jadi paginate()
    return view('karyawan.index', compact('karyawan'));
}


    /**
     * Menampilkan form tambah karyawan.
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Menyimpan data karyawan baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama_karyawan' => 'required',
            'gaji_karyawan' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            // kalau nanti ada relasi ke departemen, ini bisa diaktifkan lagi
            // 'departemen_id' => 'required',
        ], [
            'nip.required' => 'NIP wajib diisi',
            'nama_karyawan.required' => 'Nama karyawan wajib diisi',
            'gaji_karyawan.required' => 'Gaji karyawan wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi',
        ]);

        $data = [
            'nip' => $request->input('nip'),
            'nama_karyawan' => $request->input('nama_karyawan'),
            'gaji_karyawan' => $request->input('gaji_karyawan'),
            'alamat' => $request->input('alamat'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
        ];

        Karyawan::create($data);
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail karyawan (opsional).
     */
    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', compact('karyawan'));
    }

    /**
     * Menampilkan form edit data karyawan.
     */
   public function edit($id)
{
    $data = Karyawan::where('nip', $id)->first(); // ambil berdasarkan nip
    return view('karyawan.edit', compact('data')); // kirim ke view
}


    /**
     * Menyimpan perubahan data karyawan.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nip' => 'required',
        'nama_karyawan' => 'required',
        'gaji_karyawan' => 'required|numeric|min:0',
        'alamat' => 'required',
        'jenis_kelamin' => 'required',
    ], [
        'nip.required' => 'NIP wajib diisi',
        'nama_karyawan.required' => 'Nama karyawan wajib diisi',
        'gaji_karyawan.required' => 'Gaji karyawan wajib diisi',
        'alamat.required' => 'Alamat wajib diisi',
        'jenis_kelamin.required' => 'Jenis kelamin wajib diisi',
    ]);

    $data = [
        'nip' => $request->nip,
        'nama_karyawan' => $request->nama_karyawan,
        'gaji_karyawan' => (int) $request->gaji_karyawan,
        'alamat' => $request->alamat,
        'jenis_kelamin' => $request->jenis_kelamin,
    ];

    Karyawan::where('nip', $id)->update($data);

    return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diperbarui!');
}


    /**
     * Menghapus data karyawan.
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil dihapus!');
    }
}
