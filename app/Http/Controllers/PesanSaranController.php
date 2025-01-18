<?php

namespace App\Http\Controllers;

use App\Models\PesanSaran;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PesanSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanSaran = PesanSaran::all();
        return view('pesanSaran.index', compact('pesanSaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesanSaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        $pesanSaran = new PesanSaran();
        $pesanSaran->nama = $request->nama;
        $pesanSaran->email = $request->email;
        $pesanSaran->pesan = $request->pesan;
        $pesanSaran->jawaban = "kosong"; // Default value for jawaban
        $pesanSaran->save();

        return redirect()->route('KantinAfwah.pesandansaran')->with('success', 'Pesan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PesanSaran $pesanSaran)
    {
        return view('pesanSaran.show', compact('pesanSaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PesanSaran $pesanSaran)
    {
        return view('pesanSaran.edit', compact('pesanSaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PesanSaran $pesanSaran): RedirectResponse
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
            'jawaban' => 'nullable|string',
        ]);

        $pesanSaran->nama = $request->nama;
        $pesanSaran->email = $request->email;
        $pesanSaran->pesan = $request->pesan;
        $pesanSaran->jawaban = $request->jawaban;
        $pesanSaran->save();

        return redirect()->route('pesanSaran.index')->with('success', 'Pesan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PesanSaran $pesanSaran): RedirectResponse
    {
        $pesanSaran->delete();

        return redirect()->route('pesanSaran.index')->with('success', 'Pesan berhasil dihapus!');
    }
}
