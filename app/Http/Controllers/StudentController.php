<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function save(Request $request)
    {
        $this->student->create($request->all());
        return redirect()->back();
    }

    

    // public function show()
    // {
    //     $date = Student::all();
    //     return view('form', ['students' => $date]);
    // }

    public function show()
    {
        $response['students'] = $this->student->all();
        return view('form')->with($response);
    }
}
