<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //

    public function index(): View
    {
        $supplier = Supplier::latest()->paginate(10);
        return view('levelAdmin.supplier.index', compact('supplier'));
    }

    public function create()
    {
        $barang = Barang::all();
        return view('levelAdmin.supplier.create', compact('barang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required|string|max:150',
            'alamat' => 'required',
            'no_hp' => 'required|string|max:15',
            'id_barang' => 'required',
        ]);

        Supplier::create($request->all());

        return redirect()->route('admin.Supplier.index')
            ->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $supplier = Supplier::findOrFail($id);

        return view('levelAdmin.supplier.show', compact('supplier'));
    }
    public function edit(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $barang = Barang::all();
        return view('levelAdmin.supplier.edit', compact('supplier', 'barang'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_supplier' => 'required|string|max:150',
            'alamat' => 'required',
            'no_hp' => 'required|string|max:15',
            'id_barang' => 'required',
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());

        return redirect()->route('admin.Supplier.index')
            ->with('success', 'Data supplier berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('admin.Supplier.index')->with(['success' => 'Data supplier Berhasil Dihapus!']);
    }
}
