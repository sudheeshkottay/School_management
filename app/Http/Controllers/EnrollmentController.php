<?php

namespace App\Http\Controllers;

use App\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        return response()->json(Enrollment::get(),200);
    }
    public function show($id)
    {
        return response()->json(Enrollment::find($id),200);
    }
    public function store(Request $request)
    {
        $enrollment = Enrollment::create($request->all());
        return response()->json($enrollment, 201);
    }
    public function update(Request $request, Enrollment $enrollment)
    {
        $enrollment->update($request->all());
        return response()->json($enrollment, 200);
    }
    public function delete(Request $request, Enrollment $enrollment)
    {
        $enrollment->delete();
        return response()->json(null, 204);
    }
}
