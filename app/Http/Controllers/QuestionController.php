<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Answer;


class QuestionController extends Controller
{

    public function index(){
        $questions = Question::all();
        return view('forum', ['questions' => $questions]);
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string',
            'content_question' => 'required|string',
        ]);


        $question = new Question();
        $question->title = $validated['title'];
        $question->content_question = $validated['content_question'];
        $question->save();


        return redirect()->back()->with('success', 'Twoje pytanie zostało przesłane!');
    }

    public function toggleForm($questionId)
    {


        session(['showForm' => $questionId]);

        return back();
    }


    public function submitReply(Request $request, $questionId)
    {

        session()->forget('showForm');

        return back();
    }




}
