<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KomputerController extends Controller
{
    //

    public function index(): View
    {
        $komputer = Komputer::latest()->paginate(10);
        return view('levelAdmin.komputer.index', compact('komputer'));
    }

    public function create()
    {
        return view('levelAdmin.komputer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_komputer' => 'required|string|max:10|unique:komputer,id_komputer',
            'merek' => 'required',
            'kelengkapan' => 'required',
        ]);

        Komputer::create($request->all());

        return redirect()->route('admin.Komputer.index')
            ->with('success', 'Komputer berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $komputer = Komputer::findOrFail($id);

        return view('levelAdmin.komputer.show', compact('komputer'));
    }

    public function edit(string $id)
    {
        $komputer = Komputer::findOrFail($id);

        return view('levelAdmin.komputer.edit', compact('komputer'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'id_komputer' => 'required|string|max:10',
            'merek' => 'required',
            'kelengkapan' => 'required',
        ]);

        $komputer = Komputer::findOrFail($id);
        $komputer->update($request->all());

        return redirect()->route('admin.Komputer.index')
            ->with('success', 'Data komputer berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $komputer = Komputer::findOrFail($id);
        $komputer->delete();
        return redirect()->route('admin.Komputer.index')->with(['success' => 'Data Komputer Berhasil Dihapus!']);
    }
}
