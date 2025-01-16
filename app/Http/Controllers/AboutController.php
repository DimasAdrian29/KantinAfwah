<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kontak' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'gambar_kantin' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi_kantin'  => 'required|string',
            'gambar_pemilik' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi_pemilik'  => 'required|string',
        ]);

        $about = new About();
        $about->kontak = $request->kontak;
        $about->email = $request->email;
        $about->alamat = $request->alamat;
        $about->deskripsi_pemilik = $request->deskripsi_pemilik;
        $about->deskripsi_kantin = $request->deskripsi_kantin;

        if ($request->hasFile('gambar_kantin')) {
            $about->gambar_kantin = $request->file('gambar_kantin')->store('images', 'public');
        }
        if ($request->hasFile('gambar_pemilik')) {
            $about->gambar_pemilik = $request->file('gambar_pemilik')->store('images', 'public');
        }

        $about->save();

        return redirect()->route('about.index')->with('success', 'about berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'kontak' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'gambar_kantin' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi_kantin'  => 'required|string',
            'gambar_pemilik' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi_pemilik'  => 'required|string',
        ]);


        $about->kontak = $request->kontak;
        $about->email = $request->email;
        $about->alamat = $request->alamat;
        $about->deskripsi_pemilik = $request->deskripsi_pemilik;
        $about->deskripsi_kantin = $request->deskripsi_kantin;

        if ($request->hasFile('gambar_kantin')) {
            $about->gambar_kantin = $request->file('gambar_kantin')->store('images', 'public');
        }
        if ($request->hasFile('gambar_pemilik')) {
            $about->gambar_pemilik = $request->file('gambar_pemilik')->store('images', 'public');
        }

        $about->save();

        return redirect()->route('about.index')->with('success', 'about berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {

    }
}
