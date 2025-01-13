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
         // Mengambil semua data slider dari tabel sliders
         $sliders = Slider::all();

         // Mengembalikan view 'sliders.index' dan mengirim data slider ke view
         return view('slider.index', compact('sliders'));
     }

    public function store(Request $request)
    {
        // Validasi input gambar
        $request->validate([
            'gambar_slider' => 'required|image|mimes:jpg,png,jpeg,gif|max:3072', // Validasi gambar
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
}
