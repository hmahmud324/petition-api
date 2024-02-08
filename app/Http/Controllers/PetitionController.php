<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use Illuminate\Http\Request;
use App\Http\Resources\PetitionResource;
use App\Http\Resources\PetitionCollection;



class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return new PetitionCollection(Petition::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $petition = Petition::create($request->only(['title' ,'category','description','author','signees']));

        return new PetitionResource($petition);
    }

    /**
     * Display the specified resource.
     * @return PetitionResource
     */
    public function show(Petition $petition)
    {
        return new PetitionResource($petition);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petition $petition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petition $petition)
    {
        //
    }
}
