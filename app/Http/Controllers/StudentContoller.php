<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentContoller extends Controller
{
    //
    public function index()
    {
        $student = Student::all();
        return view('student', ['studentList' => $student]);
    }
}
