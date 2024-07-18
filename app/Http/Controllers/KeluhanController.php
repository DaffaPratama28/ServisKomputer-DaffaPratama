<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Keluhan;
use App\Models\Komputer;
use App\Models\Pegawai;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    //

    public function index(): View
    {
        $keluhan = Keluhan::latest()->paginate(10);
        return view('levelAdmin.keluhan.index', compact('keluhan'));
    }

    public function create()
    {
        $komputer = Komputer::all();
        $customer = Customer::all();
        $pegawai = Pegawai::all();
        return view('levelAdmin.keluhan.create', compact('komputer', 'customer', 'pegawai'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_keluhan' => 'required',
            'ongkos' => 'required',
            'id_komputer' => 'required',
            'customer_id' => 'required',
            'id_pegawai' => 'required',
        ]);

        Keluhan::create($request->all());

        return redirect()->route('admin.Keluhan.index')
            ->with('success', 'Keluhan berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $keluhan = Keluhan::findOrFail($id);

        return view('levelAdmin.keluhan.show', compact('keluhan'));
    }
    public function edit(string $id)
    {
        $keluhan = Keluhan::findOrFail($id);
        $komputer = Komputer::all();
        $customer = Customer::all();
        $pegawai = Pegawai::all();
        return view('levelAdmin.keluhan.edit', compact('keluhan', 'komputer', 'customer', 'pegawai'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_keluhan' => 'required',
            'ongkos' => 'required',
            'id_komputer' => 'required',
            'customer_id' => 'required',
            'id_pegawai' => 'required',
        ]);

        $keluhan = Keluhan::findOrFail($id);
        $keluhan->update($request->all());

        return redirect()->route('admin.Keluhan.index')
            ->with('success', 'Data Keluhan berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $keluhan = Keluhan::findOrFail($id);
        $keluhan->delete();
        return redirect()->route('admin.Keluhan.index')->with(['success' => 'Data Keluhan Berhasil Dihapus!']);
    }
}
