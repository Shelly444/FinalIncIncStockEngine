<?php

namespace App\Http\Controllers;
use Excel;
use App\User;
use DB;
use App\Course;
use App\Classes;
use App\StudentClass;
use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = DB::table('users')
                    ->where('userType', 'S')
                    ->get();
        
        return view('instructor.instructor', compact('records'));
    }

    public function class()
    {
        $courses = DB::table('users')
                    ->join('courses', 'courses.accountId','=','users.id') 
                    ->get();
        return view('instructor.setup.setupclass', compact('courses'));
    }

    public function begin()
    {
        return view('instructor.setup.setupcourse');
    }

    /**
     * Show the form to store students info to IncInc Stock Engine.
     * Reference document 
     * www.webslesson.info/2019/02/import-excel-file-in-laravel.html
     * I placed an excel file called Book1 for how the excel works
     * @return \Illuminate\Http\Response
     */
    public function student_info(Request $request)
    {
        $this->validate($request, [
            'excelFile'  => 'required|mimes:xls,xlsx'
        ]);

        $dir = $request->file('excelFile')->getRealPath();
        $info = Excel::load($dir)->get();
        $userType = request('userType');
        $password = request('password');
        $userAccept = request('userAccept');
        $pass = bcrypt($password);


            foreach($info as $student){
                $storeInfo[] = [
                     'userId' => $student->useridentification,
                     'userFirstName' => $student->firstname,
                     'userLastName' => $student->lastname,
                     'email' => $student->email,
                     'userPhone' => $student->phone,
                     'userType'=>  $userType,
                     'password'=>  $pass,
                     'userAccept'=> $userAccept,

                ];
                
            }
          if(!empty($storeInfo))
          {
                    DB::table('users')->insert($storeInfo);
          }
        
        return back()->with('status', 'Students were added to the database.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function newStudent(Request $request)
    {
         $this->validate($request, [
            'userId' => 'required',
            'userFirstName' => 'required',
            'userLastName' => 'required',
            'userPhone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'userType' => 'required',
            'userAccept' => 'required',
        ]);

        $user = new User();
        $user->userId = $request->get('userId');
        $user->userFirstName =$request->get('userFirstName');
        $user->userLastName =$request->get('userLastName');
        $user->userPhone = $request->get('userPhone');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->userType = $request->get('userType');
        $user->userAccept = $request->get('userAccept');

        $user->save();

        return back()->with('status', 'Student was added to the database.');
    }

    public function addCourse(Request $request)
    {
         $this->validate($request, [
            'userId' => 'required',
            'courses' => 'required',
        ]);

        $class = new StudentClass();
        $class->accountId = $request->get('userId');
        $class->courseId =$request->get('courses');
        $class->save();

        return back()->with('status', 'Horray, you are now in a stock room');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function student_signup(Request $request)
    // {
    //     $userId = request('userId');

    //     $accounts = User::where('userId', 'LIKE', "%{$userId}%")
    //                 ->get();

    //     return view('student.signup.results', compact('accounts'));
    // }
    public function newCourse(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
        ]);

        $course = new Course();
        $course->courseName = $request->get('name');
        $course->courseStartDate = $request->get('startdate');
        $course->courseEndDate = $request->get('enddate');
        $course->accountId = $request->get('accountId');
        
        $course->save();

        return back()->with('status', 'Course was created');
    }

    public function newClass(Request $request)
    {
         $this->validate($request, [
            'classStart' => 'required',
            'classEnd' => 'required',
            'courses' => 'required',
            'day' => 'required',
        ]);

        $class = new Classes();
        $class->classStart = $request->get('classStart');
        $class->classEnd = $request->get('classEnd');
        $class->courseId = $request->get('courses');
        $class->weekDay = $request->get('day');
        
        $class->save();

        return back()->with('status', 'Class was created');
    }

    // public function check_student(Request $request)
    // {
    //     $userId = request('userEmail');
    //     $email = request('email');
        
    //     if($email == $userId){

    //     $users = User::where('email', 'LIKE', "%{$email}%")
    //                 ->get();
    //     }

    //     else {
    //             return back()->with('status','The email did not match our records.');
    //     }

    //     return view('student.signup.change', compact('users'));
    // }

    //  public function change_pass(Request $request){

    //     $this->validate($request, [
    //         'password' => 'required|max:8|min:8',
    //         'userType' => 'required',
    //         'userAuthorized' => 'required',
    //     ]);

    //     $userId = $request->get('userId');

    //     $info = User::where('userId', $userId)->first();

    //     $info->userAuthorized = $request->get('userAuthorized');
    //     $info->password = bycrypt($request->get('password'));
    //     $info->userAccept = $request->get('userAccept');

    //     $info->save();
                
    //      return view('home')->with('status', 'Congrats. Please Sign in with your new password and existing email');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
