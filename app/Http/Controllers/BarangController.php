<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //

    public function index(): View
    {
        $barang = Barang::latest()->paginate(10);
        return view('levelAdmin.barang.index', compact('barang'));
    }

    public function create()
    {
        return view('levelAdmin.barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:150',
            'merek' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'satuan' => 'required',
        ]);

        Barang::create($request->all());

        return redirect()->route('admin.Barang.index')
            ->with('success', 'Barang berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $barang = Barang::findOrFail($id);

        return view('levelAdmin.barang.show', compact('barang'));
    }
    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id);

        return view('levelAdmin.barang.edit', compact('barang'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_barang' => 'required|string|max:150',
            'merek' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'satuan' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        return redirect()->route('admin.Barang.index')
            ->with('success', 'Data Barang berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('admin.Barang.index')->with(['success' => 'Data Barang Berhasil Dihapus!']);
    }
}
