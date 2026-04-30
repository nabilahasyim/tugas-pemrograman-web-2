<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // READ
    public function index()
    {
        return view('mahasiswa.index', [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => Mahasiswa::latest()->get()
        ]);
    }

    // FORM CREATE
    public function create()
    {
        return view('mahasiswa.create', [
            'title' => 'Tambah Mahasiswa'
        ]);
    }

    // STORE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|digits:11|numeric',
            'jurusan' => 'required',
            'semester' => 'required|numeric',
            'email' => 'required|email'
        ]);

        Mahasiswa::create($validated);

        return redirect('/mahasiswa')
            ->with('success', 'Data berhasil ditambahkan');
    }

    // FORM EDIT
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', [
            'title' => 'Edit Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
    }

     // UPDATE
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|digits:11|numeric',
            'jurusan' => 'required',
            'semester' => 'required|numeric',
            'email' => 'required|email'
        ]);

        $mahasiswa->update($validated);

        return redirect('/mahasiswa')
            ->with('success', 'Data berhasil diubah');
    }

     // DELETE
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect('/mahasiswa')
            ->with('success', 'Data berhasil dihapus');
    }
}