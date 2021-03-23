<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attempt;
use App\Contact;
use App\Category;
use App\Course;
use App\Lesson;
use App\Quiz;
use Carbon\Carbon;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('contactUs');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::all();
        $now = Carbon::now();
        // $lessons = Lesson::all();
        $quizzes = Quiz::all();
        $upcoming_tests = [];
        foreach ($quizzes as $key => $quiz) {
            if($quiz->start_at != null){
                if($now <= new Carbon($quiz->start_at)){
                    array_push($upcoming_tests,$quiz);
                }
            }
        }
        $attempts = Attempt::orderBy('total_marks','DESC')->take(5)->get();
        return view('home',compact('upcoming_tests','attempts'));
    }

    public function courses()
    {
        $categories = Category::pluck('name','id');
        // dd($categories);
        return view('student.courses.index',compact('categories'));
    }

    public function courseDetail(Course $course)
    {
        return view('student.courses.courseDetail',compact('course'));
    }

    public function getLesson(Lesson $lesson){
        return $lesson;
    }

    public function getspecificCourses(Request $request) {
        return Course::where('category_id',$request->category_id)->with('teachers')->get();
        // foreach($courses as $c){

        //     dd($c->thumbnail);
        // }
    }

    public function contactUs(Request $request)
    {
        // dd($request->all());
        $data = $this->validate($request,[
                    'fname' => 'required',
                    'lname' => 'required',
                    'email' => 'required',
                    'contact' => 'required',
                    'message' => 'required',
                ]);
            // dd($data);
        Contact::create($data);
        Session::flash('flash_success', 'Thank you for leaving message!');
        Session::flash('flash_type', 'alert-success');
        return redirect()->back();
    }
}
