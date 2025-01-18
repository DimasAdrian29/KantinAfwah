<?php

namespace App\Http\Controllers;

use App\Models\Kutipan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KutipanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $kutipan = Kutipan::all();
        return view('kutipan.index', compact('kutipan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('kutipan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_kutipan' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $kutipan = new Kutipan();
        $kutipan->judul = $request->judul;
        $kutipan->isi_kutipan = $request->isi_kutipan;
        if ($request->hasFile('gambar')) {
            $kutipan->gambar = $request->file('gambar')->store('images', 'public');
        }


        $kutipan->save();

        return redirect()->route('kutipan.index')->with('success', 'kutipan berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Kutipan $kutipan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kutipan $kutipan)
    {
        return view('kutipan.edit', compact('kutipan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kutipan $kutipan)
    {

        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_kutipan' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        $kutipan->judul = $request->judul;
        $kutipan->isi_kutipan = $request->isi_kutipan;

        if ($request->hasFile('gambar')) {
            if ($kutipan->gambar){
                Storage::delete('public/storage'. $kutipan->gambar);
            }
            $kutipan->gambar = $request->file('gambar')->store('images', 'public');
        }

        $kutipan->save();

        return redirect()->route('kutipan.index')->with('success', 'kutipan berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kutipan $kutipan)
    {

        // Menghapus gambar kutipan dari storage jika ada
        if ($kutipan->gambar) {
            Storage::delete('public/' . $kutipan->gambar);
        }

        // Menghapus data kutipan
        $kutipan->delete();

        return redirect()->route('kutipan.index')->with('success', 'Kutipan berhasil dihapus!');

    }
}
