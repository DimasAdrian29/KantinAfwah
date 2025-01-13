<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HomeController extends Controller
{
    // public function home()
    // {
    //     return view('KantinAfwah.home');
    // }
    // public function ourbrands()
    // {
    //     return view('KantinAfwah.ourbrands');
    // }
    // public function about_us()
    // {
    //     return view('KantinAfwah.about');
    // }
    // public function footer()
    // {
    //     return view('KantinAfwah.footer');
    // }
    // public function career()
    // {
    //     return view('KantinAfwah.career');
    // }
    // public function login()
    // {
    //     return view('KantinAfwah.login');
    // }
    // public function register()
    // {
    //     return view('KantinAfwah.register');
    // }
    // public function index(): View
    // {
    //     $QuestionAnswer = QuestionAnswer::all();
    //     return view('questionanswer.index',compact('QuestionAnswer'));//menampilkan view form input pesansaran
    // }
    // public function store(Request $request): RedirectResponse
    // {
    //     $validated = $request->validate([
    //         'pertanyaan' => 'required|string|max:255',
    //         'jawaban' => 'required|string',
    //     ]);
    //     $request->user()->QuestionAnswer()->create($validated);
    //     return redirect()->route('question_answer.index')->with('success','Pertanyaan berhasil dikirim!');
    // }
    // public function edit(int $id): View
    // {
    //     $questionAnswer = QuestionAnswer::findOrFail($id);

    //     return view('questionanswer.edit',compact('questionAnswer'));
    // }
    // public function update(Request $request, int $id)
    // {
    //     $validated = $request->validate([
    //         'pertanyaan' => 'required|string|max:255',
    //         'jawaban' => 'required|string',
    //     ]);

    //     $questionAnswer = QuestionAnswer::findOrFail($id);
    //     $questionAnswer->update($validated);

    //     return redirect()->route('question_answer.index')->with('success','Pesan Berhasil');
    // }
    // public function destroy(QuestionAnswer $questionAnswer)
    // {
    //     $questionAnswer->delete();
    //     return redirect()->route('question_answer.index')->with('success','Pesan Berhasil dihapus');
    // }
}
