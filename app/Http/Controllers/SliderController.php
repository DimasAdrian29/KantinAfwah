<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */

    public function index()
    {
      // Mengambil sua data slider dari tabel sliders
        $sliders = Slider::all();

        // Mengembalikan view 'sliders.index' dan mengirim data slider ke view
        return view('slider.index', compact('sliders'));
    }

    public function store(Request $request)
    {
        // Validasi input gambar
        $request->validate([
            'gambar_slider' => 'required|image|mimes:jpg,png,jpeg,gif,webp|max:3072', // Validasi gambar
        ]);

        // Menyimpan gambar ke dalam folder public dan mendapatkan path
        $imagePath = $request->file('gambar_slider')->store('images/sliders', 'public');

        // Membuat slider baru dan menyimpan path gambar
        $slider = new Slider();
        $slider->gambar_slider = $imagePath;
        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        // Menghapus gambar slider dari storage jika ada
        if ($slider->gambar_slider) {
            Storage::delete('public/' . $slider->gambar_slider);
        }

        // Menghapus data slider
        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Slider berhasil dihapus!');
    }

    public function create()
    {
        return view('slider.create');
    }
    public function edit(Slider $slider)
    {
        // Menampilkan form edit dengan data slider yang akan diubah
        return view('slider.edit', compact('slider'));
    }
    public function update(Request $request, Slider $slider)
    {
        // Validasi input gambar jika ada
        $request->validate([
            'gambar_slider' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp|max:3072', // Gambar bisa null jika tidak diubah
        ]);

        // Cek jika ada gambar baru yang diunggah
        if ($request->hasFile('gambar_slider')) {
            // Hapus gambar lama dari storage
            if ($slider->gambar_slider) {
                Storage::delete('public/' . $slider->gambar_slider);
            }

            // Menyimpan gambar baru ke dalam folder public dan mendapatkan path
            $imagePath = $request->file('gambar_slider')->store('images/sliders', 'public');

            // Perbarui path gambar di slider
            $slider->gambar_slider = $imagePath;
        }

        // Menyimpan perubahan data slider lainnya jika ada
        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider berhasil diperbarui!');
    }
}
