<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galery = Galery::all();
        return view('galery.index', compact('galery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul_galery' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'required|date',
        ]);

        $galery = new Galery();
        $galery->judul_galery = $request->judul_galery;
        $galery->deskripsi = $request->deskripsi;
        $galery->tanggal = $request->tanggal;

        if ($request->hasFile('foto')) {
            $galery->foto = $request->file('foto')->store('images/galery', 'public');
        }

        $galery->save();

        return redirect()->route('galery.index')->with('success', 'Galery berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galery $galery)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galery $galery)
    {
        return view('galery.edit', compact('galery      '));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galery): RedirectResponse
    {
        $request->validate([
            'judul_galery' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'required|date',
        ]);

        $galery->judul_galery = $request->judul_galery;
        $galery->deskripsi = $request->deskripsi;
        $galery->tanggal = $request->tanggal;

        if ($request->hasFile('foto')) {
            if ($galery->foto) {
                Storage::delete('public/' . $galery->foto);
            }
            $galery->foto = $request->file('foto')->store('images/galery', 'public');
        }

        $galery->save();

        return redirect()->route('galery.index')->with('success', 'Galery berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galery): RedirectResponse
    {
        if ($galery->foto) {
            Storage::delete('public/' . $galery->foto);
        }

        $galery->delete();

        return redirect()->route('galery.index')->with('success', 'Galery berhasil dihapus!');
    }
}
