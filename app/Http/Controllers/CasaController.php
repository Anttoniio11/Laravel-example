<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casa;

class CasaController extends Controller
{
    

    /**
     * Traer todas las casas
     * @author Felipe
     */
    public function index()
    {
        $casas = Casa::with('user')->get();
        return response()->json($casas, 200);
    }

    public function show($id)
    {
        $casa = Casa::find($id);
        if(!$casa)
        {
            return response()->json(["error"=> "casa not found"],404);
        }
        return response()->json($casa, 200);
    }

    public function store(Request $request){
        $casa = Casa::create($request->all());
        return response()->json($casa, 200);
    }

    public function update(Request $request, $id)
    {
        $casa = Casa::find($id);
        $casa->update($request->all());
        return response()->json($casa, 200);
    }

    public function destroy($id)
    {
        $casa = Casa::find($id);
        $casa->delete();
        return response()->json(["message" => "Casa delete successful"], 200);
    }

    public function getData($id)
    {
        $casa = Casa::find($id);
        if(!$casa)
        {
            return response()->json(["error"=> "casa not found"],404);
        }
        return response()->json($casa, 200);
    }

    public function delete($id)
    {
        $casa = Casa::find($id);
        $casa->delete();
        return response()->json(["message" => "Casa delete successful"], 200);
    }



}
