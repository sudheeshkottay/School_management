<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return response()->json(Student::get(),200);
    }
    public function show($id)
    {
        return response()->json(Student::find($id),200);
    }
    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return response()->json($student, 201);
    }
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return response()->json($student, 200);
    }
    public function delete(Request $request, Student $student)
    {
        $student->delete();
        return response()->json(null, 204);
    }
}
