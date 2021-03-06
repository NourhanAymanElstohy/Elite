<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\StoreChildRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Course;
use App\Models\Event;
use App\Instructor;
use App\Models\Schedule;

class DashboardController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $test = (new HomeController)->note();
        $user = Auth::user();
        Schedule::where('start_date','<',now())->delete();
        if($slug === "instructor" && $user->hasRole('instructor')){
            // dd($user->id);
            $instructor=Instructor::where('user_id',$user->id)->first();
            $courses=Course::where('instructor_id',$instructor->id)->get();
            // dd($courses);
            return view('dashboard.instructor.index',['courses'=>$courses]);
        }
        else if ($slug === "parent" && $user->hasRole('parent')){
            $children = $user->students;
            return view('dashboard.parent.index', ['children' => $children,'test'=>$test]);
        }else if($slug === "student" && $user->hasRole('student')){
            $courses = $user->courses;
            return view('dashboard.student.index',['courses'=>$courses , 'test'=>$test]);
        }else{
            return redirect()->back()->with('error', "you are not authenticated in this route");
        }

    }

    public function login($id){

        $user = Auth::user();
        $children = $user->students;
        if($children->contains('id',$id)){
            $user = User::where('id',$id)->first();
            Auth::login($user);
            return redirect('/');
        }{
            return redirect()->back()->with('error', "you don't have child with this account");
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.parent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChildRequest $request)
    {
        $parent = Auth::user();
        $base =Null;
        $image =Null;
        if($request->image){
            $image = base64_encode(file_get_contents($request->image));
            $base = "data:image/png;base64,";

        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $parent->phone_number,
            'address' => $parent->address,
            'gender' => $request->gender,
            'image'  => $base.$image,
            'age' => date('Y-m-d H:i:s', strtotime($request->age)),
            'parent_id' => $parent->id
        ]);
        $user->assignRole("student");
        $user->sendEmailVerificationNotification();

        return redirect()->route('dashboard',"parent")->with('status', "you created account for your child successfully .. wait for verification email");;
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function progress($slug)
    {
        $test = (new HomeController)->note();
        $user = Auth::user();
        if ($slug === "parent" && $user->hasRole('parent')){
            $children = $user->students;
            return view('dashboard.parent.progress', ['children' => $children, 'test'=>$test]);
        }else if($slug === "student" && $user->hasRole('student')){
            return view('dashboard.student.progress',['user'=>$user, 'test'=>$test]);
        }else{
            return redirect()->back()->with('error', "you are not authenticated in this route");
        }

    }

    public function students_enrolled(){
        $test = (new HomeController)->note();
        $id=Auth::user()->id;
        $instructor=Instructor::where('user_id',$id)->first();
        $course=Course::where('instructor_id',$instructor->id)->get();
        $test=array();
        for($x=0;$x<sizeof($course);$x++){
            if(!$course[$x]->students()->get()->isEmpty()){
        array_push($test,...$course[$x]->students()->get()->pluck('id')->toArray());
            }
        }
        $tes=User::whereIn('id',array_unique($test))->get();
        // dd($tes);
        return view('dashboard.dashboard_students',['students'=>$tes, 'test'=>$test]);
    }

    public function instructor_events(){
        $test = (new HomeController)->note();
        $id=Auth::user()->id;
        $instructor=Instructor::where('user_id',$id)->first();
        $events=Event::where('user_id',$instructor->user_id)->get();
        return view('dashboard.dashboard_events',['events'=>$events, 'test'=>$test]);
    }
    public function schedule($slug){
        $test = (new HomeController)->note();
        $user=Auth::user();
        if($slug === 'instructor' && $user->hasRole('instructor')){
        $instructor=Instructor::where('user_id',$user->id)->first();
        $schedules=Schedule::where('instructor_id',$instructor->id)->get();
        // dd($schedules);
        return view('dashboard.instructor.schedule',['schedules'=>$schedules]);
        }elseif($slug === 'student' && $user->hasRole('student')){
        $courses=$user->courses()->get();
        $schedule=Schedule::orderBy('created_at','desc')->whereIn('course_id',$courses)->get();
        // dd($schedule);
        return view('dashboard.student.schedule',['schedules'=>$schedule,'test'=>$test]);
        }
    }

}
