<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
class CourseController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('home', ['courses' => $courses]);
    }

    public function showCourses()
    {
        $courses = Course::all();

        $colors = [
            'linear-gradient(135deg, #0073e6 0%, #005bb5 100%)',
            'linear-gradient(135deg, #ff7f50 0%, #ff4500 100%)',
            'linear-gradient(135deg, #7b68ee 0%, #483d8b 100%)',
            'linear-gradient(135deg, #3cb371 0%, #2e8b57 100%)',
            'linear-gradient(135deg, #ff6347 0%, #ff4500 100%)'
        ];

        foreach ($courses as $index => $course) {
            $course->color = $colors[$index % count($colors)];
        }

        return view('home', compact('courses'));
    }


}
