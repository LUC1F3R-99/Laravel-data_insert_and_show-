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



    public function show()
    {
        $date = Student::all();
        return view('form', ['students' => $date]);
    }

    // public function show()
    // {
    //     $response['students'] = $this->student->all();
    //     return view('form')->with($response);
    // }

    public function edit($stu_id)
    {
        $response['student'] = $this->student->find($stu_id);
        return view('edit')->with($response);
    }

    public function update(Request $request, $stu_id)
    {
        $student = $this->student->find($stu_id);
        $student->update(array_merge($student->toArray(), $request->toArray()));
        return redirect('');
    }

    public function delete(Request $request, $stu_id)
    {
        $student = $this->student->find($stu_id);
        $student->delete();
        return redirect('');
    }
}
