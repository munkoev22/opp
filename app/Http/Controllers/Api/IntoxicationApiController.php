<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryIntoxication;
use App\Http\Resources\IntoxicationResource;
class IntoxicationApiController extends Controller
{
    //
    public function index()
    {
     $employments = DictionaryIntoxication::all();
     return IntoxicationResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryIntoxication::where('id', $id)->orderBy('id', 'desc')->paginate();
     return IntoxicationResource::collection($posts);
    }
}
