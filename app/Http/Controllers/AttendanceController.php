<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return response()->json(Attendance::get(),200);
    }
    public function show($id)
    {
        return response()->json(Attendance::find($id),200);
    }
    public function store(Request $request)
    {
        $attendance = Attendance::create($request->all());
        return response()->json($attendance, 201);
    }
    public function update(Request $request, Attendance $attendance)
    {
        $attendance->update($request->all());
        return response()->json($attendance, 200);
    }
    public function delete(Request $request, Attendance $attendance)
    {
        $attendance->delete();
        return response()->json(null, 204);
    }
}
