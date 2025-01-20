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
            'quotes' => 'required|string|max:255',
            'nama' => 'required|string|max:255',

        ]);

        $kutipan = new Kutipan();
        $kutipan->judul = $request->quotes;
        $kutipan->isi_kutipan = $request->nama;



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
            'quotes' => 'required|string|max:255',
            'nama' => 'required|string|max:255',

        ]);


        $kutipan->quotes = $request->quotes;
        $kutipan->nama = $request->nama;


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
