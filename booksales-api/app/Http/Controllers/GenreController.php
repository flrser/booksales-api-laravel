<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index() {
       $genres = Genre::all();

        if ($genres->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }

        return response()->json([
            "success" => true, 
            "message" => "Get All Resources",
            "data" => $genres
        ], 200);
    }

     public function store(Request $request){
        // 1. validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'decription' => 'required|string'
        ]);

        // 2. check validator error
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 3. insert data
        $genre = Genre::create([
            'name' => $request->name,
            'decription' => $request->decription
        ]);

        // 4. response
        return response()->json([
            'success' => true,
            'message' => 'Resource added successfully!',
            'data' => $genre
        ], 201);
    }
}
