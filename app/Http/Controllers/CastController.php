<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast; // Pastikan kamu punya model Cast

class CastController extends Controller
{
    // Menampilkan form untuk membuat data pemain film baru
    public function create()
    {
        return view('cast.create'); // Tampilkan form
    }

    // Menyimpan data baru ke tabel Cast
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'bio' => 'nullable'
        ]);

        Cast::create($request->all());

        return redirect()->route('cast.index')->with('success', 'Pemain film berhasil ditambahkan');
    }

    // Menampilkan detail data pemain film dengan id tertentu
    public function show($cast_id)
    {
        $cast = Cast::findOrFail($cast_id);
        return view('cast.show', compact('cast'));
    }

    // Menampilkan form untuk edit pemain film dengan id tertentu
    public function edit($cast_id)
    {
        $cast = Cast::findOrFail($cast_id);
        return view('cast.edit', compact('cast'));
    }

    // Menyimpan perubahan data pemain film (update) untuk id tertentu
    public function update(Request $request, $cast_id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'bio' => 'nullable'
        ]);

        $cast = Cast::findOrFail($cast_id);
        $cast->update($request->all());

        return redirect()->route('cast.show', $cast_id)->with('success', 'Data pemain film berhasil diupdate');
    }

    // Menghapus data pemain film dengan id tertentu
    public function destroy($cast_id)
    {
        $cast = Cast::findOrFail($cast_id);
        $cast->delete();

        return redirect()->route('cast.index')->with('success', 'Data pemain film berhasil dihapus');
    }
    
    public function index()
    {
        $cast = Cast::all();
        return view('cast.index', compact('cast'));
    }
}
