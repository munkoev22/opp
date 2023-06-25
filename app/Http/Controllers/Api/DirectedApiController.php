<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryDirected;
use App\Http\Resources\DirectedResource;
class DirectedApiController extends Controller
{
    //
    public function index()
    {
     $employments = DictionaryDirected::all();
     return DirectedResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryDirected::where('id', $id)->orderBy('id', 'desc')->paginate();
     return DirectedResource::collection($posts);
    }
}
