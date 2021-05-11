<?php

namespace App\Http\Controllers\Admin;
use App\Attempt;
use App\Quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

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
        $quiz_for_leaderboard = Quiz::ofTeacher()->get();
        return view('admin.backend.index',compact('quizzes','attempts','quiz_for_leaderboard'));
    }

    public function get_attempt_top($quiz)
    {
        $quiz = Quiz::ofTeacher()->where('id',$quiz)->first();
        if($quiz){

        $attempts = $quiz->attempts()->with('user')->where('status','submitted')->orderBy('total_marks','DESC')->get();
        $filter_attempt = collect();
        foreach ($attempts as $key=>$attempt) {
            if(!$filter_attempt->contains('user_id',$attempt->user_id)){
                $filter_attempt->push($attempt);
            }
            if($key>4){
                break;
            }
        }
        return $filter_attempt;
    }
    return Response::HTTP_NOT_FOUND;
    }
}
