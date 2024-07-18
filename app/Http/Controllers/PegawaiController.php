<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //
    public function index(): View
    {
        $pegawai = Pegawai::latest()->paginate(10);
        return view('levelAdmin.pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        return view('levelAdmin.pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:150',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('admin.Pegawai.index')
            ->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $pegawai = Pegawai::findOrFail($id);

        return view('levelAdmin.pegawai.show', compact('pegawai'));
    }

    public function edit(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);

        return view('levelAdmin.pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:150',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());

        return redirect()->route('admin.Pegawai.index')
            ->with('success', 'Data pegawai berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('admin.Pegawai.index')->with(['success' => 'Data Pegawai Berhasil Dihapus!']);
    }
}
