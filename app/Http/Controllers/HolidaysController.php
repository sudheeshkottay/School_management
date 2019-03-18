<?php

namespace App\Http\Controllers;

use App\Holidays;
use Illuminate\Http\Request;

class HolidaysController extends Controller
{
    public function index()
    {
        return response()->json(Holidays::get(),200);
    }
    public function show($id)
    {
        return response()->json(Holidays::find($id),200);
    }
    public function store(Request $request)
    {
        $holidays = Holidays::create($request->all());
        return response()->json($holidays, 201);
    }
    public function update(Request $request, Holidays $holidays)
    {
        $holidays->update($request->all());
        return response()->json($holidays, 200);
    }
    public function delete(Request $request, Holidays $holidays)
    {
        $holidays->delete();
        return response()->json(null, 204);
    }
}
