<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/materials', [MaterialsController::class, 'index'])->name('materials');
Route::get('/forum', [ForumController::class, 'index'])->name('forum');
Route::get('/forum', [QuestionController::class, 'index'])->name('forum');
Route::get('/forum', [QuestionController::class, 'showForum'])->name('forum');
Route::post('/submit-question', [QuestionController::class, 'store'])->middleware('auth')->name('submit.question');

Route::post('/toggle-form/{id}', [QuestionController::class, 'toggleForm'])->name('toggleForm');
Route::post('/submit-reply/{id}', [QuestionController::class, 'submitReply'])->name('submitReply');
Route::post('/questions/{questionId}/reply', [QuestionController::class, 'submitReply'])->middleware('auth')->name('questions.reply');

Route::get('/home', [CourseController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/computer_networks', [LessonController::class, 'show'])->name('home');

Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);


Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/home', [CourseController::class, 'showCourses'])->name('home');
Route::get('/courses', [CourseController::class, 'index'])->middleware(['auth'])->name('courses.index');
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');



Route::get('/dashboard', function () {
    return view('home');
})->name('dashboard');

Route::get('/dashboard', [CourseController::class, 'showCourses'])->name('dashboard');
Route::get('/dashboard', [CourseController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/lessons', [LessonController::class, 'index'])->middleware(['auth'])->name('lessons.index');

require __DIR__.'/auth.php';
