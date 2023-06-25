<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryTerrain;
use App\Http\Resources\DictionaryTerrainResource;
class DictionaryTerrainApiController extends Controller
{
    public function index()
    {
     $employments = DictionaryTerrain::all();
     return DictionaryTerrainResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = Post::where('id', $id)->orderBy('id', 'desc')->paginate();
     return PostResource::collection($posts);
    }
}
