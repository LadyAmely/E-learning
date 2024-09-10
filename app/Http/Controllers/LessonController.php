<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    public function index(){
        $lessons = Lesson::all();
        return response()->json($lessons);
    }

    public function show(){
        $lessons = Lesson::all()->slice(40, 10);
        return view('lesson', ['lessons'=> $lessons]);
    }
}
