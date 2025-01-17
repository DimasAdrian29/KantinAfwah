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
        // Mengambil semua data kutipan dari tabel kutipans
        $kutipan = Kutipan::all();

        // Mengembalikan view 'kutipan.index' dan mengirim data kutipan ke view
        return view('kutipan.index', compact('kutipan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk membuat kutipan baru
        return view('kutipan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input kutipan
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_kutipan' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Membuat kutipan baru
        $kutipan = new Kutipan();
        $kutipan->judul = $request->judul;
        $kutipan->isi_kutipan = $request->isi_kutipan;

        // Menyimpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $kutipan->gambar = $request->file('gambar')->store('images', 'public');
        }

        // Menyimpan data kutipan
        $kutipan->save();

        return redirect()->route('kutipan.index')->with('success', 'Kutipan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kutipan $kutipan)
    {
        // Tidak ada aksi spesifik dalam metode ini, bisa diimplementasikan jika diperlukan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kutipan $kutipan)
    {
        // Menampilkan form edit dengan data kutipan yang akan diubah
        return view('kutipan.edit', compact('kutipan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kutipan $kutipan)
    {
        // Validasi input kutipan
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_kutipan' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Memperbarui judul dan isi kutipan
        $kutipan->judul = $request->judul;
        $kutipan->isi_kutipan = $request->isi_kutipan;

        // Cek jika ada gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($kutipan->gambar) {
                Storage::delete('public/' . $kutipan->gambar);
            }

            // Menyimpan gambar baru dan mendapatkan path
            $kutipan->gambar = $request->file('gambar')->store('images/kutipan', 'public');
        }

        // Menyimpan perubahan data kutipan
        $kutipan->save();

        return redirect()->route('kutipan.index')->with('success', 'Kutipan berhasil diperbarui!');
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
