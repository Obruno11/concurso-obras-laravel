<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Obra;
use App\Models\User;

class ObraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Obra::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $obra = Obra::find($id);
        $propietario = $obra->user->name;

        return response()->json([$obra, $propietario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function galeria(){
        $array_obras_propietario = [];

        $obras = Obra::all();
        foreach ($obras as $item){
            $obra = ['id'=> $item->id, 'titulo' => $item->titulo, 'propietario' => $item->user->name, 'img' => $item->img_url];
            array_push($array_obras_propietario, $obra);
        }

        return response()->json($array_obras_propietario);
    }
}
