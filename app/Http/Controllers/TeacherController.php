<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return response()->json(Teacher::get(),200);
    }
    public function show($id)
    {
        return response()->json(Teacher::find($id),200);
    }
    public function store(Request $request)
    {
        $teacher = Teacher::create($request->all());
        return response()->json($teacher, 201);
    }
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());
        return response()->json($teacher, 200);
    }
    public function delete(Request $request, Teacher $teacher)
    {
        $teacher->delete();
        return response()->json(null, 204);
    }
}
