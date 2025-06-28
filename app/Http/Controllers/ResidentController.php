<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ResidentController extends Controller
{
    public function index()
    {
        $residents = Resident::all();
        return view('pages.residents.index', [
            'residents' => $residents,
        ]);
    }

    public function create()
    {
        return view('pages.residents.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:residents,nik|max:16',
            'name' => 'required|max:100',
            'gender' => ['required', 'string', Rule::in(['male', 'female'])],
            'birth_date' => 'required|date',
            'birth_place' => 'required|string|max:100',
            'address' => 'required|string',
            'religion' => 'nullable|string|max:50',
            'marital_status' => ['required', 'string', Rule::in(['single', 'married', 'divorced', 'widowed'])],
            'occupation' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:15',
            'status' => ['nullable', 'string', Rule::in(['active', 'moved', 'deceased'])],
        ]);

        Resident::create($request->validate);

        return redirect('/resident')->with('success', 'Berhasil menambahkan data penduduk');
    }

    public function show(string $id)
    {
        $residents = Resident::findOrFail($id);
        return view('pages.residents.create', [
            'resident' => $residents,
        ]);
    }

    public function edit(string $id)
    {
        $residents = Resident::findOrFail($id);
        return view('pages.residents.create', [
            'resident' => $residents,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:residents,nik|max:16',
            'name' => 'required|max:100',
            'gender' => ['required', 'string', Rule::in(['male', 'female'])],
            'birth_date' => 'required|date',
            'birth_place' => 'required|string|max:100',
            'address' => 'required|string',
            'religion' => 'nullable|string|max:50',
            'marital_status' => ['required', 'string', Rule::in(['single', 'married', 'divorced', 'widowed'])],
            'occupation' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:15',
            'status' => ['nullable', 'string', Rule::in(['active', 'moved', 'deceased'])],
        ]);

        Resident::findOrFail($id)->update($request->validated());

        return redirect('/resident')->with('success', 'Berhasil mengubah data penduduk');
    }

    public function destroy(string $id)
    {
        $residents = Resident::findOrFail($id);
        $residents-> delete();
        return redirect('/resident')->with('success', 'Bershasil menghapus data penduduk');
    }
}
