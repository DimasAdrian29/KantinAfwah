<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promo = Promo::all();
        return view('promo.index', compact('promo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal_awal_promo' => 'required|date',
            'tanggal_akhir_promo' => 'required|date|after_or_equal:tanggal_awal_promo',
            'syarat_dan_ketentuan' => 'required|string',
        ]);

        $promo = new Promo();
        $promo->judul = $request->judul;
        $promo->deskripsi = $request->deskripsi;
        $promo->tanggal_awal_promo = $request->tanggal_awal_promo;
        $promo->tanggal_akhir_promo = $request->tanggal_akhir_promo;
        $promo->syarat_dan_ketentuan = $request->syarat_dan_ketentuan;

        if ($request->hasFile('gambar')) {
            $promo->gambar = $request->file('gambar')->store('images/promo', 'public');
        }

        $promo->save();

        return redirect()->route('promo.index')->with('success', 'Promo berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        return view('promo.show', compact('promo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        return view('promo.edit', compact('promo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo): RedirectResponse
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal_awal_promo' => 'required|date',
            'tanggal_akhir_promo' => 'required|date|after_or_equal:tanggal_awal_promo',
            'syarat_dan_ketentuan' => 'required|string',
        ]);

        $promo->judul = $request->judul;
        $promo->deskripsi = $request->deskripsi;
        $promo->tanggal_awal_promo = $request->tanggal_awal_promo;
        $promo->tanggal_akhir_promo = $request->tanggal_akhir_promo;
        $promo->syarat_dan_ketentuan = $request->syarat_dan_ketentuan;

        if ($request->hasFile('gambar')) {
            if ($promo->gambar) {
                Storage::delete('public/' . $promo->gambar);
            }
            $promo->gambar = $request->file('gambar')->store('images/promo', 'public');
        }

        $promo->save();

        return redirect()->route('promo.index')->with('success', 'Promo berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo): RedirectResponse
    {
        if ($promo->gambar) {
            Storage::delete('public/' . $promo->gambar);
        }

        $promo->delete();

        return redirect()->route('promo.index')->with('success', 'Promo berhasil dihapus!');
    }
}
