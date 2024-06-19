<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $question = "Apakah kamu benar-benar membutuhkannya?";
        $questionNumber = 1;
        return view('question.question1', compact('question', 'questionNumber'));
    }

    public function answer(Request $request, $currentQuestion)
    {
        if ($request->input('answer') === 'no') {
            return redirect('/no-need');
        } else {
            $nextQuestion = $currentQuestion + 1;
            if ($nextQuestion > 6) {
                return redirect('/completed');
            }
            return redirect('/question' . $nextQuestion);
        }
    }

    public function noNeed()
    {
        $question = "Kamu tidak perlu membelinya!";
        return view('question.no_need', compact('question'));
    }

    public function showQuestion($questionNumber)
    {
        $questions = [
            1 => "Apakah kamu benar-benar\nmembutuhkannya?",
            2 => "Apakah kamu merasa mampu membelinya sekarang atau di masa depan?",
            3 => "Apakah kamu sudah mencari alternatif?",
            4 => "Apakah ini adalah penawaran terbaik?",
            5 => "Apakah kualitasnya tinggi?",
            6 => "Apakah kualitas yang tinggi itu penting?",
        ];

        $question = $questions[$questionNumber] ?? "Pertanyaan tidak ditemukan";
        return view('question.question' . $questionNumber, compact('question', 'questionNumber'));
    }

    public function completed()
    {
        $question = "Kamu boleh membelinya!";
        return view('question.completed', compact('question'));
    }
}
