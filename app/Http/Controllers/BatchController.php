<?php

namespace App\Http\Controllers;

use App\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index()
    {
        return response()->json(Batch::get(),200);
    }
    public function show($id)
    {
        return response()->json(Batch::find($id),200);
    }
    public function store(Request $request)
    {
        $batch = Batch::create($request->all());
        return response()->json($batch, 201);
    }
    public function update(Request $request, Batch $batch)
    {
        $batch->update($request->all());
        return response()->json($batch, 200);
    }
    public function delete(Request $request, Batch $batch)
    {
        $batch->delete();
        return response()->json(null, 204);
    }
}
