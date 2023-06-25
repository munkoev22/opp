<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryPatronages;
use App\Http\Resources\PatronagesResource;
class PatronagesApiController extends Controller
{
    //
    public function index()
    {
     $employments = DictionaryPatronages::all();
     return PatronagesResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryPatronages::where('id', $id)->orderBy('id', 'desc')->paginate();
     return PatronagesResource::collection($posts);
    }
}
