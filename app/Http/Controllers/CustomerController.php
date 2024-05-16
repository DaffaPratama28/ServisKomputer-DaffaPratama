<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

    public function index(): View
    {
        $customers = Customer::latest()->paginate(10);
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required|string|max:150',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        Customer::create($request->all());

        return redirect()->route('Customer.index')
            ->with('success', 'Customer berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $customers = Customer::findOrFail($id);

        return view('customers.show', compact('customers'));
    }
    public function edit(string $id)
    {
        $customers = Customer::findOrFail($id);

        return view('customers.edit', compact('customers'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_customer' => 'required|string|max:150',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $customers = Customer::findOrFail($id);
        $customers->update($request->all());

        return redirect()->route('Customer.index')
            ->with('success', 'Data customer berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $customers = Customer::findOrFail($id);
        $customers->delete();
        return redirect()->route('Customer.index')->with(['success' => 'Data Customer Berhasil Dihapus!']);
    }
}
