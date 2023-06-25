<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryDischarged;
use App\Http\Resources\DischargedResource;
class DischargedApiController extends Controller
{
    //
    public function index()
    {
     $employments = DictionaryDischarged::all();
     return DischargedResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryDischarged::where('id', $id)->orderBy('id', 'desc')->paginate();
     return DischargedResource::collection($posts);
    }
}
