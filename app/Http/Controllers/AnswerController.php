<?php

namespace App\Http\Controllers;
use App\Models\Answer;
use Illuminate\Http\Request;
class AnswerController extends Controller
{
    public function store(Request $request, $questionId)
    {
        $validated = $request->validate([
            'body' => 'required|string',
        ]);

        $question = new Answer();
        $question->body = $validated['body'];
        $question->save();

        session()->forget('showForm');


        return redirect()->back()->with('success', 'Twoje pytanie zostało przesłane!');
    }

}
