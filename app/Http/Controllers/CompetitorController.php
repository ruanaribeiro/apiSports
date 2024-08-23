<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competitor;

class CompetitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competitor = Competitor::all();
        return response()->json($competitor);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
           'name' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'heigth' => 'required|float',
            'weigth' => 'required|float',
            'gender' => 'required|string|max:20',
            'cpf' => 'required|int',
            'rg' => 'required|int',
            'team' => 'required|string|max:255',
        ]);

        $trainer = Competitor::create($validatedData);
        return response()->json($trainer, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainer = Competitor::find($id);

        if (!$trainer) {
            return  response()->json(["message" => "Competitor not found."], 404);
        }
        return  response()->json($trainer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trainer = Competitor::find($id);
        if (!$trainer) {
            return  response()->json(["message" => "Competitor not found."], 404);
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'heigth' => 'required|float',
            'weigth' => 'required|float',
            'gender' => 'required|string|max:20',
            'cpf' => 'required|int',
            'rg' => 'required|int',
            'team' => 'required|string|max:255',
        ]);

        $trainer->update($validatedData);
        return response()->json($trainer, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trainer = Competitor::find($id);
        if (!$trainer) {
            return  response()->json(["message" => "Competitor not found."], 404);
        }
        $trainer->delete();

        return  response()->json(["message" => "Competitor deleted sucessfully."], 200);
    }
}