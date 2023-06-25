<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryResultDisease;
use App\Http\Resources\ResultDiseaseResource;
class ResultDiseaseApiController extends Controller
{
    //
    public function index()
    {
     $employments = DictionaryResultDisease::all();
     return ResultDiseaseResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryResultDisease::where('id', $id)->orderBy('id', 'desc')->paginate();
     return ResultDiseaseResource::collection($posts);
    }
}
