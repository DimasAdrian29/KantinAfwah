<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Slider;

use App\Models\Kutipan;
use App\Models\Promo;
use App\Models\Menu;
use App\Models\Galery;

use App\Models\PesanSaran;

use App\Models\About;


class HomeController extends Controller
{
    public function home()
    {
        $sliders = Slider::all();
        $kutipan = Kutipan::all();
        $promo = Promo::all();
        $menu = Menu::all();
        $galery = Galery::all();
        return view('KantinAfwah.home', compact('sliders' , 'kutipan' , 'promo' , 'menu' , 'galery'));
    }
    public function halamanpromo()
    {
        $promo=Promo::all();
        return view('KantinAfwah.halamanpromo', compact("promo"));
    }

    public function aboutus()

    {
        $aboutus = About::all();
        return view('KantinAfwah.aboutus', compact('aboutus'));
    }
    public function pesandansaran()
    {
        $pesansaran = PesanSaran::all();
        return view('KantinAfwah.pesandansaran', compact('pesansaran'));
    }
    public function gallery()
    {
        $galery = Galery::all();
        return view('KantinAfwah.gallery' , compact('galery'));
        return view('KantinAfwah.footer');
    }
    public function daftarmenu()
    {

        $daftarmenu = Menu::all();
        return view('KantinAfwah.daftarmenu', compact('daftarmenu'));
    }
    public function career()
    {
        return view('KantinAfwah.career');
    }
    public function login()
    {
        return view('KantinAfwah.login');
    }
    public function register()
    {
        return view('KantinAfwah.register');
    }
    public function index(): View
    {
        $QuestionAnswer = QuestionAnswer::all();
        return view('questionanswer.index',compact('QuestionAnswer'));//menampilkan view form input pesansaran
    }
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string',
        ]);
        $request->user()->QuestionAnswer()->create($validated);
        return redirect()->route('question_answer.index')->with('success','Pertanyaan berhasil dikirim!');
    }
    public function edit(int $id): View
    {
        $questionAnswer = QuestionAnswer::findOrFail($id);

        return view('questionanswer.edit',compact('questionAnswer'));
    }
    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string',
        ]);

        $questionAnswer = QuestionAnswer::findOrFail($id);
        $questionAnswer->update($validated);

        return redirect()->route('question_answer.index')->with('success','Pesan Berhasil');
    }
    public function destroy(QuestionAnswer $questionAnswer)
    {
        $questionAnswer->delete();
        return redirect()->route('question_answer.index')->with('success','Pesan Berhasil dihapus');
    }
}
