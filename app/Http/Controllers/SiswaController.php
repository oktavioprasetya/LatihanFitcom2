<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Menampilkan daftar siswa
    public function index()
    {
        $siswas = Siswa::all();

        return view('siswa.index', compact('siswas'));
    }

    // Menampilkan formulir tambah siswa
    public function create()
    {
        return view('siswa.create');
    }

    // Menyimpan data siswa
    public function store(Request $request)
    {
        $data = $request->validate([
            'nis' => 'required|string|max:20|unique:siswas,nis',
            'nama' => 'required|string|max:100',
            'kelas' => 'required|string|max:20',
            'jurusan' => 'required|string|max:100',
        ]);

        Siswa::create($data);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil disimpan!');
    }
}