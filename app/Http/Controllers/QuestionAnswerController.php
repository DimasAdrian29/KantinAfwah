<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class QuestionAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $QuestionAnswer = QuestionAnswer::all();
        return view('questionanswer.index',compact('QuestionAnswer'));//menampilkan view form input pesansaran
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string',
        ]);
        $request->user()->QuestionAnswer()->create($validated);
        return redirect()->route('question_answer.index')->with('success','Pertanyaan berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionAnswer $questionAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        $questionAnswer = QuestionAnswer::findOrFail($id);

        return view('questionanswer.edit',compact('questionAnswer'));
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionAnswer $questionAnswer)
    {
        $questionAnswer->delete();
        return redirect()->route('question_answer.index')->with('success','Pesan Berhasil dihapus');
    }
}
