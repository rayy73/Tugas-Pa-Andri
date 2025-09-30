<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    public function index()
    {
        $departemen = Departemen::all();
        return view('departemen.index', ['departemen'=>$departemen]);
    }

    public function create()
    {
        return view('departemen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_departemen' => 'required',
        ]);

        Departemen::create([
            'nama_departemen' => $request->nama_departemen,
        ]);

        return redirect()->route('departemen.index')
                         ->with('success', 'Departemen Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $data = Departemen::where('kodedepartemen',$id)->firstOrFail();
        return view('departemen.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_departemen' => 'required',
        ]);

        Departemen::where('kodedepartemen', $id)->update([
            'nama_departemen' => $request->nama_departemen,
        ]);

        return redirect()->route('departemen.index')
                         ->with('success', 'Departemen Berhasil Dirubah');
    }

    public function destroy($id)
    {
        Departemen::where('kodedepartemen',$id)->delete();
        return redirect()->route('departemen.index')
                         ->with('success', 'Departemen Berhasil Dihapus');
    }
}
