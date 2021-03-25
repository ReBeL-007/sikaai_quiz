<?php

namespace App\Http\Controllers\Admin;
use App\Attempt;
use App\Quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $quizzes = Quiz::all();
        // foreach ($quizzes as $key => $quiz) {
        //     $attemptsCount = $quiz->attempts()->count();
        //     if(!($quiz->attempts_no >= $attemptsCount || $quiz->attempts_no == 0 )){
        //         $quizzes->forget($key);
        //     }
        // }
        $attempts = Attempt::orderBy('total_marks','DESC')->take(5)->get();
        return view('admin.backend.index',compact('quizzes','attempts'));
    }
}
